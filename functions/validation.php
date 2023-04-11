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