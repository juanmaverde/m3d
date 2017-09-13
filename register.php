<?php
require_once 'support.php';

require_once 'classes/forms/form.php';
require_once 'classes/forms/username.php';
require_once 'classes/dBase/check_username.php';
require_once 'classes/forms/email.php';
require_once 'classes/forms/password.php';
require_once 'classes/dBase/store_user_data.php';
require_once 'classes/files/store_profile_pic.php';

require_once 'exceptions/form_exception.php';
require_once 'exceptions/username_exception.php';
require_once 'exceptions/email_exception.php';
require_once 'exceptions/password_exception.php';

// check if form already submitted
//--->>> support.php
if ($form->checkSubmit()) { // TRUE if submitted
    // download $_REQUEST data to variables
        $username = new Username($_REQUEST['username']);
        $email = new Email($_REQUEST['email']);
        $password = new Password($_REQUEST['password']);
    try {
      // check if every field was filled
      if ($username->checkSubmit() && $email->checkSubmit() && $password->checkSubmit()) {
        // start validation process
        // username validation
        $validUsername = $username->validate(); // true | exception
          if ($validUsername) {
              // if username is valid it is stored in a variable
              $validUsername = $username->getUsername();
              // query the dBase to check if username is duplicated
              $dupUsername = new CheckUsername($validUsername);
              $dup = $dupUsername->checkDupUsername();
              // if username !exists in dBase ➞ continue validation process
              if ($dup == false) {
                  // email validation
                  $validEmail = $email->validate();
                  if ($validEmail) {
                      $validEmail = $email->getEmail();
                      // password validation
                      $validPassword = $password->validate();
                      if ($validPassword) { //@TODO create class to hash password allowing to extend to other protocols in the future
                          $validPassword = $password->getPassword();
                          $hashedPassword = md5($validPassword);
                          // store user data
                          $userData = new StoreUserData($validUsername, $validEmail, $hashedPassword);
                          $storeData = $userData->storeData();
                          if ($storeData) {
                              // if uploaded ➞ move profilePic to /pics
                              $pic = new StorePic($_FILES['pic']);
                              $pic->storeProfilePic($validUsername); //@TODO quitar las UpperCase del nombre de archivo
                              // start and setup session attributes
                              session_start();
                              $_SESSION['name'] = $validUsername;
                              // redirect to index
                              header('Location: index.php');
                          }
                      }
                  }
              }
          }
      }
   } catch (FormException $e) {
      echo 'Form Exception' . ' ' . $e->getMessage();
   } catch (UsernameException $e) {
      echo 'Username Exception' . ' ' . $e->getMessage();
   } catch (EmailException $e) {
      echo 'Email Exception' . ' ' . $e->getMessage();
   } catch (PasswordException $e) {
      echo 'Password Exception' . ' ' . $e->getMessage();
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
   <link rel="stylesheet" href="styles/bootstrap.css">
   <link href="https://fonts.googleapis.com/css?family=Bubbler+One|Quicksand|Roboto+Condensed" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <title> M3D | Registro </title>
</head>

<body>
   <div>
      <?php include 'header.php'?>
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
   <?php include 'footer.php';?>
</body>

</html>
