<?php
include_once "session.php";
include_once "db.php";
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$nick=$_POST['nick'];

if(!empty($first_name) && !empty($last_name)){
    $query="INSERT INTO actors(first_name,last_name,nick) VALUES(?,?,?)";
    $stmt=$pdo->prepare($query);
    $stmt->execute([$first_name,$last_name,$nick]);
    header("Location: actors.php");die();
}
header("Location: actor_add.php");die();
?>