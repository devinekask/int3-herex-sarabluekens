<?php

class DAO {

	  private static $sharedPDO;
    protected $pdo;

    // Constructor
    function __construct() {

      if(empty(self::$sharedPDO)) {
        $dbHost = getenv('PHP_DB_HOST') ?: "localhost";
        $dbName = getenv('PHP_DB_DATABASE') ?: "maker";
        $dbUser = getenv('PHP_DB_USERNAME') ?: "maker";
        $dbPass = getenv('PHP_DB_PASSWORD') ?: "maker";

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
