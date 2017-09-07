<?php
require_once 'validation.php';
require_once 'min_max.php';

class ValidateUsername extends Validation
{
   private $minMax;

   private $result;

   public function __construct($input) // from $_REQUEST['username']
   {
      $val = new MinMax($input);
   }

   public function getResult()
   {
      return $this->result;
   }

}

$val = new ValidateUsername('juanmaverde');
$a = $val->getResult();
echo "<pre>";
var_dump($a);

?>
