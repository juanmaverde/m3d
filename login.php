<?php
require_once 'classes/forms/form.php';
require_once 'classes/forms/username.php';
require_once 'classes/dBase/check_username.php';
require_once 'classes/forms/password.php';

require_once 'exceptions/form_exception.php';
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
   } catch (FormException $e) {
       echo $e->getMessage();
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
    <link rel="stylesheet" href="styles/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title> M3D | Login </title>
</head>

<body>
<div>
    <!--        --><?php //include 'header.php'?>
</div>
<main>
    <div class="container">
        <form action="login.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <form role="form">
                        <h2>Logeate <small> para colaborar en nuestra comunidad!</small></h2>
                        <hr class="colorgraph">
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control input-lg" placeholder="ingresá tu nombre de usuario" tabindex="3">
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="tu contraseña" tabindex="5">
                                </div>
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
    <?php include 'footer.php';?>
</body>

</html>