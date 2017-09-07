<?php
require_once 'validation.php';

class SpecialChar extends Validation
{// returns TRUE if ANY specialChar
      // FALSE if alphaNum
   public function __construct($string)
   {
      if (!ctype_alnum($string)) {
         $this->result = true;
      } else {
         $this->result = false;
      }
   }
}
?>
