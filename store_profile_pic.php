<?php

class StorePic
{
    private $name;
    private $type;
    private $extension;
    private $tempName;
    private $error;

    public function __construct($file)
    {
        if(!empty($file))
        {
            $this->name = $file['name'];
            $this->type = $file['type'];
            $this->extension = pathinfo($file['name'], PATHINFO_EXTENSION);
            $this->tempName = $file['tmp_name'];
            $this->error = $file['error'];
        }
    }
    public function storeProfilePic($username)
    {
        move_uploaded_file($this->tempName, 'pics/' . $username . '.' . $this->extension);
    }
}
