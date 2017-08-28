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
// if submitted, load object attributes
   public function loadFormData($IP, $username, $email, $password, $dob = null, $gender = null, $location = null) {
      $this->IP = $IP;
      $this->username = $username;
      $this->email = $email;
      $this->password = $password;
      $this->dob = $dob;
      $this->gender = $gender;
      $this->location -> $location;
   }
// check if all signUp data is OK
   public function checkRegisterData() {
      if(($this->username) && ($this->email) && ($this->password)) {
         return true;
      }
   }

}

 ?>
