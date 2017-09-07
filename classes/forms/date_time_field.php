<?php
require_once 'form.php';

abstract class DateTimeField extends Form
{
   protected $input;

// __constructor should call parent::__constructor -> instanciates object IF !empty($_REQUEST)
   // download $_REQUEST data to local $var->input
   public function __construct($request)
   {
      parent::__construct($request);
      $this->input = $request;
   }

   public function getKeys()
   {
      return (array_keys($this->input));
   }
   abstract function validate();
}
?>
