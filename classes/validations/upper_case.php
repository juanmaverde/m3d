<?php
require_once 'validation.php';

class UpperCase
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
