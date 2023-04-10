<?php
class Connexion{
    private $host;
    private $user;
    private $password;
    private $dbname;
    private $db;
    public function __construct($host,$user,$password,$dbname){
        $this ->host = $host;
        $this ->user = $user;
        $this ->password = $password;
        $this ->dbname = $dbname;
        $this ->connect();
    }
    private function connect(){
        $this->db = new mysqli($this -> host,$this -> user,$this -> password,$this -> dbname)
        if($this->db->connect_error){
            die("connection failed:".$this->db->connect_error);
        }
    }
}
?>