<?php


include "../model/db.php";

if($pdo && $_SERVER['REQUEST_METHOD'] == 'POST'){
// vi har connection og post data

$username=$_POST["username"];
$useremail=$_POST["usermail"];
$pass=$_POST["userpassword"];


$query="INSERT INTO users (id,username,email,password)VALUES(NULL,'".$username."','".$useremail."','".$pass."')";
$stmt = $pdo->query($query);


//view code
echo "User ".$username." is now created.";

include "../view/showall.php";
echo '<br><a href="../../frontpage.php">back to front</a>';

}
else {
  echo "database error";
}

    ?>
