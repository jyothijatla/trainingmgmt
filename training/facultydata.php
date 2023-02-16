<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "training_institutedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

            $facname = $_POST['fac_name'];
            $email_id = $_POST['email'];
            $pass = $_POST['fac_pass'];

            echo $facname;
            echo $email_id;
            echo $pass;

// Attempt insert query execution
$sql = "INSERT INTO `facultytb`(`fac_name`, `email`, `fac_pass`)
 VALUES ('[$facname]','[$email_id]','[$pass]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>