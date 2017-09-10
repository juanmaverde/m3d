<?php

class Form
{
   protected $submit = FALSE; // boolean

   public function __construct($request) // input -> $_REQUEST
   {
      if (!empty($request)) {
         $this->submit = TRUE;
      } else {
         $this->submit = FALSE;
      }
   }

   public function checkSubmit()
   {
      return $this->submit;
   }
}
?>
