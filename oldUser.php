<?php
require_once'validations.php';

function userValidation($username, $email, $password) {
   $username = cleanString($username);
   // username -> OK => continue
   if($username = validateUsername($username, 3, 8)) {
      $username = true;
   } else {
      $errors['username'] = 'el nombre de usuario debe tener 3 o más y 20 o menos caracteres';
   }
   // email -> OK => continue
   if($email = validateEmail($email)){
      $email = true;
   } else {
      $errors['email'] = 'el email ingresado no es válido';
   }
   // password -> OK => continue
   if($password = validatePassword($password, 8)) {
      $password = true;
   } else {
      $errors['password'] = 'la contraseña debe tener al menos una mayúscula, una minúscula y un número';
   }
   // if all are TRUE => return TRUE
   if($username == true && $email == true && $password == true) {
      return true;
   } else { // if ONE of them is false => dump error in $errors[]
      return $errors;
   }
}

function hashPassword($password) {
   $password = md5($password);
   return $password;
}

function storeUserData($username, $email, $password) {
   $dsn = 'mysql:host=localhost;dbname=m3d;charset=utf8mb4;port:3306';
   $dbUser = 'juanmaverde';
   $dbPass = 'nstlqe';

   try {
      $db = new PDO($dsn, $dbUser, $dbPass);
   } catch (PDOException $e) {
      echo "$e";
   }
   $statement = $db->prepare("INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')");
   $statement->execute();

   return true;
}

function storePic($pic, $username) {
   // user pic in array['profilePic'] =>
      // ['name'] => string name.extension
      // ['type'] => image/extension
      // ['tmp_name'] => /PATH
      // ['error'] => if OK -> int(0)
      // ['size'] => int(size in bytes)
   // if pic exists -> continue
   if (count($pic)) {
      // extract to picName original pic name from array
      $picName = $pic['name'];
      // extract to picPath tmp_name from array
      $picPath = $pic['tmp_name'];
      // obtain extension
      $picExtension = pathinfo($picName , PATHINFO_EXTENSION);

      // move to /pics
      $result = move_uploaded_file($picPath, 'pics/' . $username . '.' . $picExtension);
   }
   return $result;
}


?>
