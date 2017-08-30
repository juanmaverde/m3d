<?php

class User
{
   public $username;

   public function __construct() {
      $this->username = 'JMV';
   }

   public function getUsername() {
      return $this->username;
   }

   public function setUsername($username) {
      $this->username = $username;
   }
}

 ?>
