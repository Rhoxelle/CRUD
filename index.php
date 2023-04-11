<?php
require "functions/functions.php";

$query = new DatabaseQueryUser(
    Connection::make($dbcred['database'])
);

$result = $query->viewTable('users');

//var_dump($result);
    
require 'views/indexview.php';
