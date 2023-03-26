<?php
require "db.conn.php";

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $position = $_POST['position'];

    $sql = "INSERT INTO `crud`(`id`,`first_name`, `last_name`, `email`, `contact_number`, `gender`,`department`,`position`) VALUES (NULL,'$first_name','$last_name','$email','$contact_number','$gender', '$department', '$position')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: index.php?msg=New user created succesfully.");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<?php
    $first_nameErr = $last_nameErr = $emailErr = $contact_numberErr = "";
    $first_name = $last_name = $email = $contact_number = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST['submit'])) {

  if (empty($_POST["first_name"])) {
    $first_nameErr = "First Name is required!";
  } 
  else {
    $first_name = input_data($_POST["first_name"]);
    if(!prega_match("/^[a-zA-Z ]*$/",$first_name)){
        $first_nameErr = "Only alphabets is allowed.";
    }
  }
  
  if (empty($_POST["last_name"])) {
    $last_nameErr = "Last Name is required!";
  } 
  else {
    $$last_name = input_data($_POST["last_name"]);
    if(!prega_match("/^[a-zA-Z ]*$/",$first_name)){
      $first_nameErr = "Only alphabets is allowed.";
  }
}
  if (empty($_POST["email"])) {
    $emailErr = "Valid Email is required!";
  } 
  else {
    $email = input_data($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format.";
  }
}

  if (empty($_POST["contact_number"])) {
    $contact_numberErr = "Valid Contact Number is required!";
  } 
  else {
    $contact_number = input_data($_POST["contact_number"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style= "background-color: #77C3EC;">
          Simple  PHP CRUD
    </nav>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> </form>

    <div class="container">
        <div class="text-center mb-4">
             <h3> Add New User </h3>
             <p class="text-muted">Kindly complete the form for New User</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" auto_complete="off" style="witdth:50vwl=; min-width:300px;">
                 <div class="row mb-2">
                      <div class="col">
                        <label class="form.label">First Name:</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Aphrdoite">
                        <span class="error"><?php echo $first_nameErr;?></span>
                       </div>

                      <div class="col">
                        <label class="form.label">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Goddess">
                        <span class="error"><?php echo $last_nameErr;?></span>
                      </div>
                 </div>

                 <div class="formx-group mb-2">
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

                 <div class="mb-2">
                 <label class="form.label">Position:</label>
                 <input type="text" class="form-control" name="position" placeholder="Position">
                 </div>

                <div class="form-group mb-2">
                           <label>Gender:</label> &nbsp;
                           <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                           <label for="Male">Male</label> &nbsp;
                           <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                           <label for="Female">Female</label> &nbsp;
                </div>

                 <div class="mb-2">
                 <label class="form.label">Email:</label>
                 <input type="text" class="form-control" name="email" placeholder="aprhodite@gmail.com">
                 <span class="error"><?php echo $emailErr;?></span>
                 </div>

                 <div class="mb-2">
                 <label class="form.label">Contact Number:</label>
                 <input type="text" class="form-control" name="contact_number" placeholder="09123456789">
                 <span class="error"><?php echo $contact_numberErr;?></span>
                 </div>

                 <div>
                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>

             </form>
        </div>
    </div>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<!-- This is for jquery post function -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>

</body>
</html>
</body>
</html>