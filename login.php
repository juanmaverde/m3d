<?php
require_once 'classes/forms/form.php';
require_once 'classes/forms/username.php';
require_once 'classes/dBase/check_username.php';
require_once 'classes/forms/password.php';

require_once 'exceptions/username_exception.php';
require_once 'exceptions/password_exception.php';

// check if form already submitted
$form = new Form($_REQUEST);
if ($form->checkSubmit()) { // TRUE if submitted
   // download $_REQUEST to local scope
   $username = new Username($_REQUEST['username']);
   $password = new Password($_REQUEST['password']);
   try {
      // check if every field was filled
      if ($username->checkSubmit() && $password->checkSubmit()) {
         // validate username
         $validUsername = $username->validate();
         if ($validUsername) {
            $validUsername = $username->getUsername();
            // if username is valid -> query database
            $matchUser = new CheckUsername($validUsername);
            $userExists = $matchUser->CheckUser();
             if ($userExists) {
                 // hash typed password
                 $typedPassword = $password->getPassword();
                 $storedPassword = $matchUser->getStoredPassword();
                 // compare dBase stored password with hashed typed password
                 if (md5($typedPassword) == $storedPassword) {
                     // if matches -> start session and setup $_SESSION data with lifeTime
                     session_start();
                     $_SESSION['id'] = $matchUser->getUserId();
                     $_SESSION['name'] = $username->getUsername();
                     // redirect to index.php
                     header('location: index.php');
                 }
            }
         }
      }
   } catch (UsernameException $e) {
      echo $e->getMessage();
   } catch (PasswordException $e) {
       echo $e->getMessage();
   } catch (Exception $e) {
      echo $e->getMessage();
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
               <input type="text" name="username" value="" placeholder="Nombre de usuario">
               <input type="password" name="password" value="" placeholder="Contraseña">
               <label for="remember">Recordarme</label>
               <input type="checkbox" name="remember" value="remember" checked>
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
