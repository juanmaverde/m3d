<?php
require_once 'string_field.php'; // parent class

require_once '../validations/min_max.php';
require_once '../validations/whitespace.php';
require_once '../validations/alpha_num.php';
require_once '../validations/special_char.php';
require_once '../validations/upper_case.php';

require_once '../../exceptions/password_exception.php';

class Password extends StringField
{
   protected $password;

   public function __construct($password)
   {
      parent::__construct($password);
      $this->password = $password;
   }

   public function validate()
   {
      // validation rules:
         // MinMax 7 - 21 : TRUE -> classes/validations/min_max.php
         // no whitespaces : TRUE -> classes/validations/whitespace.php
         // AlphaNum : FALSE -> classes/validations/alpha_num.php
         // include Special Char : TRUE -> classes/validations/special_char.php
         // include Upper Case : TRUE -> classes/validations/upper_case.php
      $minMax = new MinMax($this->password);
      $resMinMax = $minMax->getResult();

      $whitespaces = new Whitespace($this->password);
      $resWhitespaces = $whitespaces->getResult();

      $alphaNum = new AlphaNum($this->password);
      $resAlphaNum = $alphaNum->getResult();

      $specialChar = new SpecialChar($this->password);
      $resSpecialChar = $specialChar->getResult();

      $upperCase = new UpperCase($this->password);
      $resUpperCase = $upperCase->getResult();


      if ($resMinMax) {
         if ($resWhitespaces) {
            if (!$resAlphaNum) {
               if ($resSpecialChar) {
                  if ($resUpperCase) {
                     return true;
                  } else {
                     throw new PasswordException("debe contener al menos una MAY", 25);
                     return false;
                  }
               } else {
                  throw new PasswordException("debe contender al menos un caracter especial", 24);
                  return false;
               }
            } else {
               throw new PasswordException("debe contender al menos un caracter especial", 23);
               return false;
            }
         } else {
            throw new PasswordException("no debe contener espacios en blanco", 22);
            return false;
         }
      } else {
         throw new PasswordException("longitud incorrecta", 21);
         return false;
      }

   }
   public function getPassword()
   {
      return $this->password;
   }
}
?>
