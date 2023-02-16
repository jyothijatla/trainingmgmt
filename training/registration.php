<?php
require 'connect.php';
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $mail = $_POST["email"];
  $phn = $_POST["phone"];
  $password = $_POST["pass"];
  $conpass = $_POST["cpass"];
  $duplicate = mysqli_query($conn, "SELECT * FROM register WHERE name = '$name' OR email = '$mail'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Name or Email Has Already Exit'); </script>";
  }
  else{
    if($password == $conpass){
      $query = "INSERT INTO register VALUES('$name','$mail','$phn','$password')";
      mysqli_query($conn,$query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password doesn't exit'); </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      span.login {
      float: left;
      padding-top: 0;
      padding-right: 15px;
      }
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        
        <h1>Register</h1>
        <p>We teach programming languages like HTML, CSS, Java Script, PHP etc.</p>
      </div>
      <form action="" method = "POST">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Register here</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="u_name" placeholder="Full Name">
          <input type="text" name="email" placeholder="Email">
          <input type="text" name="mobile_no" placeholder="Phone Number">
          <input type="password" name="u_password" placeholder="Password">
          <input type="password" name="cpass" placeholder="Confirm Password">
        <button type="submit" href="login.php">submit</button><br>
        <span class="login"><a href="login.php">Login</a></span>
      </form>
    </div>
  </body>
</html>
