<?php


class UserSession //singleton
{

    private static $instance;
    private $conectat;
    private $userName;
    private $email;
    private $id;
    private $jwtKey = "rotSecretKey";

    private function __construct() 
    {   //este verificata validitatea jwt-ului
        $this->conectat = 0;
        
        if (!$this->conectat && isset($_COOKIE['jwt'])) {
            $jwt = $_COOKIE['jwt'];
            $this->validateJwtAndSetUser($jwt);
        }

    }

    private function validateJwtAndSetUser($jwt){ //este decodat jwt-ul, este creata signatura valida si comparata cu cea a token-ului  
        $parts = explode('.', $jwt);
        $header = base64_decode($parts[0]);
        $payload = base64_decode($parts[1]);
        $sign = $parts[2];

        $validSign = hash_hmac('sha256', "$parts[0].$parts[1]", $this->jwtKey);

        if($validSign === $sign){
            $decodedPayload = json_decode($payload, true);

            $expirationTime = $decodedPayload['expiration_time'];
            if($expirationTime >= time()){
                $this->userName = $decodedPayload['nume'];
                $this->email = $decodedPayload['email'];
                $this->id = $decodedPayload['id'];
                $this->conectat = 1;
            }
        }

    }

    public static function getInstance(){ //returnarea instantei (sau crearea ei, daca nu exista)
        if(!self::$instance)
        {
            self::$instance = new UserSession();
        }
        return self::$instance;
    }

    public function isConnected(){
        return $this->conectat;
    }

    public function getId(){
        return $this->id;
    }

    public function logout(){
        setcookie('jwt', '', time() - 3600, "/");
        $this->conectat = 0; 
        $this->userName = null;
        $this->email = null;
        $this->id = null;   
    }
}

?>