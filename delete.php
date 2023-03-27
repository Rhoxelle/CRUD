<?php
require "functions.php";

$id = $_REQUEST['deleteUser'];

$query = new DatabaseQueryUser(
    Connection::make($dbcred['database'])
);


$query = new DatabaseQueryUser(
    Connection::make($dbcred['database'])
);

$query->deleteUser('crud','$id');

header('location: ../index.php?msg=User successfully deleted.');

?>