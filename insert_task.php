<?php
$title=$_POST["task_title"];
$project_id= $_POST["project_id"];
$due_date= $_POST["due_date"];

include('inc/connection.php');
try {
    $insert_statement = $db->prepare("insert into tasks (project_id, title, due_date) values ( ? , ? , ?)");
    $insert_statement->bindValue(1, $project_id);
    $insert_statement->bindValue(2, $title);
    $insert_statement->bindValue(3, $due_date);
    $insert_statement->execute();
    echo 'Task inserted';
}   catch (Exception $e) {
    echo 'Insert error' . $e->getMessage() . "</br>";
}
?>

<a href="project_list.php"> View Tasks </a>
