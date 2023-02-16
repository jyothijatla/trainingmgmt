<?php
include "connect.php";
?>

<?php
$sql = "SELECT admin_id,first_name,last_name,email_id,mobile_no FROM admin_master";
$result = $conn->query($sql);
echo "<table border='2'> <tr><td>admin_id</td><td>first_name</td><td>last_name</td><td>email_id</td><td>mobile_no</td></tr>";
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()){

echo "<tr><td>" . $row["admin_id"]. "</td><td>" . $row["first_name"]. "</td><td>" . $row["last_name"]. "</td><td>" .$row["email_id"]."</td><td>" .$row["mobile_no"]."</td><td><a href = 'adminedit.php?admin_id=". $row["admin_id"]."'>Edit </a></td></tr>";
}
}
else { 
echo "0 results";
 }
echo "</table>";
echo "<a href=adminpage.php> Go Back</a>";
$conn->close();


?>
<br><br>
<span class="adminform"><a href="adminform.php">View Form</a></span>