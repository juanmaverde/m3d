<?php
require_once '../exceptions/username_exception.php';

class User
{
   public $username;

   public function __construct() {
      $this->username = 'JMV';
   }

   public function getUsername() {
      return $this->username;
   }

   public function compareUsername($inPut) {
      if ($this->username == $inPut)
      {
         echo 'OK';
      } else {
         throw new UsernameException('ERROR YA', 1);
      }

   }
}

$us = new User;
try {
    $us->compareUsername('JMV');
} catch (UsernameException $exception) {
    echo $exception->getMessage();
}
?>
