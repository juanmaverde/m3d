<?php

class DbManager
{
public $host;
public $dbName;
public $dbUser;
public $dbPass;
public $dsn;

// GENERAL DATABASE FUNCTIONS
public function __construct($host = 'localhost', $dbName = 'm3d',  $dbUser = 'juanmaverde', $dbPass = 'nstlqe') {
   $this->host = $host;
   $this->dbName = $dbName;
   $this->dbUser = $dbUser;
   $this->dbPass = $dbPass;
   $this->dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName . ';charset=utf8mb4;port:3306';;
}
public function getDsn() {
   return $this->dsn;
}
public function setHost($host = 'localhost') {
   $this->host = $host;
}
public function setDbName($dbName = 'm3d') {
   $this->dbName = $dbName;
}
public function setDbUser($dbUser = 'juanmaverde') {
   $this->dbUser = $dbUser;
}
public function setDbPass($dbPass = 'nstlqe') {
   $this->dbPass = $dbPass;
}
public function setDsn() {
   return 'mysql:host=' . $this->host . ';dbname=' . $this->dbName . ';charset=utf8mb4;port:3306';
}

// DATABASE UPLOAD
public function storeRegisterUserData($username, $email, $hashedPassword, $IP) {
   $db = new PDO($this->dsn, $this->dbUser, $this->dbPass);
   $statement = $db->prepare("INSERT INTO users(username, email, password, IPaddress) VALUES ('$username', '$email', '$hashedPassword', '$IP')");
   $statement->execute();
   return true;
}

// DATABASE QUERIES
public function duplicatedUsername($username) {
   $db = new PDO($this->dsn, $this->dbUser, $this->dbPass);
   $query = $db->prepare("SELECT * FROM users WHERE username = '$username'");
   $query->execute();
   $result = $query->fetch(PDO::FETCH_ASSOC);
   if ($result['username'] == $username) {
      return true;
   } else {
      return false;
   }
}

public function getLoginData($emailOrUsername) {
   $db = new PDO($this->dsn, $this->dbUser, $this->dbPass);
   $query = $db->prepare("SELECT * FROM users WHERE username = '$emailOrUsername' OR email = '$emailOrUsername'");
   $query->execute();
   $result = $query->fetch(PDO::FETCH_ASSOC);

   return $result;
}

}

?>
