<?php
require_once'classes/formmanager.php';
require_once'classes/dbmanager.php';

echo "<pre>";
var_dump($_SERVER);

$formManager = new FormManager($_REQUEST['submit']);
// if form submitted, load data in object
if($formManager->getFormSubmitted()) { // can logIn using both, username OR email
   $IP = $_SERVER['REMOTE_ADDR'];
   $emailOrUsername = $_REQUEST['emailOrUsername'];
   $password = $_REQUEST['password'];
   $dbManager = new DbManager();
   $result = $dbManager->getLoginData($emailOrUsername);
   if ($result['username'] == $emailOrUsername || $result['email'] == $emailOrUsername) { // @FIXME esto esta hardCoded
      if (md5($password) == $result['password']) {
         // @TODO registro del logIn en log
         if ($_REQUEST['remember']) {
            $lifetime = 2592000;
         } else {
            $lifetime = 3600;
         }
         session_set_cookie_params($lifetime);
         session_start();
         $_SESSION['username'] = $result['username'];
         header('Location:index.php');
      } else {
         echo "el usuario y la contrasena no coinciden";
      }
   }
}
?>

<!--=========== HTML code from here ==========-->
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="styles/styles.css">
   <link href="https://fonts.googleapis.com/css?family=Bubbler+One|Quicksand|Roboto+Condensed" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <title> M3D | Ingreso </title>
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
      <div class="loginContainer">
         <p>Complete sus datos de ingreso</p>
         <div class="loginForm">
            <form action="login.php" method="post">
               <input type="text" name="emailOrUsername" value="" placeholder="Nombre de usuario o Email">
               <input type="password" name="password" value="" placeholder="Contraseña">
               <label for="remember">Recordarme</label>
               <input type="checkbox" name="remember" value="" checked>
               <div class="submitContainer">
                  <input type="submit" name="submit" value="submit">
               </div>
            </form>
         </div>
         <div class="redirectToRegister">
               <p>Aún no tengo cuenta, quiero crear una!</p>
            <div class="redirectToRegisterLink">
               <a href="register.php">Registrarme</a>
            </div>
         </div>
      </div>

   </main>
   <div class="footerContainer">
      <footer></footer>
   </div>
</body>

</html>
