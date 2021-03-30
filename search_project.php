<?php
$title = $_GET['p_title'];

include('inc/connection.php');
header("Content-Type: application/json");

$title = '%'.$title.'%';

try {
    $query = $db->prepare("select * from projects where title like ?");
    $query->bindValue(1, $title);
    $query->execute();
    $projects_array = $query->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($projects_array);
} catch (Exception $e) {
    return array();
}

exit();