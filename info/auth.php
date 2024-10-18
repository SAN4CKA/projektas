<?php
$username=$_POST['username'];
$password=$_POST['password'];



if(strlen($password)<5){
    header('Location: ../login.php');
    exit;
}
if(strlen($username)>10){
    header('Location: ../login.php');
    exit;
}

require "database.php";

$sql = 'SELECT id,username FROM user WHERE username = :username AND password = :password';
$statement = $pdo->prepare($sql);
$statement->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
$statement->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
$statement->execute();
$user = $statement->fetch(PDO::FETCH_ASSOC);

if($statement->rowCount()==0){
    header('Location: ../login.php?error=Neteisingi duomenys');
    exit;
}else{
    setcookie('username', $user['username'], time() +3600*24, "/");
    setcookie('user_id', $user['id'], time() +3600*24, "/");
    header('Location: ../user.php');
    exit;
}
    ?>

