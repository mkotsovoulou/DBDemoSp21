<?php
$id= $_POST["project_id"];
$title= $_POST["title"];
$cat= $_POST["category"];

include('inc/connection.php');
try {
    $query2 = $db->prepare("update projects set title = ?, category=?  where project_id = ?");
    $query2->bindValue(1, $title);
    $query2->bindValue(2, $cat);
    $query2->bindValue(3, $id);
    $query2->execute();
} catch (Exception $e) {
    echo 'update  error' . $e->getMessage() . "</br>";
}

header("Location: manage_projects.php");
?>