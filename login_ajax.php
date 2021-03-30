<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login with AJAX</title>
    <style>
        .error {
            color:red;
        }

        .ok {
            color:green;
        }
    </style>
</head>
<body>

<h1>LOGIN with AJAX</h1>
<?php
session_start();
//var_dump($_SESSION);
if (isset($_SESSION["email"])) {
    echo $_SESSION["email"] . " You are already logged in"; ?>
    <a href="logout.php"> Click here to logout </a>
<?php
} else {
?>
<form id="loginForm" name="loginForm" >
    <input type="email" id="email" name="email" required placeholder="Email"> </br>
    <input type="password" id="password" name="password" placeholder="password" required> </br>
    <button id="loginButton" name="loginButton" type="submit"> LOGIN</button>
</form>
    <div id="result"> </div>
<?php } ?>

<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>

<script src="app.js"></script>

</body>
</html>