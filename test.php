<?php
require_once'User.php';
require_once'FormManager.php';
require_once'DbManager.php';

// @TODO manejo de errores y los avisos embebidos en el HTML

// check if form already sent AND create new instance form manager
$formManager = new FormManager($_REQUEST['submit']);
// if form submitted, load data in object
if($formManager->getFormSubmitted()) {
   $IP = $_SERVER['REMOTE_ADDR'];
   $username = strtolower($_REQUEST['username']);
   $email = strtolower($_REQUEST['email']);
   $password = $_REQUEST['password'];
   // check if enough data to create user
   if (!empty($username) && !empty($email) && !empty($password)) {
      // create new instance User
      $user = new User($username, $email, $password);
      // begin validation process
         // validate username && email && password
      if ($user->validateUsername() && $user->validateEmail() && $user->validatePassword()) {
         // hash password
         $hashedPassword = $user->hashPassword();
         $dbManager = new DbManager();
         if ($dbManager->duplicatedUsername($username) == false) {
            // store data in db
            if($dbManager->storeRegisterUserData($username, $email, $hashedPassword)) {
            // move pic to /pics
               if($user->storePic($_FILES['pic'])) {
               // start session and load attributes
               session_start();
               $_SESSION['username'] = $username;
               // redirect to index.php
               header('Location:index.php');
               } else {
                  echo "la foto de perfil no ha podido ser almacenada";
               }
            } else {
               echo "han habido dificultades durante el almacenamiento de los datos de usuario";
         }
         } else {
            echo "el nombre de usuario ya existe en nuestra base de datos";
         }
      } else {
         echo "han surgido errores durante la validación de los campos";
      }
   } else {
      echo "todos los datos deben ser completados";
   }
}

?>

<!-- HTML code form here -->
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>test</title>
   </head>
   <body>
      <form class="" action="test.php" method="post" enctype="multipart/form-data">
         <input type="text" name="username" value="" placeholder="nombre de usuario"> <br/>
         <input type="email" name="email" value="" placeholder="email"> <br/>
         <input type="password" name="password" value="" placeholder="password"> <br/>
         <input type="file" name="pic" value=""> <br/>

         <input type="submit" name="submit" value="submit">
      </form>
   </body>
</html>
