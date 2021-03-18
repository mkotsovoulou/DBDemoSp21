<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style>

        .form-frame {
            padding: 2rem;
            margin: 1rem;
            border: solid #8080a9;
            border-width: .1rem;
            box-shadow: 2px 2px #9ca5c4;
        }
    </style>
</head>
<body>
<div class="container">
<h1> Add a new Task to a Project </h1>
<div class="form-frame">
<form  method="POST" action="insert_task.php">
    <div class="form-group m-2">
        <label for="task_title">Task Name</label>
        <input class="form-control" type="text" id="task_title" name="task_title" required aria-describedby="taskHelp" placeholder="Enter task name">
        <small id="taskHelp" class="form-text text-muted">Give meaningful names to tasks...</small>
    </div>
    <div class="form-group m-2">
        <label for="due_date">Task Due Date</label>
        <input class="form-control" type="date" id="due_date" name="due_date" required/>
    </div>
    <div class="form-group m-2">
        <label for="project_id">Select Project</label>
        <select class="form-control" id="project_id" name="project_id">
<?php
?>
     </select>
    </div>
    <button type="submit" class="btn btn-primary m-2">Submit</button>
</form>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>
</html>