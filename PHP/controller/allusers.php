<?php

include($_SERVER['DOCUMENT_ROOT'] ."/PDO-basics/PHP/model/db.php");

if($pdo){
echo "<h2>All users</h2>";
$stmt = $pdo->query('SELECT * FROM users');



$data = $stmt->fetchAll();
}

 ?>
