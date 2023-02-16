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

            $staffid = $_POST['staff_id'];
            $staffname = $_POST['staff_name'];
            $email_id = $_POST['email'];
            

            echo $staffid;
            echo $staffname;
            echo $email_id;

// Attempt insert query execution
$sql = "INSERT INTO `stafftb`(`staff_id`, `staff_name`, `email`)
 VALUES ('$staffid','$staffname','$email_id')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>