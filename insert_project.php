<?php
$title=$_POST["title"];
$category= $_POST["category"];

include('inc/connection.php');

$insert_statement = $db->prepare("insert into projects (title, category) values ( ? , ? )");

$insert_statement->bindValue(1, $title);
$insert_statement->bindValue(2, $category);

$insert_statement->execute();

echo "Project :" . $title . " created...";
?>

<a href="project_list.php"> View Projects </a>
