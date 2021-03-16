<?php

function get_projects()
{
    include('inc/connection.php');
    try {
        $query = $db->query("select project_id, title, category from projects");
        $projects_array = $query->fetchAll(PDO::FETCH_ASSOC);
        return $projects_array;
    } catch (Exception $e) {
        echo 'Select error' . $e->getMessage() . "</br>";
        return array();
    }
}

function add_project($title, $category) {
    include('inc/connection.php');
try {
    $insert_statement = $db->prepare("insert into projects (title, category) values ( ? , ? )");
    $insert_statement->bindValue(1, $title);
    $insert_statement->bindValue(2, $category);
    $insert_statement->execute();
    return true;
}   catch (Exception $e) {
    echo 'Insert error' . $e->getMessage() . "</br>";
    return false;
}

}
?>
