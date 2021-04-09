<?php
include_once "session.php";

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
            
            $_SESSION['user_id']=$user['id'];
            $_SESSION['first_name']=$user['first_name'];
            $_SESSION['last_name']=$user['last_name'];
            $_SESSION['admin']=$user['admin'];
            header("Location: index.php"); die();
        }
    }
    


}else{
    header("Location: login.php"); die();
}
?>