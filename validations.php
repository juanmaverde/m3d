<?php
// takes a string typed by user
// returns an array with 3 positions [0] => stored username, [1] => BOOL error, [2] => error description
function cleanString($string) {
   // error log array declaration
   $result = [];
   // store initial username in a variable
   $initialString = $string;
   // clean all spaces
   $result = str_replace(' ', '', $string);
   // removes special chars
   $result = preg_replace('/[^A-Za-z0-9\+]/', '', $string);

   // compares initially typed string <=> cleaned version
   if ($initialString == $cleanedString) {
   //if = -> return initial and NO errors logged
       $result['username'] = $initialString;
       $result['errors'] = false;
       $result['description'] = 'sin errores';
    } else {
       // if != -> return cleaned version and log an error
       $result['username'] = $cleanedString;
      $result['errors'] = true;
      $result['description'] = 'contenía caracteres no válidos que han sido reemplazados';
    }
       // returns an array with 3 positions
          //[0] => stored username
          //[1] => BOOL error
          //[2] => error description
   return $result;
}

// takes a CLEANED string and validates it attending its length declared as attributes (minVal and maxVal)
// returns BOOL (true = valid || false = invalid)
function validateUsername($username, $minVal, $maxVal) {
   $result = false;
   $username = str_replace(' ', '', $username);
   $username = preg_replace('/[^A-Za-z0-9\+]/', '', $username);
   if (isset($username) && strlen($username) >= 3 && strlen($username) <= 20 && ctype_alnum($username)) {
      $result = true;
   } else {
      $result = false;
   }
   return $result;
}

// takes an email typed by user
// returns BOOL (true = valid || false = invalid)
function validateEmail($email) {
   $result = false;
   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $result = true;
   } else {
      $result = false;
   }
   return $result;
}

// takes the password typed by user
// returns BOOL (true = valid || false = invalid)
function validatePassword($password, $minVal) {
   $uppercase = preg_match('@[A-Z]@', $password); // at least one CAP
   $lowercase = preg_match('@[a-z]@', $password); // at least one LOW
   $number    = preg_match('@[0-9]@', $password); // at least one NUM

   if(!$uppercase || !$lowercase || !$number || strlen($password) < $minVal) {
     $result = false;
   } else {
   $result = true;
   } return $result;
}

 ?>
