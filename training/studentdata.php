<?php
include "connect.php";
?>

<?php
// Get data from the form

$stuid = $_POST['stu_id'];
$stuname = $_POST['student_name'];
$emailid = $_POST['email'];
$add = $_POST['stu_address'];
$phone = $_POST['stu_phone'];
$course = $_POST['course_app'];
$fee = $_POST['fee_details'];
$feebal = $_POST['fee_bal'];
$feestatus = $_POST['fee_status'];



            echo $stuid;
            echo $stuname;
            echo $emailid;
            echo $add;
            echo $phone;
            echo $course;
            echo $fee;
            echo $feebal;
            echo $feestatus;


// Insert data into the database
$sql = "INSERT INTO studenttb (stu_id,student_name,email,stu_address,stu_phone,course_app,fee_details,fee_bal,fee_status)
VALUES ('$stuid','$stuname','$emailid','$add','$phone','$course','$fee','$feebal','$feestatus')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
   }
   else{
   
     echo "Error: " . $sql . "<br>" . $conn->error;
   }
?>

