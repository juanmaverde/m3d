<?php
require_once 'string_field.php'; // parent class

require_once 'classes//validations/min_max.php';
require_once 'classes/validations/whitespace.php';
require_once 'classes/validations/alpha_num.php';
require_once 'classes//validations/special_char.php';

require_once 'exceptions/username_exception.php';

class Username extends StringField
{
   protected $username;

   public function __construct($username)
   {
      parent::__construct($username);
      $this->username = $username;
   }

   public function validate()
   {
      // validation rules:
         // MinMax 7 - 21 : TRUE -> classes/validations/min_max.php
         // no whitespaces : TRUE -> classes/validations/whitespace.php
         // AlphaNum : TRUE -> classes/validations/alpha_num.php
         // no Special Char : FALSE -> classes/validations/special_char.php
      $minMax = new MinMax($this->username);
      $resMinMax = $minMax->getResult();

      $whitespaces = new Whitespace($this->username);
      $resWhitespaces = $whitespaces->getResult();

      $alphaNum = new AlphaNum($this->username);
      $resAlphaNum = $alphaNum->getResult();

      $specialChar = new SpecialChar($this->username);
      $resSpecialChar = $specialChar->getResult();

//@TODO manejo de excepciones

      if ($resMinMax) {
         if ($resWhitespaces) {
            if ($resAlphaNum) {
               if (!$resSpecialChar) {
                  return true;
               } else {
                  throw new UsernameException("contiene caracteres especiales", 4);
                  return false;
               }
            } else {
               throw new UsernameException("no es alfa-num", 3);
               return false;
            }
         } else {
            throw new UsernameException("contiene espacios en blanco", 2);
            return false;
         }
      } else {
         throw new UsernameException("longitud incorrecta", 1);
         return false;
      }

   }
   public function getUsername()
   {
      return $this->username;
   }
}
?>
