<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>LOGIN</h1>
<?php
session_start();
//var_dump($_SESSION);
if (isset($_SESSION["email"])) {
    echo $_SESSION["email"] . " You are already logged in"; ?>
    <a href="logout.php"> Click here to logout </a>
<?php
} else {
?>
<form method="POST" action="dologin.php">
    <input type="email" id="email" name="email" required placeholder="Email"> </br>
    <input type="password" id="password" name="password" placeholder="password" required> </br>
    <input type="submit" value="submit">
</form>
<?php } ?>
</body>
</html>