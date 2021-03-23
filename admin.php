<?php
session_start();
if ( $_SESSION["isAdmin"]==0 ) {
    header("Location: index.php");  //Redirects us to index.php page
}
else {
?>


<h1> DELETE USERS</h1>



<?php

}
?>