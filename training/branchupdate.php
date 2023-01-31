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
$branchid=0;
$bname="";
$byear="";
$badmin="";
$branchid = $_POST["branch_id"];
$bname = $_POST["branch_name"];
$byear = $_POST["branch_year"];
$badmin = $_POST["branch_admin"];

$sql = " UPDATE 'branch_master' SET 'branch_name' = '$bname', 'branch_year' = '$byear', 'branch_admin' = '$badmin' WHERE 'branch_master'.'branch_id' = ".$branchid;
$result = $mysqli->query($sql);
echo "<a href=branchview.php> goback</a>";
//UPDATE `school` SET `firstname` = 'ram', `class` = '10 ', `age` = '5' WHERE `school`.`sno` = 3;
?>

