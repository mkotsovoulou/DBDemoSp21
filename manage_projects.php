<!DOCTYPE html>
<html lang="en">
 <title>Manage Projects</title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container spacing">
<h1> Project List</h1>

<table class="table table-bordered table-hover">
    <thead>
       <th> ID</th>
       <th> TITLE </th>
       <th> CATEGORY </th>
       <th> ACTION</th>
    </thead>
<tbody>
<?php
include('inc/dbfunctions.php');
$projects_array = get_projects();

foreach ($projects_array as $project) {
    echo '<tr>';
    echo '<td>' . $project["project_id"] . "</td>  <td>" . $project["title"] . "</td>  <td>" . $project["category"] . "</td>";
    echo '<td> <form name="deleteForm" method="post" action="deleteProject.php">';
    echo      '<input name="project_id" id="project_id" type="hidden" value="'  .  $project["project_id"]    .  '"/>';
    echo      '<button type="submit">DELETE</button> </form>';

    echo      '<form name="editForm" method="post" action="editProject.php">';
    echo      '<input name="project_id" id="project_id" type="hidden" value="'  .  $project["project_id"]    .  '"/>';
    echo      '<input name="title" id="title" type="hidden" value="'  .  $project["title"]    .  '"/>';
    echo      '<input name="category" id="category" type="hidden" value="'  .  $project["category"]    .  '"/>';
    echo      '<button type="submit">EDIT</button> </form>';
    echo '</td>';
    echo '</tr>';
}
?>
</tbody>
</table>

<a href="add_project.php"> Add a new project</a>

</div>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>