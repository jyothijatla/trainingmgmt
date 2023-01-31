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
$bname;
$byear;
//$add;
$badmin;
$branchid = $_GET["branch_id"];
echo "branch_id is ".$branchid;
$sql = "SELECT branch_id,branch_name,branch_year,branch_admin FROM branch_master where branch_id=$branchid";
$result = $mysqli->query($sql);

if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
$branchid=$row["branch_id"]; 
$bname=$row["branch_name"];  
$byear=$row["branch_year"];
//$add=$row["address"];
$badmin=$row["branch_admin"];


$sql = "INSERT INTO branch_master (branch_id,branch_name,branch_year,branch_admin)
VALUES ('$branchid', '$bname', '$byear', '$badmin')";
// " </td><td> " . $row["firstname"]. " </td><td>" . $row["class"].$row["age"]."</td><td> <a href = 'editpage.php?sno=". $row["sno"]."'>Edit </a ></td></tr>";
  }
} 

echo "<html><head></head><body><form method=post action=branchupdate.php>  <input name= 'branch_id' type='hidden' value='$branchid'><input name= 'branch_name' type='text' value='$bname'><input name= 'branch_year' type='text' value='$byear'><input name= 'branch_admin' type='text' value='$badmin'><input type='submit' value='Update'> </form>";
//echo $_GET["sno"];
//echo $coursename;

echo "</body></html>";
?>



