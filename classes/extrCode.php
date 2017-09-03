<?php

class Extras
{
// @TODO @IDEA @REVIEW las constantes debieran estar en otra clase destinada a hacer validaciones SOLAMENTE
const USERNAME_MIN_VAL=3;
const USERNAME_MAX_VAL=20;
const PASSWORD_MIN_VAL=8;
const PASSWORD_MAX_VAL=13;

// __construct function should retrive a standard using accepting info from attributes
public function __construct($username, $email, $password) {
   $this->username = strtolower($username);
   $this->email = strtolower($email);
   $this->password = $password;
}

// GENERAL FUNCTIONS
public function setUsername($username) {
   $this->username = $username;
}

public function getUsername() {
   return $this->username;
}

public function setEmail($email) {
   $this->email = $email;
}

public function getEmail() {
   return $this->email;
}

// VALIDATION FUNCTIONS
public function validateUsername() { // username validation
   //---($username, $minVal, $maxVal) {
      $this->username = str_replace(' ', '', $this->username);
      $this->username = preg_replace('/[^A-Za-z0-9\+]/', '', $this->username);
      if (isset($this->username) && strlen($this->username) >= User::USERNAME_MIN_VAL && strlen($this->username) <= User::USERNAME_MAX_VAL && ctype_alnum($this->username)) {
         $result = true;
      } else {
         $result = false;
      }
      return $result;
   }

public function validateEmail() { // email validation
      if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
         return true;
      } else {
         return false;
      }
}

public function validatePassword() {
      $upperCase = preg_match('@[A-Z]@', $this->password); // at least one CAP
      $lowerCase = preg_match('@[a-z]@', $this->password); // at least one LOW
      $number    = preg_match('@[0-9]@', $this->password); // at least one NUM

      if($upperCase > 0 && $lowerCase > 0 && $number > 0 && strlen($this->password) > User::PASSWORD_MIN_VAL && strlen($this->password) < User::PASSWORD_MAX_VAL) {
        return true;
      } else {
      return false;
      }
}

public function hashPassword() {
   return md5($this->password);
}

// store profile pic into /pics
public function storePic($pic) {
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
      $result = move_uploaded_file($picPath, 'pics/' . $this->username . '.' . $picExtension);
   }
   return $result;
}

}

 ?>
