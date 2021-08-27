<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/MakerfaireDAO.php';

class MakerfaireController extends Controller {

  function __construct() {
    $this->makerfaireDAO = new MakerfaireDAO();
  }

  //PER DEZE FUNCTIE MOET JE EEN ROUTE HEBBEN IN INDEX//
  public function index() {
    // $boeken = $this->makerfaireDAO->getAllBooks();
    // $abbos = $this->makerfaireDAO->getAllAbbos();
    // $leesaccs = $this->makerfaireDAO->getAllLeesaccs();
    // $extras = $this->makerfaireDAO->getAllExtras();

    // $this->set('boeken', $boeken);
    // $this->set('abbos', $abbos);
    // $this->set('leesaccs', $leesaccs);
    // $this->set('extras', $extras);
  }
  //
  public function tutorial() {

//ROUTES NOG VERANDEREN NAAR HUMO VANAF HIER//

    // if(!empty($_GET['id'])){
    //   if(empty($_GET['id']) ||!$product = $this->makerfaireDAO->getProductById($_GET['id'])) {
    //     $_SESSION['error'] = 'Invalid Product';
    //     header('Location:index.php');
    //     }

    //   $product = $this->makerfaireDAO->getProductById($product['id']);

    //   $this->set('product',$product);
    //   }
    }

//

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
