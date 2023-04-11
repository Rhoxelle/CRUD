<?php
require "db.config.php";
require "functions.php";


if(isset($_GET))
{
    $id = $_GET['id'];

    // query db
    $query = new DatabaseQueryUser(
        Connection::make($dbcred['database'])
    );
    
    $result = $query->viewTableUsingId('users', $id);

    // display
    require '../views/editview.php';
}
