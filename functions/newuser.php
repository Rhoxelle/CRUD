<?php

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $position = $_POST['position'];

    //for validation

    if(!preg_match("/^([a-zA-Z' ]+)$/",$first_name)){
        echo 'Invalid first name.';
        header('location: ../views/newuserview.php?msg=Invalid first name.&first_name='.$first_name.'&last_name='.$last_name.'&email='.$email.'&contact_number='.$contact_number);
        exit();
    }

    if(!preg_match("/^([a-zA-Z' ]+)$/",$last_name)){
        echo 'Invalid last name.';
        header('location: ../views/newuserview.php?msg=Invalid last name.&first_name='.$first_name.'&last_name='.$last_name.'&email='.$email.'&contact_number='.$contact_number);
        exit();
    }
     
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Invalid email name.';
        header('location: ../views/newuserview.php?msg=Invalid email.&first_name='.$first_name.'&last_name='.$last_name.'&email='.$email.'&contact_number='.$contact_number);
        exit();
    }
     
    if(!preg_match("/[0-9]{11,12}$/",$contact_number)){
        echo 'Invalid contact number.';
        header('location: ../views/newuserview.php?msg=Invalid contact number.&first_name='.$first_name.'&last_name='.$last_name.'&email='.$email.'&contact_number='.$contact_number);
    }
    
    $first_name=input_filter($first_name);
    $last_name=input_filter($last_name);
    $email=input_filter($email);
    $contact_number=input_filter($contact_number);
    
    function input_filter($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

   //execute insert to DB
   require "functions.php";

    $query = new DatabaseQueryUser(
    Connection::make($dbcred['database'])
    );

    $query->addToTable($first_name,$last_name,$email,$contact_number,$gender,$department,$position);

    header('location: ../index.php?msg=New user added successfully.');

}
?>