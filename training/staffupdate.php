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
$staffid=0;
$staffname="";
$email_id="";

$staffid=$_POST["staff_id"];
$staffname=$_POST["staff_name"];
$email_id=$_POST["email"];

$sql = "UPDATE `stafftb` SET `staff_name` = '$staffname', `email` = '$email_id' WHERE `stafftb`.`staff_id` = ".$staffid;
$result = $mysqli->query($sql);
echo "<a href=staffview.php> goback</a>";
//UPDATE `school` SET `firstname` = 'ram', `class` = '10 ', `age` = '5' WHERE `school`.`sno` = 3;
?>

