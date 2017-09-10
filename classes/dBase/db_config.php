<?php
//file = '../../settings/localhost_m3d_root_settings.ini';

// @TODO split this class into two different sub-classes ---> 1) dbData 2) dbUser
class DbConfig
{
   private $path;
   private $driver;
   private $host;
   private $port;
   private $dbname;
   private $dbuser;
   private $dbpass;
   private $dsn;
   private $PDOData;

   public function __construct($iniFile) // compiles config DB data
   {
      // if a valid .ini extension file passed by argument
      if (realpath($iniFile)) {
         // stores .ini file $PATH
         $this->path = realpath($iniFile);
         // parses file and compile DB data
         $settings = parse_ini_file($iniFile, false);
         // capture settings and load private attributes
         $this->driver = $settings['driver'];
         $this->host = $settings['host'];
         $this->port = $settings['port'];
         $this->dbname = $settings['dbname'];
         $this->dbuser = $settings['dbuser'];
         $this->dbpass = $settings['dbpass'];
      } else {
         //throw new DbConfigException("The specified .ini file does not exist", 1);
      }
   }

   public function getDsn()
   {
      $this->dsn = 'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname;
      return $this->dsn;
   }
   public function getPDOData()
   {
      $this->PDOData = ('mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname) . $this->dbuser . ',' . $this->dbpass;
      return $this->PDOData;
   }

   public function getDriver()
   {
      return $this->driver;
   }
   public function getHost()
   {
      return $this->host;
   }
   public function getPort()
   {
      return $this->port;
   }
   public function getDbname()
   {
      return $this->dbname;
   }
   public function getDbuser()
   {
      return $this->dbuser;
   }
   public function getDbpass()
   {
      return $this->dbpass;
   }
}

 ?>
