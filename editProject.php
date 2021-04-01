<?php
$id= $_POST["project_id"];
$title= $_POST["title"];
$cat= $_POST["category"];
?>

<form method="post" action="doUpdate.php">
    <input type="hidden" name="project_id" id="project_id" value="<?php echo $id;?>"/>
    <input type="text" name="title" id="title" value="<?php echo $title;?>"/>
    <input type="text" name="category" id="category" value="<?php echo $cat;?>"/>
    <button type="submit"> SAVE CHANGES</button>
</form>

<a href="manage_projects.php"> Manage more projects </a>