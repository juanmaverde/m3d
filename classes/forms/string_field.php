<?php
require_once 'form.php';

abstract class StringField extends Form
{
   protected $input;

// __constructor should call parent::__constructor -> instanciates object IF !empty($_REQUEST)
   // download $_REQUEST data to local $var
   public function __construct($request)
   {
      parent::__construct($request);
      $this->input = $request;
   }

   abstract function validate();
}
?>
