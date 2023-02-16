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
$fname;
$lname;
$email;
$mobileno;
//$add;
$adminid = $_GET["admin_id"];
echo "admin_id is ".$adminid;
$sql = "SELECT admin_id,first_name,last_name,mobile_no,email_id FROM admin_master where admin_id=$adminid";
$result = $mysqli->query($sql);

if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
$adminid=$row["admin_id"]; 
$fname=$row["first_name"];  
$lname=$row["last_name"];
//$add=$row["address"];
$email=$row["email_id"];
$mobile_no=$row["mobile_no"];

$sql = "INSERT INTO organization_master (admin_id,first_name,last_name,email_id,mobile_no)
VALUES ('$adminid', '$fname', '$lname', '$email', '$mobile_no')";
// " </td><td> " . $row["firstname"]. " </td><td>" . $row["class"].$row["age"]."</td><td> <a href = 'editpage.php?sno=". $row["sno"]."'>Edit </a ></td></tr>";
  }
} 

echo "<html><head></head><body><form method=post action=adminupdate.php>  <input name= 'admin_id' type='hidden' value='$adminid'><input name= 'first_name' type='text' value='$fname'><input name= 'last_name' type='text' value='$lname'><input name= 'email_id' type='text' value='$email'><input name= 'mobile_no' type='text' value='$mobile_no'><input type='submit' value='Update'> </form>" ;
//echo $_GET["sno"];
//echo $coursename;

echo "</body></html>";
?>




