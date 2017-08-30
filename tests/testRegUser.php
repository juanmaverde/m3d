<?php

class RegUser extends User
{
   public function getUsername() {
      //return $this->username;
      parent::getUsername();
   }

   public function setUsername($username) {
      $this->username = $username;
   }
}
 ?>
