<?php
class Jwt
{
    private $jwtKey = "rotSecretKey";

    function setPermanentToken($user)
    {
       $payload = array(
            'expiration_time' => time() + (30*365*24*60*60),
            'nume' => $user['nume'],
            'email' => $user['email'],
            'id' => $user['id']
       );

       $jwt = $this->generateJwt($payload);
       setcookie('jwt', $jwt, time() + (30*365*24*60*60), "/", "", true, true);

    }

    function setTemporaryToken($user)
    {
        $payload = array(
            'expiration_time' => time() + 10800,
            'nume' => $user['nume'],
            'email' => $user['email'],
            'id' => $user['id']
       );

       $jwt = $this->generateJwt($payload);
       setcookie('jwt', $jwt, time() + 10800, "/", "", true, true);
    }
    
    private function generateJwt($payload){
        $header = base64_encode(json_encode(array('alg' => 'HS256', 'typ' => 'JWT')));
        $payload = base64_encode(json_encode($payload));
        $sign = hash_hmac('sha256', "$header.$payload", $this->jwtKey);

        return "$header.$payload.$sign";
    }

}

?>