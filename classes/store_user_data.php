<?php
class a
{
   public function storeRegisterUserData($username, $email, $hashedPassword, $IP) {
      $db = new PDO($this->dsn, $this->dbUser, $this->dbPass);
      $statement = $db->prepare("INSERT INTO users(username, email, password, IPaddress) VALUES ('$username', '$email', '$hashedPassword', '$IP')");
      $statement->execute();
      return true;
   }
}


 ?>
