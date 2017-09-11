<?php
require_once 'classes/dBase/m3d_pdo.php';
require_once "exceptions/username_exception.php";

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
        $query = $m3dPDO->prepare("SELECT * FROM users WHERE username = '$this->username';");
        $query->execute();
        $res = $query->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($res))
        {
            throw new UsernameException("el nombre de usuario ya existe en nuestra base de datos");
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
