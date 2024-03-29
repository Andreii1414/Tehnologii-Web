<?php
class Jwt
{
    private $jwtKey = "rotSecretKey";

    /*function setPermanentToken($user)
    { //este creat un token pentru autentificarea permanenta a utilizatorului si este stocat intr-un cookie
       $payload = array(
            'expiration_time' => time() + (30*365*24*60*60),
            'nume' => $user['nume'],
            'email' => $user['email'],
            'id' => $user['id']
       );

       $jwt = $this->generateJwt($payload);
       setcookie('jwt', $jwt, time() + (30*365*24*60*60), "/", "", true, true);

    }*/

    function setTemporaryToken($user)
    {//este creat un token pentru autentificarea temporara a utilizatorului si este stocat intr-un cookie
        $payload = array(
            'expiration_time' => time() + 43200,
            'nume' => $user['nume'],
            'email' => $user['email'],
            'id' => $user['id']
       );

       $jwt = $this->generateJwt($payload);
       setcookie('jwt', $jwt, time() + 43200, "/", "", true, true);
    }
    
    private function generateJwt($payload){ //este generat jwt-ul
        $header = base64_encode(json_encode(array('alg' => 'HS256', 'typ' => 'JWT')));
        $payload = base64_encode(json_encode($payload));
        $sign = hash_hmac('sha256', "$header.$payload", $this->jwtKey);

        return "$header.$payload.$sign";
    }

    function verifyToken($token){ //decodarea token-ului si verificarea validitatii + verificarea timpului de expirare
        list($headerD, $payloadD, $sign) = explode('.', $token);
        $header = json_decode(base64_decode($headerD), true);
        $payload = json_decode(base64_decode($payloadD), true);
        $valid = hash_hmac('sha256', "$headerD.$payloadD", $this->jwtKey);

        if($sign !== $valid){
            return false;
        }

        if(isset($payload['expiration_time']) && $payload['expiration_time'] < time()){
            return false;
        }

        return true;

    }

}

?>