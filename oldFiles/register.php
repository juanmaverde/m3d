<?php
require_once 'form.php';
require_once '../interfaces/string_data.php';

class Register extends Form implements StringData
{
//===>>> ATTRIBUTES
   // inherited attributes are
      // $submit
      // $validFormTypes
      // $formType
   private $username;
   private $email;
   private $password;

//===>>> CONSTRUCTOR
   // parent::__construct(bool, in_array)
   public function __construct($submit, $formType, $username, $email, $password)
   // MUST receive username && email && password
   {
      parent::__construct($submit, $formType);
      $this->username = $username;
      $this->email = $email;
      $this->password = $password;
   }
//===>>> METHODS
   // from interface
   public function validateString($input)
   { // should use instances of ABSTRACT class Validation instances as minMax || long || specChar || lowCase, etc, etc
      echo 'ok';
   }
}

$reg = new Register(true, 'register', 'jmv', 'ju', 'j');
echo "<pre>";
var_dump($reg);
$a = $reg->getFormType();
echo "<pre>";
var_dump($a);

?>
