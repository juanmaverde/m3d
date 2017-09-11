<?php
require_once 'validation.php';
require_once 'exceptions/min_max_exception.php';

class AlphaNum extends Validation
{// returns TRUE if alphaNum
      // FALSE if ANY NON alphaNum character

   public function __construct($string)
   {
      if (ctype_alnum($string)) {
         $this->result = true;
      } else {
         $this->result = false;
      }
   }
}
?>
