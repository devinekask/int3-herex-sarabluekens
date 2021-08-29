<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/MakerfaireDAO.php';

class MakerfairesController extends Controller {

  function __construct() {
    $this->makerfaireDAO = new MakerfaireDAO();
  }
  public function index() {
  }

  public function winkelkar() {
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'InsertOrder') {
        $this->handleInsertOrder();
      }
    }
  }
  private function handleInsertOrder() {
    $data = array(
      'naam' => $_POST['naam'],
      'voornaam' => $_POST['voornaam'],
      'straat' => $_POST['straat'],
      'huisnummer' => $_POST['huisnummer'],
      'aantal' => $_POST['aantal']
    );
    $InsertOrderResult = $this->makerfaireDAO->insert($data);
    if (!$InsertOrderResult) {
      $errors = $this->makerfaireDAO->validate($data);
      $this->set('errors', $errors);

      // in het geval van een POST request uit JavaScript sturen we JSON terug met errors
      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode(array(
          'result' => 'error',
          'errors' => $errors
        ));
        // We sturen de response direct terug
        exit();
      }
      $_SESSION['error'] = 'De bestelling kon niet worden geplaatst!';
    } else {
      // in het geval van een POST request uit JavaScript sturen we JSON terug met aangemaakte bestelling
      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode(array(
          'result' => 'ok',
          'Orders' => $InsertOrderResult
        ));
        // We sturen de response direct terug
        exit();
      }

    }
  }
  public function tutorial() {
  }

  public function overzichtM() {
  }

  public function overzichtZ() {
  }

  public function stap1M() {
  }

  public function stap1Z() {
  }

  public function stap2M() {
  }

  public function stap2Z() {
  }

  public function stap3M() {
  }

  public function stap3Z() {
  }

  public function stap4M() {
  }

  public function stap4Z() {
  }

  public function bedankt() {
  }
  }
?>
