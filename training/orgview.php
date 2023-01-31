<?php
include "connect.php";
?>

<?php
$sql = "SELECT org_id,org_name,year_of_establishment,no_of_branches,registration_id FROM organization_master";
$result = $conn->query($sql);
echo "<table border='2'> <tr><td>org_id</td><td>org_name</td><td>year_of_establishment</td><td>no_of_branches</td><td>registration_id</td>";
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()){

echo "<tr><td>" . $row["org_id"]. "</td><td>" . $row["org_name"]. "</td><td>" . $row["year_of_establishment"]. "</td><td>" .$row["no_of_branches"]."</td><td>" .$row["registration_id"]."</td><td><a href = 'editorg.php?org_id=". $row["org_id"]."'>Edit </a></td></tr>";
}
}
else { 
echo "0 results";
 }
echo "</table>";
$conn->close();

?>
