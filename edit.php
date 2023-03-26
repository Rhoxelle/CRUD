<?php
require "db.conn.php";

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

    $sql = "UPDATE `crud` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`contact_number`='$contact_number',`gender`='$gender',`marital_status`='$marital_status',`department`='$department',`position`='$position' WHERE id={$id}";

    $result = mysqli_query($conn, $sql);
    
    if($result) {
        header('Location: index.php?msg=Updated user information successfully.');
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

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
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style= "background-color: #77C3EC;">
          Simple  PHP CRUD
    </nav>

    <div class="container">
        <div class="text-center mb-4">
             <h3> Edit User's Information </h3>
             <p class="text-muted">Click udate after changing any information.</p>
        </div>

        <?php
          require "db.conn.php";

        $id = $_GET['id'];
        $sql = "SELECT * FROM `crud` WHERE id = $id LIMIT 10";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="witdth:50vwl=; min-width:300px;">
                <div hidden>
                    <input type="text" class="form-control" name="id" value="<?php echo $row['id']?>">
                </div>    
                
                 <div class="row mb-2">
                      <div class="col">
                        <label class="form.label">First Name:</label>
                        <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name']?>">
                      </div>

                      <div class="col">
                        <label class="form.label">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name']?>">
                      </div>
                 </div>

                 <div class="form-group mb-2">
                           <label for="department">Department:</label> &nbsp;
                            <select name="department" id="department">
                            <option value="" selected></option> &nbsp;
                            <option value="Business Analyst">Business Analyst</option> &nbsp;
                            <option value="Quality Assurance">Quality Assurance</option> &nbsp;
                            <option value="Dev Support">Dev Support</option> &nbsp;
                            <option value="PHP Dev">PHP Dev</option> &nbsp;
                            <option value="Data Analyst">Data Analyst</option> &nbsp;
                            <option value="Front-end Dev">Front-end Dev</option> &nbsp;
                            <option value="IT Desk">IT Desk</option> &nbsp;
                            <option value="Designer">Designer</option> &nbsp;
                            </select>
                </div>

                 <div class="form-group mb-2">
                           <label for="marital_status">Marital Status:</label> &nbsp;
                            <select name="marital_status" id="status">
                            <option value="Single" selected>Single</option> &nbsp;
                            <option value="Marrieds">Married</option> &nbsp;
                            <option value="Divorced">Divorced</option> &nbsp;
                            <option value="xWidowed">Widowed</option> &nbsp;
                            </select>
                </div>

                <div class="form-group mb-2">
                           <label>Gender:</label> &nbsp;
                           <input type="radio" class="form-check-input" name="gender" id="male" value="Male" <?php echo ($row['gender']=='male')?"checked":""?>>
                           <label for="Male">Male</label> &nbsp;
                           <input type="radio" class="form-check-input" name="gender" id="female" value="Female" <?php echo ($row['gender']=='female')?"checked":""?>>
                           <label for="Female">Female</label> &nbsp;
                </div>

                 <div class="mb-2">
                 <label class="form.label">Email:</label>
                 <input type="text" class="form-control" name="email" value="<?php echo $row['email']?>">
                 </div>

                 <div class="mb-2">
                 <label class="form.label">Contact Number:</label>
                 <input type="number" class="form-control" name="contact_number" value="<?php echo $row['contact_number']?>">
                 </div>

                 <div class="mb-2">
                        <label class="form.label">Position:</label>
                        <input type="text" class="form-control" name="position" value="<?php echo $row['position']?>">
                 </div>

                 <div>
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                    <a href="index.php" class="btn btn-danger">Back</a>
                </div>

             </form>
        </div>
    </div>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>