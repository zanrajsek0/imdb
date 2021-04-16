<?php
include_once "session.php";
include_once "db.php";
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$nick=$_POST['nick'];
$id=(int) $_POST['id'];

if(!empty($first_name) && !empty($last_name)){
    $query="UPDATE actors SET first_name=?,last_name=?,nick=? WHERE id=?";
    $stmt=$pdo->prepare($query);
    $stmt->execute([$first_name,$last_name,$nick,$id]);
    header("Location: actors.php");die();
}
header("Location: actor_edit.php?id=$id");die();
?>