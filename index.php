<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Simple PHP CRUD</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style= "background-color: #FCA510;">
          Simple  PHP CRUD
    </nav>

    <div class="container">
        <div class="text-center mb-4">
             <h3> User's List </h3>
        </div>

        <?php
        if(isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
        <a href="new.user.php" class="btn btn-light mb-2">Add New User</a>

        <table class="table table-hover text-center">
        <thead class="table-dark mb-2">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Department</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Position</th>
            <th scope="col">Marital Status</th>
            <th scope="col">Gender</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    require "db.conn.php";

                    $sql = "SELECT * FROM `crud`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                          <td><?php echo $row['id'] ?></td>
                          <td><?php echo $row['department'] ?></td>
                          <td><?php echo $row['first_name'] ." ". $row['last_name']?></td>
                          <td><?php echo $row['email'] ?></td>
                          <td><?php echo $row['contact_number'] ?></td>
                          <td><?php echo $row['position'] ?></td>
                          <td><?php echo $row['marital_status'] ?></td>
                          <td><?php echo $row['gender'] ?></td>
                          <td>
                               <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                               <a href="delete.php?id=<?php echo $row['id']?>"  class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                          </td>
                        </tr>
                        <?php
                    }
                 ?>
        </tbody>
        </table>
    </div>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>