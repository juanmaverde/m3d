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


<!--=========== HTML code from here ==========-->
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="styles/styles.css">
   <link rel="stylesheet" href="bootstrap.css">
   <link href="https://fonts.googleapis.com/css?family=Bubbler+One|Quicksand|Roboto+Condensed" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <title> M3D | Registro </title>
</head>

<body>
   <div>
      <header class="largeHeaderContainer">
         <div class="logoContainer">
            <a href="index.php"><img class="logo" src="imgs/logoFirstDraft.png" alt="logo" width="115px"></a>
         </div>
         <div class="secondaryMenuContainer">
            <nav>
               <ul class="secondaryMenu">
                  <li><a href="#">STATS</a></li>
                  <li><a href="#">USER STORIES</a></li>
                  <li><a href="contactForm.html">CONTACTO</a></li>
                  <li><a href="faqs.html">FAQ's</a></li>
               </ul>
            </nav>
         </div>
         <div class="mainMenuContainer">
            <nav>
               <ul class="mainMenu">
                  <li><a href="register.php">CREAR CUENTA</a></li>
                  <li><a href="login.php" class="mainMenuFavorite">INGRESO</a></li>
               </ul>
            </nav>
         </div>
      </header>
   </div>
   <main>
      <div class="registerContainer">
         <p>Complete los siguientes datos de registro para crear su cuenta:</p>
            <form action="register.php" method="post" enctype="multipart/form-data">
               <div class="registerForm">
                  <input type="text" name="username" value="" placeholder="Nombre de usuario">
                  <input type="email" name="email" value="" placeholder="Email">
                  <input type="password" name="password" value="" placeholder="Contraseña">
               <div class="pic">
                  <input type="file" name="pic" value="">
               </div>
               </div>
               <div class="submitContainer">
                  <input type="submit" name="submit" value="submit">
               </div>
            </form>
      </div>
      <div class="redirectToLogin">
            <p>Ya tengo una cuenta, quiero ingresar!</p>
         <div class="redirectToLoginLink">
            <a href="login.php">Ingresar</a>
         </div>
      </div>

   </main>
   <div class="footerContainer">
      <footer></footer>
   </div>
</body>

</html>
