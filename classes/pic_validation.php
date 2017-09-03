<?php
// accepts a file and:
   // instance the object
   // search in $_FILE['type'] extension
      // returns BOOL
class PicValidation
{
   private $pic;

   public function __construct($file)
   {
      $this->pic = $file;
   }
   public function isImage()
   {
      $fileType = $this->pic['type'];
      if (strpos($fileType, 'jpeg') || strpos($fileType, 'png') || strpos($fileType, 'gif'))
      {
         return true;
      } else {
         return false;
      }
   }
}
