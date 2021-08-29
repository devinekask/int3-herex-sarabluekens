<?php

require_once( __DIR__ . '/DAO.php');

class MakerfaireDAO extends DAO {

  public function insert($data) {
    $errors = $this->validate( $data );
    if (empty($errors)) {
      $sql = "INSERT INTO `Orders` (`naam`, `voornaam`, `straat`, `huisnummer`, `aantal`) VALUES (:naam, :voornaam, :straat, :huisnummer, :aantal)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':naam', $data['naam']);
      $stmt->bindValue(':voornaam', $data['voornaam']);
      $stmt->bindValue(':straat', $data['straat']);
      $stmt->bindValue(':huisnummer', $data['huisnummer']);
      $stmt->bindValue(':aantal', $data['aantal']);
    }
    return false;
  }

  public function validate( $data ){
    $errors = [];
    if (!isset($data['naam'])) {
      $errors['naam'] = 'Gelieve naam in te vullen';
    }
    if (!isset($data['voornaam'])) {
      $errors['voornaam'] = 'Gelieve voornaam in te vullen';
    }
    if (!isset($data['straat'])) {
      $errors['straat'] = 'Gelieve straat in te vullen';
    }
    if (empty($data['huisnummer']) ){
      $errors['huisnummer'] = 'Gelieve een huisnummer in te vullen';
    }
    return $errors;
  }
}
