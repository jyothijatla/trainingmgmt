<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
  // User is already logged in, redirect to the dashboard
  header('Location:facultypage.php');
  exit;
}

// Check if the form has been submitted
if (isset($_POST['login'])) {
  // Connect to the database
  $conn = mysqli_connect('localhost', 'root', '', 'training_institutedb');

  // Escape the user input to prevent SQL injection
  $username = $_POST['u_name'];
  $password = $_POST['u_password'];
  
  // Build the query
  $query = "SELECT * FROM facultytb WHERE email = '$username' AND fac_pass = '$password'";

  // Execute the query
  $data = mysqli_query($conn, $query);

  $total = mysqli_num_rows($data);

  if($total == 1)
  {

    header('location:facultypage.php');
  }
  else
  {
    echo "Login Failed";
  }


}

?>