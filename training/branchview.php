<?php
include "connect.php";
?>

<?php
$sql = "SELECT branch_id,branch_name,branch_year,branch_admin FROM branch_master";
$result = $conn->query($sql);
echo "<table border='2'> <tr><td>branch_id</td><td>branch_name</td><td>branch_year</td><td>branch_admin</td>";
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()){

echo "<tr><td>" . $row["branch_id"]. "</td><td>" . $row["branch_name"]. "</td><td>" . $row["branch_year"]. "</td><td>" .$row["branch_admin"]."</td><td><a href = 'branchedit.php?branch_id=". $row["branch_id"]."'>Edit </a></td></tr>";
}
}
else { 
echo "0 results";
 }
echo "</table>";
$conn->close();

?>