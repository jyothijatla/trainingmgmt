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
$facname;
$email_id;


$facid = $_GET["fac_id"];
echo "fac_id is ".$facid;
$sql = "SELECT fac_id,fac_name,email FROM facultytb where fac_id=$facid";
$result = $mysqli->query($sql);

if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
$facid=$row["fac_id"]; 
$facname=$row["fac_name"];  
$email_id=$row["email"];



$sql = "INSERT INTO facultytb (fac_id,fac_name,email)
VALUES ('$facid', '$facname', '$email_id')";
// " </td><td> " . $row["firstname"]. " </td><td>" . $row["class"].$row["age"]."</td><td> <a href = 'editpage.php?sno=". $row["sno"]."'>Edit </a ></td></tr>";
  }
} 

echo "<html><head></head><body><form method=post action=facultyupdate.php>  <input name= 'fac_id' type='hidden' value='$facid'><input name= 'fac_name' type='text' value='$facname'><input name= 'email' type='text' value='$email_id'><input type='submit' value='Update'> </form>" ;
//echo $_GET["sno"];
//echo $coursename;

echo "</body></html>";
?>
