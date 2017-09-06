<?php
require_once 'validation.php';

class MinMax
{// returns TRUE if string more than 3 AND less than 21
      // else FALSE
   const MIN_LONG = 3;
   const MAX_LONG = 21;

   public function __construct($input)
   {
      if (strlen($input) > MinMax::MIN_LONG && strlen($input) < MinMax::MAX_LONG) {
         parent::$result = true;
      } else {
         $this->result = false;
      }
   }
}
?>
