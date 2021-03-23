<h1> info 2</h1>
<?php
$email = $_POST['email'];
$password = $_POST['password'];
include('inc/connection.php');

$hashed_password= password_hash($password, PASSWORD_DEFAULT);
try {
    $query = $db->prepare("insert into users(email, password) values ( ? , ?) ");
    $query->bindValue(1, $email);
    $query->bindValue(2, $hashed_password);
    $query->execute();
    echo "You are now registered";
} catch (Exception $e) {
    echo 'db error ' . $e->getMessage();
}
