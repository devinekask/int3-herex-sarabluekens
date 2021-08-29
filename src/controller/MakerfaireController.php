<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/MakerfaireDAO.php';

class MakerfaireController extends Controller {

  function __construct() {
    $this->makerfaireDAO = new MakerfaireDAO();
  }

  public function index() {

  }

  public function tutorial() {
  }



  public function overzicht() {
  }


  public function stap1() {
  }

  public function bedankt() {
  }
  
  public function verzendgegevens() {
  }

}
?>
