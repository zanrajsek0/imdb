<?php
include_once "db.php";

$email=$_POST['email'];
$pass=$_POST['pass'];


//Preverim so podatki polni
if(!empty($email) && !empty($pass) ){
    $query="SELECT * FROM users WHERE email=?";
    $stmt=$pdo->prepare($query);
    $stmt->execute([$email]);

    if($stmt->rowCount()==1){
        $user=$stmt->fetch();

        if(password_verify($pass,$user['pass'])){
            header("Location: index.php"); die();
        }
    }
    


}else{
    header("Location: login.php"); die();
}
?>