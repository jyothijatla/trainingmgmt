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
$staffname;
$email_id;


$staffid = $_GET["staff_id"];
echo "staff_id is ".$staffid;
$sql = "SELECT staff_id,staff_name,email FROM stafftb where staff_id=$staffid";
$result = $mysqli->query($sql);

if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
$staffid=$row["staff_id"]; 
$staffname=$row["staff_name"];  
$email_id=$row["email"];



$sql = "INSERT INTO stafftb (staff_id,staff_name,email)
VALUES ('$staffid', '$staffname', '$email_id')";
// " </td><td> " . $row["firstname"]. " </td><td>" . $row["class"].$row["age"]."</td><td> <a href = 'editpage.php?sno=". $row["sno"]."'>Edit </a ></td></tr>";
  }
} 

echo "<html><head></head><body><form method=post action=staffupdate.php>  <input name= 'staff_id' type='hidden' value='$staffid'><input name= 'staff_name' type='text' value='$staffname'><input name= 'email' type='text' value='$email_id'><input type='submit' value='Update'> </form>" ;
//echo $_GET["sno"];
//echo $coursename;

echo "</body></html>";
?>
