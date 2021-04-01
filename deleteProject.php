<?php
$id=$_POST['project_id'];

include('inc/connection.php');
try {
    $query1 = $db->prepare("delete from tasks where project_id = ?");
    $query1->bindValue(1, $id);
    $query1->execute();

    $query2 = $db->prepare("delete from projects where project_id = ?");
    $query2->bindValue(1, $id);
    $query2->execute();
} catch (Exception $e) {
    echo 'Delete  error' . $e->getMessage() . "</br>";
}

header("Location: manage_projects.php");
?>
