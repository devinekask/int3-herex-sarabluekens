<?php

require_once( __DIR__ . '/DAO.php');

class MakerfaireDAO extends DAO {

  // public function getAllBooks(){
  //   $sql = "SELECT * FROM `Producten` WHERE `soort` = 'boek'";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  // }

  // public function getAllAbbos() {
  //   $sql = "SELECT * FROM `Producten` WHERE `soort` = 'abonnement'";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  // }

  // public function getAllLeesaccs() {
  //   $sql = "SELECT * FROM `Producten` WHERE `soort` = 'leesaccessoire'";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  // }

  // public function getAllExtras() {
  //   $sql = "SELECT * FROM `Producten` WHERE `soort` = 'extra'";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  // }

  // public function getProductById($id) {
  //   $sql = " SELECT * FROM `Producten`WHERE `id`= :id";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':id', $id);
  //   $stmt->execute();
  //   return $stmt->fetch(PDO::FETCH_ASSOC);
  // }



}
