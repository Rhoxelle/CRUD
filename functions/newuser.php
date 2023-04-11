<?php

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $position = $_POST['position'];

   //execute insert to DB
   require "functions.php";

    $query = new DatabaseQueryUser(
    Connection::make($dbcred['database'])
    );

    $query->addToTable($first_name,$last_name,$email,$contact_number,$gender,$department,$position);

    header('location: ../index.php?msg=New user added successfully.');

}
?>