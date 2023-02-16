<?php
$mysqli = new
mysqli("localhost","root","","training_institutedb");
// Check connection
if ($mysqli -> connect_errno) 
{  
echo "Failed to connect to MySQL; " .
$mysqli -> connect_error;
exit();
}
else
{
echo "Successfully connected to db";
}

$stuid=0;
$stuname;
$emailid;
$add;
$phone;
$course;
$fee;
$feebal;
$feestatus;


$stuid = $_GET["stu_id"];
echo "stu_id is ".$stuid;
$sql = "SELECT stu_id,student_name,email,stu_address,stu_phone,course_app,fee_details,fee_bal,fee_status FROM studenttb where stu_id=$stuid";
$result = $mysqli->query($sql);

if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
$stuid=$row["stu_id"]; 
$stuname=$row["student_name"];  
$emailid=$row["email"];
$add = $row['stu_address'];
$phone = $row['stu_phone'];
$course = $row['course_app'];
$fee = $row['fee_details'];
$feebal = $row['fee_bal'];
$feestatus = $row['fee_status'];



$sql = "INSERT INTO studenttb (stu_id,student_name,email,stu_address,stu_phone,course_app,fee_details,fee_bal,fee_status)
VALUES ('$stuid', '$stuname', '$emailid', '$add', '$phone', '$course', '$fee','$feebal','$feestatus')";
// " </td><td> " . $row["firstname"]. " </td><td>" . $row["class"].$row["age"]."</td><td> <a href = 'editpage.php?sno=". $row["sno"]."'>Edit </a ></td></tr>";
  }
} 

echo "<html><head></head><body><form method=post action=stufeeupdate.php>  <input name= 'stu_id' type='hidden' value='$stuid'><input name= 'student_name' type='text' value='$stuname'><input name= 'fee_details' type='text' value='$fee'><input name= 'fee_bal' type='text' value='$feebal'><input name= 'fee_status' type='text' value='$feestatus'><input type='submit' value='Update'> </form>" ;
//echo $_GET["sno"];
//echo $coursename;

echo "</body></html>";
?>