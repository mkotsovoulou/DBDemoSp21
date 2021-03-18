<h1> info 2</h1>
<?php

$email = $_POST['email'];
$password = $_POST['password'];
include('inc/connection.php');

$query = $db->prepare("select * from users where email = ?");
$query->bindValue(1, $email);
$query->bindValue(2, $password);
$query->execute();
$userdetails=$query->fetchAll(PDO::FETCH_ASSOC);
//password_verify($password,$userdetails[0]["password"])
$rows=$query->rowCount();

if ($rows==1 && password_verify($password,$userdetails[0]["password"])) {
    echo 'Welcome ' . $email;
}
else {
    echo 'Wrong username or password';
}


