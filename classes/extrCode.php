<?php

class Extras
{
// @TODO @IDEA @REVIEW las constantes debieran estar en otra clase destinada a hacer validaciones SOLAMENTE


// store profile pic into /pics
public function storePic($pic) {
   // user pic in array['profilePic'] =>
      // ['name'] => string name.extension
      // ['type'] => image/extension
      // ['tmp_name'] => /PATH
      // ['error'] => if OK -> int(0)
      // ['size'] => int(size in bytes)
   // if pic exists -> continue
   if (count($pic)) {
      // extract to picName original pic name from array
      $picName = $pic['name'];
      // extract to picPath tmp_name from array
      $picPath = $pic['tmp_name'];
      // obtain extension
      $picExtension = pathinfo($picName , PATHINFO_EXTENSION);

      // move to /pics
      $result = move_uploaded_file($picPath, 'pics/' . $this->username . '.' . $picExtension);
   }
   return $result;
}

}

 ?>
