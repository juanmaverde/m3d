<?php

class Form
{
   protected $submit = false; // boolean

   public function __construct($request) // input -> $_REQUEST
   {
      if (!empty($request)) {
         $this->submit = true;
      } else {
         $this->submit = false;
      }
   }

   public function checkSubmit()
   {
      return $this->submit;
   }
}
?>
