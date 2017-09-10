<?php

require_once 'm3d_pdo.php';

class StoreUserData
{

    private $username;
    private $email;
    private $password;


    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function storeData()
    {
        $m3dPDO = new M3dPDO;
        $statement = $m3dPDO->prepare("INSERT INTO users (username, email, password) VALUES ('$this->username', '$this->email', '$this->password');");
        $statement->execute();

    }
}

?>

