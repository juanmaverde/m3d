<?php

abstract class Validation
{
   private $input;

   public function __construct($input)
   {
      $this->input = $input;
   }

   public function setString($input)
   {
      $this->input = $input;
   }
}

?>
