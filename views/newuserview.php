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
             <h3> Add New User </h3>
             <p class="text-muted">Kindly complete the form for New User</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="../functions/newuser.php" method="post" auto_complete="off" style="width:50vwl; min-width:300px;">
                 <div class="row mb-2">
                      <div class="col">
                        <label class="form.label">First Name:</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Aphrdoite">
                       </div>

                      <div class="col">
                        <label class="form.label">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Goddess">
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
                    <a href="../index.php" class="btn btn-danger">Cancel</a>
                </div>

             </form>
        </div>
    </div>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
</body>
</html>