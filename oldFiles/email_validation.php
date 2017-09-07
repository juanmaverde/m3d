<?php
// accepts a value as a email and:
   // instance the object
   // use FILTER_VALIDATE_EMAIL contant to validate email
      // returns BOOL

class EmailValidation
{
   private $email;

   public function __construct($value)
   {
      $this->email = $value;
   }
   public function validateEmail()
   {
      if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
         return true;
      } else {
         return false;
      }
   }
}
?>
