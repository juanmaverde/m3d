<?php

class User
{
   public $username;

   public function __construct() {
      $this->username = 'JMV';
   }

}

class RegUser extends User
{
   public function getUsername() {
      return $this->username;
   }

}

 ?>
