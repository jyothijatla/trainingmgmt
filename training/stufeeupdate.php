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
$stuname="";
$fee="";
$feebal="";
$feestatus="";

$stuid=$_POST["stu_id"];
$stuname=$_POST["student_name"];
$fee = $_POST['fee_details'];
$feebal = $_POST['fee_bal'];
$feestatus = $_POST['fee_status'];

$sql = "UPDATE `studenttb` SET `fee_details` = '$fee', `fee_bal` = '$feebal', `fee_status` = '$feestatus' WHERE `studenttb`.`stu_id` = ".$stuid;
$result = $mysqli->query($sql);
echo "<a href=studentview.php> goback</a>";
//UPDATE `school` SET `firstname` = 'ram', `class` = '10 ', `age` = '5' WHERE `school`.`sno` = 3;
?>