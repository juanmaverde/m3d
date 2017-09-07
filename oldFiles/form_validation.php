<?php

class FormValidation
{
   private $submit = false;
   private $valid = false;
   private $formArray = [];

// if form submitted -> creates new instance
   public function __construct ($formRequest)
   {
      if ($formRequest['submit']) {
         $this->submit = true;
         foreach ($formRequest as $key => $value) {
            array_push($this->formArray, $value);
         }
      } else {
         $this->submit = false;
      }
   }
// if submitted && all fields filled -> returns TRUE
   public function validateForm()
   {
      $array = $this->formArray;
      if(in_array("", $array, true))
      {
         $this->valid = false;
      } else {
         $this->valid = true;
      }
      return $this->valid;
   }
}
?>
