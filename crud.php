<?php

  // CRUD methods
  class Client {
    private $db;
  
    public function __construct($db) {
      $this->db = $db;
    }
  
    public function create($nom, $prenom, $email, $ville, $adresse, $pays) {
      $query = "INSERT INTO client (nom, prenom, email,tele, ville, adresse, pays) VALUES (?,?,?, ?, ?, ?, ?)";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param("ssssss", $nom, $prenom, $email, $ville, $adresse, $pays);
      $stmt->execute();
      $stmt->close();
    }
  
    public function read($id) {
      $query = "SELECT * FROM client WHERE id = ?";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param("i", $id);
      $stmt->execute();
      $result = $stmt->get_result();
      $client = $result->fetch_assoc();
      $stmt->close();
      return $client;
    }
  
    public function update($id, $nom, $prenom, $email, $ville, $adresse, $pays) {
      $query = "UPDATE client SET nom = ?, prenom = ?, email = ?, tele = ?,ville = ?, adresse = ?, pays = ? WHERE id = ?";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param("ssssssi", $nom, $prenom, $email, $ville,$tele, $adresse, $pays, $id);
      $stmt->execute();
      $stmt->close();
    }
  
    public function delete($id) {
      $query = "DELETE FROM client WHERE id = ?";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param("i", $id);
      $stmt->execute();
      $stmt->close();
    }
  
    public function getAll() {
      $query = "SELECT * FROM client";
      $stmt = $this->db->prepare($query);
      $stmt->execute();
      $result = $stmt->get_result();
      $clients = array();
      while ($client = $result->fetch_assoc()) {
        $clients[] = $client;
      }
      $stmt->close();
      return $clients;
    }
  }
  