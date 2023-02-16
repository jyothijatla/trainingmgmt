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
$emailid="";

$stuid=$_POST["stu_id"];
$stuname=$_POST["student_name"];
$emailid=$_POST["email"];

$sql = "UPDATE `studenttb` SET `student_name` = '$stuname', `email` = '$emailid' WHERE `studenttb`.`stu_id` = ".$stuid;
$result = $mysqli->query($sql);
echo "<a href=studentview.php> goback</a>";
//UPDATE `school` SET `firstname` = 'ram', `class` = '10 ', `age` = '5' WHERE `school`.`sno` = 3;
?>