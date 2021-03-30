<?php
session_start();
ini_set('display_errors', 1);
ini_set('error_log', 'php_errors.log');

$email = $_POST['p_email'];
$password = $_POST['p_password'];
include('inc/connection.php');

$query = $db->prepare("select * from users where email = ?");
$query->bindValue(1, $email);

$query->execute();
$userdetails=$query->fetchAll(PDO::FETCH_ASSOC);

$rows=$query->rowCount();



/* HEADER REQUIRED FOR AJAX TO PROCESS THE RESULTS AS JSON */
header("Content-Type: application/json");
$msg = array();

if ($rows==1 && password_verify($password,$userdetails[0]["password"])) {
    $_SESSION['email'] = $email;
    $_SESSION['isAdmin'] = $userdetails[0]["admin"];
    $msg[0] = true;
}
else {
    $msg[0] = false;
}
/* PHP should return a JSON ARRAY to JQUERY AJAX CALL */
echo json_encode($msg);

exit();
