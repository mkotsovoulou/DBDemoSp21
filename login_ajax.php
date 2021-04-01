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

<script>
    $(document).ready(function() {

        $('#loginForm').submit(function (e) {
            e.preventDefault();

            var email = $('#email').val();
            var password = $('#password').val();

            $.ajax({
                type:"POST",
                url:"dologin_ajax.php",
                data: {
                    p_email : email,
                    p_password : password
                }
            }).done(function (msg) {
                console.log(msg[0]);
                if (msg[0]) { //IF  TRUE  login was  ok!!!
                    $('#result').removeClass('error').addClass('ok');
                    $('#result').html('Login Success');
                } else {
                    $('#result').removeClass('ok').addClass('error');
                    $('#result').html('Invalid username or password');
                }
            });
        });
    });
</script>

</body>
</html>