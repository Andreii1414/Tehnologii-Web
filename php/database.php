<?php
    class Database{

    private $servername = "localhost";
    private $username = "admin";
    private $password = "rotDatabase";
    private $dbname = "rotDB";
        
    public function connect (){
        $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        else return $conn;
    }
}
?>