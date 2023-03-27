<?php
require "db.config.php";

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $gender = $_POST['gender'];
    $marital_status = $_POST['marital_status'];
    $department = $_POST['department'];
    $position = $_POST['position'];

    

    $result = mysqli_query($conn, $sql);
    
    if($result) {
        header('Location: index.php?msg=Updated user information successfully.');
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>


        <?php
          require "db.conn.php";

        $id = $_GET['id'];
        $sql = "SELECT * FROM `crud` WHERE id = $id LIMIT 10";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
