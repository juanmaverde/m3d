<?php
require_once 'validation.php';

class Whitespace extends Validations
{// returns TRUE if NO whitespaces
      // FALSE if ANY whitespace
   public function __construct($string)
   {
      if ((substr_count($string, ' ')) == 0) {
         $this->result = true;
      } else {
         $this->result = false;
      }
   }
}
?>
