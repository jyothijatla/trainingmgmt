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

            $cat_name = $_POST['cat_name'];
            $course_name = $_POST['course_name'];
            $featured = $_POST['featured'];
            

            echo $cat_name;
            echo $course_name;
            echo $featured;
           
 
// Attempt insert query execution
$sql = "INSERT INTO institute_category(`cat_name`, `course_name`, `featured`) 
VALUES ('$cat_name','$course_name','$featured')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>