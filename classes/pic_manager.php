<?php

// @TODO cambios necesarios para poder almacenar profilePic con formato username.extension

// accepts a IMAGE file and:
   // instance the object
   // store pic in desired PATH
      // returns BOOL
class PicManager
{
   private $pic;
   private $path = '../pics/';

   public function __construct($imageFile)
   {
      $this->pic = $imageFile;
   }
   public function storeImage()
   {  // extract to picName original pic name from array
      $picName = $this->pic['name'];
      // extract to picPath tmp_name from array
      $picPath = $this->pic['tmp_name'];
      // obtain extension
      $picExtension = pathinfo($picName, PATHINFO_EXTENSION);
      //move to /pics
      if(move_uploaded_file($picPath, $path . md5(time()) . '.' . $picExtension))
      {
         return true;
      } else {
         return false;
      }
   }
}
