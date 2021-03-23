<?php
session_start();
//var_dump($_SESSION);
if (isset($_SESSION["email"]) )
echo 'Welcome ' . $_SESSION["email"];

if ( isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]==1 ) { ?>
<a href="admin.php"> Click here to administer users</a>
<?php } ?>

<h1>  Home page </h1>


 <a href="login.php"> Login </a>
