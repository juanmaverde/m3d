<?php
require_once 'classes/forms/form.php';

require_once 'classes/forms/username.php';
require_once 'classes/dBase/check_username.php';
require_once 'classes/forms/email.php';
require_once 'classes/forms/password.php';

require_once 'classes/dBase/store_user_data.php';

// check if form already submitted
var_dump($_REQUEST);
$form = new Form($_REQUEST);
$submittedForm = $form->checkSubmit(); // TRUE if submitted

// download $_REQUEST data to variables
$username = new Username($_REQUEST['username']);
$email = new Email($_REQUEST['email']);
$password = new Password($_REQUEST['password']);
// username validation
$validUsername = $username->validate(); // TRUE if valid || UsernameException if FALSE
$validUsername = $username->getUsername();
// if user is valid ➞ check if already exists in dBase
$dupUsername = new CheckUsername($username->getUsername());
$dup = $dupUsername->checkUsername();
// if username !exists in dBase ➞ continue validation process
// email validation
$validEmail = $email->validate();
$validEmail = $email->getEmail();
// password validation
$validPassword = $password->validate();
// if all fields are valid ➞ hash password
//@TODO create class to hash password allowing to extend to other protocols in the future
$hashedPassword = md5($validPassword);
// store user data
$userData = new StoreUserData($validUsername, $validEmail, $hashedPassword);
$userData->storeData();
// if data stored without problems ➞ move uploaded pic as profile pic

// start and setup session attributes
session_start();
$_SESSION['name'] = $validUsername;
// redirect to index
header('Location: index.php');

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
