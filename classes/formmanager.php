<?php

class FormManager
{
// general data
   public $submit;
   public $IP;
// signUp data
   public $username;
   public $email;
   public $password;
// upgrade data
   public $dob;
   public $gender;
   public $location;

// if submit buttond pressed construct new FormManager
   public function __construct($submit) {
      if($submit) {
         $this->submit = true;
      } else {
      $this->submit = false;
      }
   }
// check if submitted
   public function getFormSubmitted() {
      if ($this->submit) {
         return true;
      } else return false;
   }

// check if all signUp data is OK
   public function checkRegisterData() {
      if(($this->username) && ($this->email) && ($this->password)) {
         return true;
      }
   }

}

 ?>
