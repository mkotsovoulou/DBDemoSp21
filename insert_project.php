<?php
$title=$_POST["title"];
$category= $_POST["category"];

include('inc/dbfunctions.php');
if (add_project($title, $category))
    echo "Project :" . $title . " created...";
?>

<a href="project_list.php"> View Projects </a>
