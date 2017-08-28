<?php

require_once'testUser.php';
require_once'testRegUser.php';

$user = new User;
echo "<pre>";
echo $user->username;



$regUser = new RegUser;

$regUser->getUsername();

echo "<pre>";
echo $regUser->username;

$regUser->setUsername('Juan Verde');

echo "<pre>";
echo $regUser->username . 'es difernte a ' . $user->username; 

 ?>
