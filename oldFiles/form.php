<?php

abstract class Form
{
//===>>> ATTRIBUTES
   protected $submit = false; // default !submitted = FALSE ---> already submitted = TRUE
   protected $validFormTypes = ['register', 'login']; // valid formTypes included in $formType[]
   protected $formType;

//===>>> CONSTRUCTOR
   // @TODO JUAN -> como hago para reflejar que el constructor es el metodo en si mismo en el modelo UML?
   // only instances Form IF:
      // 1) $submit == TRUE
      // 2) $formType included in $validFormTypes array
         // $submit will be $_REQUEST['submit']
         // $formType will be attributed when instanced new FormType
   public function __construct($submit, $formType)
   // MUST receive boolean TRUE when submitted @TODO hacer que formulario HTML envie booleano
   {
      if ($submit && (in_array($formType, $this->validFormTypes))) {
         $this->submit = $submit;
         $this->formType = $formType;
         return true;
      } else {
         return false;
      }
   }
//===>>> METHODS
   // returns formType
   public function getFormType()
   {
      return $this->formType;
   }
}
?>
