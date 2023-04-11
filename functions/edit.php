<?php
require "db.config.php";
require "functions.php";

if(isset($_POST))
{
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $gender = $_POST['gender'];
    $marital_status = $_POST['marital_status'];
    $department = $_POST['department'];
    $position = $_POST['position'];

    $query = new DatabaseQueryUser(
        Connection::make($dbcred['database'])
    );

    $query->updateTable($id,$first_name,$last_name,$email,$contact_number,$gender,$marital_status,$department,$position);

    header('location: ../index.php?msg=Update user successfully.');
}