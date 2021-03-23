<?php
session_start();
ini_set('display_errors', 1);
ini_set('error_log', 'php_errors.log');

$email = $_POST['email'];
$password = $_POST['password'];
include('inc/connection.php');

$query = $db->prepare("select * from users where email = ?");
$query->bindValue(1, $email);

$query->execute();
$userdetails=$query->fetchAll(PDO::FETCH_ASSOC);

$rows=$query->rowCount();

if ($rows==1 && password_verify($password,$userdetails[0]["password"])) {
    $_SESSION['email'] = $email;
    $_SESSION['isAdmin'] = $userdetails[0]["admin"];
    header("Location: index.php");  //Redirects us to index.php page
}
else {
    echo 'Wrong username or password';
}


