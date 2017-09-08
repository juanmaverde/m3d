<?php

try {
   $pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=m3d', 'root', 'nstlqe');
} catch (Exception $e) {
   echo $e->getMessage();
}

$query = $pdo->query("SELECT * FROM users WHERE (username = 'juanmaverde');");

$res = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($res);

?>
