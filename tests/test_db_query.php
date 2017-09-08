<?php
// @LEARNING_POINT importante el ';' al final de los queryString's
try{
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=m3d',
                    'root',
                    'nstlqe',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    //die(json_encode(array('outcome' => true)));
}
catch(PDOException $ex){
   echo "ERROR";
    $ex->getMessage();
    //die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
}

try{
   $query = $pdo->query("SELECT * FROM users;");
   echo $query->queryString;
   var_dump($query);
   $res = $query->fetchAll(PDO::FETCH_ASSOC);
   var_dump($res);
}
catch(PDOException $ex){
   echo "ERROR";
    $ex->getMessage();
}
//
// try {
//    $pdo = new PDO('mysql:host=localhost;dBname=m3d;charset=utf8mb4;port=3306', 'root', 'nstlqe');
//    echo "conectado";
// } catch (Exception $e) {
//    echo $e->getMessage();
//    echo "<br>";
// }
// echo "<br>";
//
//
// $query = $pdo->query("SELECT * FROM users");
// echo "<pre>";
// var_dump($query);
// $res = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($res);


// // $query = $db->prepare("SELECT * FROM users");
// // $query->execute();
//
// try {
//    $res = $query->fetchAll(PDO::FETCH_ASSOC);
// } catch (Exception $e) {
//    $e->getMessage();
//    echo "ERROR";
// }


 ?>
