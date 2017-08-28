<?php

require_once'testUser.php';

$user = new User;
echo "<pre>";
echo $user->username;

$regUser = new RegUser;
echo "<pre>";
var_dump($regUser);

echo $regUser->getUsername();

 ?>
