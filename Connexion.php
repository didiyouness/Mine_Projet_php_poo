<?php
class Connexion {
  private $host;
  private $user;
  private $password;
  private $dbname;
  private $db;

  public function __construct($host, $user, $password, $dbname) {
    $this->host = $host;
    $this->user = $user;
    $this->password = $password;
    $this->dbname = $dbname;
    $this->connect();
  }

  private function connect() {
    $this->db = new mysqli($this->host, $this->user, $this->password, $this->dbname);
    if ($this->db->connect_error) {
      die("Connection failed: " . $this->db->connect_error);
    }
  }

  public function query($query) {
    $result = $this->db->query($query);
    if (!$result) {
      die("Query failed: " . $this->db->error);
    }
    return $result;
  }

  public function prepare($query) {
    $stmt = $this->db->prepare($query);
    if (!$stmt) {
      die("Prepare failed: " . $this->db->error);
    }
    return $stmt;
  }

  public function escape($string) {
    return $this->db->real_escape_string($string);
  }

  public function close() {
    $this->db->close();
  }
}
