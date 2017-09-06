<?php

class CheckUsername
{
   public $exist;

   public function __construct($username)
   {// @FIXME hardcodeado -> traer de parent::class
      $db = new PDO('mysql:host=localhost;dbname=m3d;charset=utf8mb4;port:3306;', 'juanmaverde', 'nstlqe');
      $query = $db->prepare("SELECT * FROM users WHERE username = '$username'");
      $query->execute();
      $result = $query->fetch(PDO::FETCH_ASSOC);
      if ($result['username'] == $username) {
         $this->exist = true;
      } else {
         $this->exist = false;
      }
   }
}

?>
