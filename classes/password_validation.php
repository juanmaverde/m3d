<?php
// accepts a value as a username and:
   // instance the object
      // if long >= 7 && long <= 21 && includes at least one NUM && at least one CAP
         // returns BOOL
class PasswordValidation
{
   private $password;

   const PASSWORD_MIN_VAL = 7;
   const PASSWORD_MAX_VAL = 21;

   public function __construct($value)
   {
      $this->password = $value;
   }
   public function validatePassword()
   {
      $upperCase = preg_match('@[A-Z]@', $this->password); // at least one CAP
      $lowerCase = preg_match('@[a-z]@', $this->password); // at least one LOW
      $number    = preg_match('@[0-9]@', $this->password); // at least one NUM

      if($upperCase > 0 && $lowerCase > 0 && $number > 0 && strlen($this->password) > PasswordValidation::PASSWORD_MIN_VAL && strlen($this->password) < PasswordValidation::PASSWORD_MAX_VAL) {
        return true;
      } else {
      return false;
      }
   }
   public function hashPassword()
   {
      return $this->password = md5($this->password);
   }
}
?>
