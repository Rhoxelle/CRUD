<?php
require "functions.php";

$id = $_GET['id'];

$query = new DatabaseQueryUser(
    Connection::make($dbcred['database'])
);

$query->deleteUser('users',$id);

header('location: ../index.php?msg=User successfully deleted.');

?>