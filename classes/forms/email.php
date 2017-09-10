<?php
require_once 'string_field.php';

require_once 'exceptions/email_exception.php';

class Email extends StringField
{
   protected $email;

   public function __construct($email)
   {
      parent::__construct($email);
      $this->email = $email;
   }

//@TODO manejo de las excepciones

   public function validate()
   {
      // validation rules:
         // valid format
         // @TODO pendiente agregar funcionalidad de validacion de dominio aparte de formato de email
      if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
         return true;
      } else {
         throw new EmailException("Formato de email no valido", 10);
         return false;
      }
   }

   public function getEmail()
   {
      return $this->email;
   }
}
?>
