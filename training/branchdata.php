<?php
include "connect.php";
?>

<?php
// Get data from the form

$bname = $_POST['branchname'];
$byear = $_POST['branchyear'];
$badmin = $_POST['branchadmin'];
$orgid = $_POST['org_id'];
$add = $_POST['address'];
$con = $_POST['contact'];
$email = $_POST['EmailID'];

            echo $bname;
            echo $byear;
            echo $badmin;
            echo $orgid;
            echo $add;
            echo $con;
            echo $email;
// Insert data into the database
$sql = "INSERT INTO branch_master(branch_name,branch_year,branch_admin,org_id,address,contact,email) 
VALUES ('$bname','$byear','$badmin','$orgid','$add','$con','$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
   }
   else{
   
     echo "Error: " . $sql . "<br>" . $conn->error;
   }
?>
