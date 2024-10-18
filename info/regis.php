
<?php
include("header.php");
$errors= array();

$name= $_POST['name'];
$username= $_POST['username'];
$password= $_POST['password'];
$email= $_POST['email'];

if(strlen($name)>10){
    $errors[] = 'name_error= Vardo klaida'; 
}
if(strlen($username)>10){
    $errors[] = 'username_error= Username klaida';
}    
if(strlen($password)<5){
    $errors[] = 'password_error= Slaptažodžio klaida';
}
if(strlen($email)<15){
    $errors[] = 'email_error= El.Pašto klaida';
}
if (!empty($errors)) {
    $error_string = implode('&', $errors);
    header("Location: ../register.php?$error_string");
    exit;
}
require "database.php";
$sql= 'INSERT INTO user(username, name, email, password) VALUES(?, ?, ?, ?)';
$query= $pdo->prepare($sql);
$query->execute([$username, $name, $email, $password]);

header('Location: ../index.php');
