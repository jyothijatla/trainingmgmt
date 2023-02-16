<?php
include "connect.php";
?>

<?php
$sql = "SELECT fac_id,fac_name,email FROM facultytb";
$result = $conn->query($sql);
echo "<table border='2'> <tr><td>fac_id</td><td>fac_name</td><td>email</td></tr>";
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()){

echo "<tr><td>" . $row["fac_id"]. "</td><td>" . $row["fac_name"]. "</td><td>" . $row["email"]. "</td><td><a href = 'facultyedit.php?fac_id=". $row["fac_id"]."'>Edit </a></td></tr>";
}
}
else { 
echo "0 results";
 }
echo "</table>";
echo "<a href=facultypage.php> Go Back</a>";
$conn->close();

?>
<br><br>
<span class="facultyform"><a href="facultyform.php">View Form</a></span>