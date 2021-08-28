<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/MakerfaireDAO.php';

class MakerfaireController extends Controller {

  function __construct() {
    $this->makerfaireDAO = new MakerfaireDAO();
  }

  //PER DEZE FUNCTIE MOET JE EEN ROUTE HEBBEN IN INDEX//
  public function index() {

  }

  public function tutorial() {
  }

  public function bedankt() {
  }

  public function winkelkar() {
  }

  public function verzendgegevens() {
  }

  public function shop() {
  }
}
?>
