<?php
require_once 'db_config.php';

// creates a PDO with default attribues setted to connect mySQL m3d Dbase
class M3dPDO extends PDO
{
   private $iniFilePath = 'settings/localhost_m3d_root_settings.ini';

   public function __construct()
   {
      $settings = new DbConfig($this->iniFilePath);

      parent::__construct($settings->getDsn(), $settings->getDbuser(), $settings->getDbpass());
   }

   public function getIniFilePath()
   {
      return $this->iniFilePath;
   }

   public function setIniFilePath($newIniFilePath)
   {
      $this->iniFilePath = $newIniFilePath;
   }
}

 ?>
