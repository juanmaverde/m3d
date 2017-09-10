<?php

require_once 'm3d_pdo.php';

class CheckUsername
{

    private $username;

    public function __construct($usernameToCheck)
    {
        $this->username = $usernameToCheck;
    }

    public function checkUsername()
    {
        $m3dPDO = new M3dPDO;
        $query = $m3dPDO->prepare("SELECT * FROM users WHERE username = '$username';");
        $query->execute();
        $res = $query->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($res))
        {
            return true;
        } else {
            return false;
        }
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($newUsername)
    {
        $this->username = $newUsername;
    }

}

?>

