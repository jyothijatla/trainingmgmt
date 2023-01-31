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
$org;
$year;
//$add;
$branches;
$regis_id;
$orgid = $_GET["org_id"];
echo "org_id is ".$orgid;
$sql = "SELECT org_id,org_name,year_of_establishment,no_of_branches,registration_id FROM organization_master where org_id=$orgid";
$result = $mysqli->query($sql);

if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
$orgid=$row["org_id"]; 
$org=$row["org_name"];  
$year=$row["year_of_establishment"];
//$add=$row["address"];
$branches=$row["no_of_branches"];
$regis_id=$row["registration_id"];

$sql = "INSERT INTO organization_master (org_id,org_name,year_of_establishment,no_of_branches,registration_id)
VALUES ('$orgid', '$org', '$year', '$branches', '$regis_id')";
// " </td><td> " . $row["firstname"]. " </td><td>" . $row["class"].$row["age"]."</td><td> <a href = 'editpage.php?sno=". $row["sno"]."'>Edit </a ></td></tr>";
  }
} 

echo "<html><head></head><body><form method=post action=updateorg.php>  <input name= 'org_id' type='hidden' value='$orgid'><input name= 'org_name' type='text' value='$org'><input name= 'year_of_establishment' type='text' value='$year'><input name= 'no_of_branches' type='text' value='$branches'><input name= 'registration_id' type='text' value='$regis_id'><input type='submit' value='Update'> </form>" ;
//echo $_GET["sno"];
//echo $coursename;

echo "</body></html>";
?>





