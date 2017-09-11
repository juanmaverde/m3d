<?php
require_once 'validation.php';
require_once 'exceptions/min_max_exception.php';


class MinMax extends Validation
{// returns TRUE if string more than 3 AND less than 21
      // else FALSE
   const MIN_LONG = 3;
   const MAX_LONG = 21;

   public function __construct($string)
   {
      if (strlen($string) > MinMax::MIN_LONG && strlen($string) < MinMax::MAX_LONG) {
         $this->result = true;
      } else {
         $this->result = false;
      }
   }
}
?>
