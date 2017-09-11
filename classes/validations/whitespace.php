<?php
require_once 'validation.php';
require_once 'exceptions/whitespace_exception.php';

class Whitespace extends Validation
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
