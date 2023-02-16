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
$facid=0;
$facname="";
$email_id="";

$facid=$_POST["fac_id"];
$facname=$_POST["fac_name"];
$email_id=$_POST["email"];

$sql = " UPDATE `facultytb` SET `fac_name` = '$facname', `email` = '$email_id' WHERE `facultytb`.`fac_id` = ".$facid;
$result = $mysqli->query($sql);
echo "<a href=facultyview.php> goback</a>";
//UPDATE `school` SET `firstname` = 'ram', `class` = '10 ', `age` = '5' WHERE `school`.`sno` = 3;
?>
