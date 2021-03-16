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
?>
