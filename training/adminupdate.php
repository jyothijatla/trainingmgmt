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
$adminid=0;
$fname="";
$lname="";
$email="";
$mobile_no="";
$adminid=$_POST["admin_id"];
$fname=$_POST["first_name"];
$lname=$_POST["last_name"];
$email=$_POST["email_id"];
$mobile_no=$_POST["mobile_no"];

$sql = " UPDATE `admin_master` SET `first_name` = '$fname', `last_name` = '$lname', `email_id` = '$email', `mobile_no` = '$mobile_no' WHERE `admin_master`.`admin_id` = ".$adminid;
$result = $mysqli->query($sql);
echo "<a href=adminview.php> goback</a>";
//UPDATE `school` SET `firstname` = 'ram', `class` = '10 ', `age` = '5' WHERE `school`.`sno` = 3;
?>
