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
    <link rel="stylesheet" href="styles/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title> M3D | Registro </title>
</head>

<body>
<div>
<!--        --><?php //include 'header.php'?>
</div>
<main>
    <div class="container">
        <form action="register.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <form role="form">
                        <h2>Registrate <small> y pertenece a nuestra comunidad en línea!</small></h2>
                        <hr class="colorgraph">
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control input-lg" placeholder="ingresa un nombre de usuario" tabindex="3">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-lg" placeholder="una casilla de correo válida" tabindex="4">
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="tu contraseña" tabindex="5">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                Haciendo click en <strong class="label label-primary">Registrarme</strong>, aceptás nuestros <a href="#" data-toggle="modal" data-target="#t_and_c_m">Términos y condiciones</a> así como el Uso de Cookies.
                            </div>
                        </div>
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-md-offset-3"><input type="submit" name="submit" value="registrarme" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                        </div>
                    </form>
                </div>
            </div>
            </form>
    </div>
</main>
<!--    --><?php //include 'footer.php';?>
</body>

</html>