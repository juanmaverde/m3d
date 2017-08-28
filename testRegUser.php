<?php
require_once'testUser.php';

class RegUser
{
   public $dob;
   public $gender;

   public $username;

   public function __construct($username) {
      $this->username = $username;
   }

   public function getUsername() {
      return $this->username;
   }

}
 ?>
