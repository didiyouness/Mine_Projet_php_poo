<?php

  // CRUD methods
  class Client {
    private $db;
  
    public function __construct($db) {
      $this->db = $db;
    }
  
    public function create($nom, $prenom, $email, $ville, $adresse, $pays) {
      $query = "INSERT INTO clients (nom, prenom, email, ville, adresse, pays) VALUES (?, ?, ?, ?, ?, ?)";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param("ssssss", $nom, $prenom, $email, $ville, $adresse, $pays);
      $stmt->execute();
      $stmt->close();
    }
  
    public function read($id) {
      $query = "SELECT * FROM clients WHERE id = ?";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param("i", $id);
      $stmt->execute();
      $result = $stmt->get_result();
      $client = $result->fetch_assoc();
      $stmt->close();
      return $client;
    }
  
    public function update($id, $nom, $prenom, $email, $ville, $adresse, $pays) {
      $query = "UPDATE clients SET nom = ?, prenom = ?, email = ?, ville = ?, adresse = ?, pays = ? WHERE id = ?";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param("ssssssi", $nom, $prenom, $email, $ville, $adresse, $pays, $id);
      $stmt->execute();
      $stmt->close();
    }
  
    public function delete($id) {
      $query = "DELETE FROM clients WHERE id = ?";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param("i", $id);
      $stmt->execute();
      $stmt->close();
    }
  
    public function getAll() {
      $query = "SELECT * FROM clients";
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
  