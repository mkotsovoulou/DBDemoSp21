<h1> Task List</h1>
<?php

include('inc/connection.php');
try {
    $query = $db->query("select * from tasks");
    $tasks_array = $query->fetchAll(PDO::FETCH_ASSOC);

    //  var_dump($projects_array);
    foreach ($tasks_array as $task) {
        echo $task["project_id"]. ": " . $task["task_id"] . " " . $task["title"] . " " . $task["due_date"]. "</br>";
    }

} catch (Exception $e) {
    echo 'Select error' . $e->getMessage() . "</br>";
}