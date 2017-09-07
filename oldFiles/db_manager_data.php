<?php

class DbManagerData
{
   private $dbUser;
   private $dbPass;

   public function __construct($dbUser, $dbPass)
   {
      $this->dbUser = $dbUser;
      $this->dbPass = $dbPass;
   }

   public function getDbUser()
   {
      return $this->dbUser;
   }

   public function getDbPass()
   {
      return $this->dbPass;
   }
}

 ?>
