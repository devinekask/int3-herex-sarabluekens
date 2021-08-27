<?php

class DAO {

      // Properties
    // private static $dbHost = "localhost";
	  // private static $dbName = "Makerfaire";
	  // private static $dbUser = "makerfaire";
	  // private static $dbPass = "makerfaire";
	  private static $sharedPDO;
    protected $pdo;

    // Constructor
    function __construct() {

      if(empty(self::$sharedPDO)) {


        $dbHost = getenv('PHP_DB_HOST') ?: "ID282027_20202021.db.webhosting.be";
        $dbName = getenv('PHP_DB_DATABASE') ?: "ID282027_20202021";
        $dbUser = getenv('PHP_DB_USERNAME') ?: "ID282027_20202021";
        $dbPass = getenv('PHP_DB_PASSWORD') ?: "int3MakerFair";


        self::$sharedPDO = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUser, $dbPass);
        self::$sharedPDO->exec("SET CHARACTER SET utf8");
        self::$sharedPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$sharedPDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      }

      $this->pdo =& self::$sharedPDO;

}
  // Methods
}
 ?>
