<h1> Project List</h1>
<?php
session_start();
if (isset($_SESSION["email"])) {
    echo 'you are:' . $_SESSION["email"] . '<br>';
}

   include('inc/dbfunctions.php');
   $projects_array = get_projects();
   foreach ($projects_array as $project) {
       echo $project["project_id"]. ": " . $project["title"] . " " . $project["category"] . "</br>";
   }

?>

<a href="add_project.php"> Add a new project</a>


<h1> Task List</h1>
<?php

$task_array = get_tasks();
foreach ($task_array as $task) {
    echo $task["project_id"]. ": " . $task["title"] . " " . $task["due_date"] . "</br>";
}

?>

<a href="add_task.php"> Add a new task</a>
