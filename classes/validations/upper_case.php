<?php
require_once 'validation.php';
require_once 'exceptions/special_char_exception.php';

class UpperCase extends Validation
{// returns TRUE if ANY UpperCase
      // FALSE if NO UpperCase
   public function __construct($string)
   {
      if (preg_match("/[A-Z]/", $string) > 0) {
         $this->result = true;
      } else {
         $this->result = false;
      }
   }
}
?>
