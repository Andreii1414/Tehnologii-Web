<?php


class UserSession //singleton
{

    private static $instance;
    private $conectat;
    private $userName;
    private $email;

    private function __construct()
    {
        session_start();
        $this->conectat = 0;

        if (isset($_SESSION['nume']) && isset($_SESSION['email'])) {
            $this->userName = $_SESSION['nume'];
            $this->email = $_SESSION['email'];

            //verifica existenta cookie-ului
            if (isset($_COOKIE[session_name()])) {
                if (isset($_SESSION['expiration_time'])) {
                    $expirationTime = $_SESSION['expiration_time'];
                    //verifica daca nu cumva cookie-ul a expirat 
                    if ($expirationTime < time()) {
                        $this->logout();
                    } else { //exista un utilizator conectat
                        $this->conectat = 1;
                    }
                }
            }
        }

    }

    public static function getInstance(){
        if(!self::$instance)
        {
            self::$instance = new UserSession();
        }
        return self::$instance;
    }

    public function isConnected(){
        return $this->conectat;
    }

    public function logout(){
        session_unset();
        session_destroy();
        $this->conectat = 0; 
        $this->userName = null;
        $this->email = null;
    }
}

?>