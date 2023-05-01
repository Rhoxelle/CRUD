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

    <!-- JS JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Simple PHP CRUD</title>
</head>
<body>

    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style= "background-color: #77C3EC;">
          Simple  PHP CRUD
    </nav>

    <div class="container">

    <?php
        if(isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>

        <div class="text-center mb-4">
             <h3> Add New User </h3>
             <p class="text-muted">Kindly complete the form for New User</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="../functions/newuser.php" method="post" auto_complete="off" style="width:50vwl; min-width:300px;">
                 <div class="row mb-2">
                      <div class="col">
                        <label class="form.label">First Name:</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Aphrodite"
                        <?php
                        if(isset($_GET['first_name'])) {
                        echo 'value='.$_GET['first_name'];
                        }
                        ?>
                        >
                       </div>

                      <div class="col">
                        <label class="form.label">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Goddess"
                        <?php
                        if(isset($_GET['last_name'])) {
                        echo 'value='.$_GET['last_name'];
                        }
                        ?>
                        >
                      </div>
                 </div>

                 <div class="formx-group mb-2">
                           <label for="department">Department:</label> &nbsp;
                            <select name="department" id="department">
                            <option value="Business Analyst">Business Analyst</option> &nbsp;
                            <option value="Quality Assurance">Quality Assurance</option> &nbsp;
                            <option value="Dev Support"  selected>Dev Support</option> &nbsp;
                            <option value="PHP Dev">PHP Dev</option> &nbsp;
                            <option value="Data Analyst">Data Analyst</option> &nbsp;
                            <option value="Front-end Dev">Front-end Dev</option> &nbsp;
                            <option value="IT Desk">IT Desk</option> &nbsp;
                            <option value="Designer">Designer</option> &nbsp;
                            </select>
                </div>

                <div class="formx-group mb-2">
                           <label for="position">Positions:</label> &nbsp;
                            <select name="position" id="position">
                            <option value="Junior" selected>Junior</option> &nbsp;
                            <option value="Senior">Senior</option> &nbsp;
                            <option value="Team Leader">Team Leader</option> &nbsp;
                            </select>
                 </div>

                <div class="form-group mb-2">
                           <label>Gender:</label> &nbsp;
                           <input type="radio" class="form-check-input" name="gender" id="male" value="Male" checked>
                           <label for="Male">Male</label> &nbsp;
                           <input type="radio" class="form-check-input" name="gender" id="female" value="Female">
                           <label for="Female">Female</label> &nbsp;
                </div>

                 <div class="mb-2">
                 <label class="form.label">Email:</label>
                 <input type="text" class="form-control" name="email" id="email" placeholder="aprhodite@gmail.com"
                    <?php
                      if(isset($_GET['email'])) {
                      echo 'value='.$_GET['email'];
                     }
                    ?>
                    >
                 </div>

                 <div class="mb-2">
                 <label class="form.label">Contact Number:</label>
                 <input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="09123456789"
                    <?php
                      if(isset($_GET['contact_number'])) {
                      echo 'value='.$_GET['contact_number'];
                     }
                    ?>
                    >
                 </div>

                 <div>
                    <button type="submit" class="btn btn-success" name="submit" onclick="return function_validate();">Submit</button>
                    <a href="../index.php" class="btn btn-danger">Cancel</a>
                </div>

             </form>
        </div>
    </div>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="../resources/validation.js"> </script>

</body>
</html>
</body>
</html>