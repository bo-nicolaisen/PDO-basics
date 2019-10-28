<?php
include($_SERVER['DOCUMENT_ROOT'] ."/PDO-basics/PHP/controller/allusers.php");



if($data){

foreach ($data as $row) {

echo $row['username']." " .$row['email']." ".$row['password']." "."<br>";
}

/*
while ($row = $stmt->fetch())
{
echo $row['username']." " .$row['email']." ".$row['password']." "."<br>";
}
*/
}
else {
  echo "database error";
}


 ?>
