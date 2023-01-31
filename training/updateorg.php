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
$orgid=0;
$org="";
$year="";
$branches="";
$regis_id="";
$orgid=$_POST["org_id"];
$org=$_POST["org_name"];
$year=$_POST["year_of_establishment"];
$branches=$_POST["no_of_branches"];
$regis_id=$_POST["registration_id"];

$sql = " UPDATE `organization_master` SET `org_name` = '$org', `year_of_establishment` = '$year', `no_of_branches` = '$branches', `registration_id` = '$regis_id' WHERE `organization_master`.`org_id` = ".$orgid;
$result = $mysqli->query($sql);
echo "<a href=orgview.php> goback</a>";
//UPDATE `school` SET `firstname` = 'ram', `class` = '10 ', `age` = '5' WHERE `school`.`sno` = 3;
?>
