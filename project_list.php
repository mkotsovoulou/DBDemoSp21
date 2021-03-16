<h1> Project List</h1>
<?php

   include('inc/dbfunctions.php');
   $projects_array = get_projects();
   foreach ($projects_array as $project) {
       echo $project["project_id"]. ": " . $project["title"] . " " . $project["category"] . "</br>";
   }

?>

<a href="add_project.php"> Add a new project</a>
