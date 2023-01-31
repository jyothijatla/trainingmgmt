<?php
include "connect.php";
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $mobile_no = $_POST['mobileno'];
            $branchid = $_POST['branch_id'];
            $add = $_POST['address'];
            $email = $_POST['emailid'];
            $pwd = $_POST['password'];
            

            echo $fname;
            echo $lname;
            echo $mobile_no;
            echo $branchid;
            echo $add;
            echo $email;
            echo $pwd;
            
 
// Attempt insert query execution
$sql = "INSERT INTO admin_master(first_name, last_name, mobile_no, branch_id, address, email_id, pwd)
 VALUES ('$fname','$lname','$mobile_no','$branchid','$add','$email','$pwd')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
