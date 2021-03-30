$(document).ready(function() {

    $('#loginForm').submit(function (e) {
        e.preventDefault();

        var email = $('#email').val();
        var password = $('#password').val();

        console.log(email);

        $.ajax({
            type:"POST",
            url:"dologin_ajax.php",
            data: {
                p_email : email,
                p_password : password
            }
        }).done(function (msg) {
            console.log(msg[0]);
            if (msg[0]) {
                $('#result').removeClass('error').addClass('ok');
                $('#result').html('Login Success');
            } else {
                $('#result').removeClass('ok').addClass('error');
                $('#result').html('Invalid username or password');
            }
        });
    });
});