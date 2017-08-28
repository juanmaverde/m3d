<?php

// @TODO borrar archivos de debugging...
// @TODO no permiter proseguir ante username repetido

require_once'user.php';

if ($_REQUEST['submit']) { // if submit button pressed
   // dump $_REQUEST data to local scope variables
   $username = $_REQUEST['username'];
   $email = $_REQUEST['email'];
   $password = $_REQUEST['password'];

   // begin validation
   $resultUserValidation = userValidation($username, $email, $password);
   // if all 3 validations are TRUE => continue
   if($resultUserValidation === true) { // hash password
      $hashedPassword = hashPassword($password);

      // save userData to database
      $resultStoreUserData = storeUserData($username, $email, $hashedPassword);
      if($resultStoreUserData == true) { // if userData saved OK
         // rename pic AND save in ./pic folder
         $pic = $_FILES['profilePic'];
         $resultStorePic = storePic($pic, $username);
         // start session and save parameters
         if ($resultStorePic == true) {
            session_start();
            $_SESSION['username'] = $username;
            // redirect to index
            header('Location:index.php');
         } else {
            echo "dificultades para cargar la foto";
         }
      }
   } else { // show error message
      // @FIXME no funciona el array recolector de errores de validaciones
      $errors = $result;
      var_dump($result);
   }
}


 ?>

<!-- HTML code from here -->

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
            <a href="index.html"><img class="logo" src="imgs/logoFirstDraft.png" alt="logo" width="115px"></a>
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
                  <input type="file" name="profilePic" value="">
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
