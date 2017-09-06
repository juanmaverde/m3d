<?php
class DsnManager
{ // creates default DSN -> localhost:3306
   private $host;
   private $dbName;
   private $charset;
   private $port;

   private $dsn;

   public function __construct($host = 'localhost', $dbName = 'm3d', $charset = 'utf8mb4' , $port = '3306')
   {
      $this->dsn = 'mysql:host=' . $host . ';dbname=' . $dbName . ';charset=' . $charset . ';port:' . $port . ';';
   }

   public function getDsn()
   {
      return $this->dsn;
   }

   public function setHost($newHost)
   {
      $this->host = $newHost;
   }

   public function setDbName($newDbName)
   {
      $this->dbName = $newDbName;
   }

   public function setCharset($newCharset)
   {
      $this->charset = $newCharset;
   }

   public function setPort($newPort)
   {
      $this->port = $newPort;
   }
}

?>
