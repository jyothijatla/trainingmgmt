<?php
include "connect.php";
?>

<?php
$sql = "SELECT staff_id,staff_name,email FROM stafftb";
$result = $conn->query($sql);
echo "<table border='2'> <tr><td>staff_id</td><td>staff_name</td><td>email</td></tr>";
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()){

echo "<tr><td>" . $row["staff_id"]. "</td><td>" . $row["staff_name"]. "</td><td>" . $row["email"]. "</td><td><a href = 'staffedit.php?staff_id=". $row["staff_id"]."'>Edit </a></td></tr>";
}
}
else { 
echo "0 results";
 }
echo "</table>";
echo "<a href=staffpage.php> Go Back</a>";
$conn->close();

?>
<br><br>
<span class="staffform"><a href="staffform.php">View Form</a></span>