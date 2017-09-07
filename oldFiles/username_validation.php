<?php
// accepts a value as a username and:
   // instance the object
   // transform to lowerCase
   // trim white spaces
   // trim special characters
      // if long >= 3 && long <= 20 && alfaNum
         // returns BOOL

class UsernameValidation
{
   private $username;

   const USERNAME_MIN_VAL = 3;
   const USERNAME_MAX_VAL = 20;

   public function __construct($value)
   {
      $this->username = $value;
   }
   public function validateUsername()
   {
      $this->username = strtolower($this->username); // case to lowerCase
      $this->username = str_replace(' ', '', $this->username); // trim whiteSpaces
      $this->username = preg_replace('/[^A-Za-z0-9\+]/', '', $this->username); // trim spacialChars

      if (strlen($this->username) >= UsernameValidation::USERNAME_MIN_VAL && strlen($this->username) <= UsernameValidation::USERNAME_MAX_VAL && ctype_alnum($this->username)) {
         $result = true;
      } else {
         $result = false;
      }
      return $result;
   }
}
?>
