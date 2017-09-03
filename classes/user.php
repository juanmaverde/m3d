<?php

class User
{
// private attributes to avoid their modification straightForward
private $username;
private $email;
private $password;

   public function __construct ($username, $email, $password)
   {
      $this->setUsername($username);
      $this->setEmail($email);
      $this->setPassword($password);
   }
   public function getUsername()
   {
      return $this->username;
   }
   public function setUsername($value)
   {
      $this->username = $value;
   }
   public function getEmail()
   {
      return $this->email;
   }
   public function setEmail($value)
   {
      $this->email = $value;
   }
   public function getPassword()
   {
      return $this->password;
   }
   public function setPassword($value)
   {
       $this->password = md5($value);
   }
}

?>
