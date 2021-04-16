<?php
    include_once "session.php";
    include_once "db.php";
    $id=(int) $_POST['id'];
    $title=$_POST['title'];
    $short=$_POST['short'];
    if(!empty($title) && !empty($id)){
        $query="UPDATE genres SET title=?,short=? WHERE id=?";
        $stmt=$pdo->prepare($query);
        $stmt->execute([$title,$short,$id]);
        header("Location: genres.php");die();
    }

    header("Location: genre_edit.php?id=$id");die();
    
?>