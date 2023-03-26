<!DOCTYPE html> 
<html lang="en">
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$first_nameErr = $last_nameErr = $emailErr = $contact_numberErr = "";
$first_name = $last_name = $email = $contact_number = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_name"])) {
    $first_nameErr = "First Name is required";
  } else {
    $first_name = test_input($_POST["first_name"]);
  }
  
  if (empty($_POST["last_name"])) {
    $last_nameErr = "Last Name is required";
  } else {
    $last_name = test_input($_POST["last_name"]);
  }
    
  if (empty($_POST["contact_number"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["email"])) {
    $contact_numberErr = "Email is required";
  } else {
    $contact_number = test_input($_POST["email"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <title>Simple PHP CRUD</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style= "background-color: #77C3EC;">
          Simple  PHP CRUD
    </nav>

    <div class="container">
        <div class="text-center mb-4">
             <h3> Add New User </h3>
             <p class="text-muted">Kindly complete the form for New User</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="witdth:50vwl=; min-width:300px;">
                 <div class="row mb-2">
                      <div class="col">
                        <label class="form.label">First Name:</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Aphrdoite">
						<span class="error"> <?php echo $first_nameErr;?></span>
                      </div>

                      <div class="col">
                        <label class="form.label">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Goddess">
                        <span class="error"> <?php echo $first_nameErr;?></span>
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
                 </div>

                 <div class="mb-2">
                 <label class="form.label">Contact Number:</label>
                 <input type="text" class="form-control" name="contact_number" placeholder="09123456789">
                 </div>

                 <div>
                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>

             </form>

<?php
echo "<h2>Your Input:</h2>";
echo $first_name;
echo "<br>";
echo $last_name;
echo "<br>";
echo $email;
echo "<br>";
echo $contact_number;
echo "<br>";
?>

</body>
</html>