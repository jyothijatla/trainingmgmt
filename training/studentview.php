<?php
include "connect.php";
?>

<?php
$sql = "SELECT stu_id,student_name,email FROM studenttb";
$result = $conn->query($sql);
echo "<table border='2'> <tr><td>stu_id</td><td>student_name</td><td>email</td></tr>";
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()){

echo "<tr><td>" . $row["stu_id"]. "</td><td>" . $row["student_name"]. "</td><td>" . $row["email"]. "</td><td><a href = 'studentedit.php?stu_id=". $row["stu_id"]."'>Edit </a></td>". "<td><a href = 'studentfee.php?stu_id=". $row["stu_id"]."'>Fee Details </a></td></tr>";
}
}

else { 
echo "0 results";
 }
echo "</table>";
echo "<a href=studentpage.php> Go Back</a>";
$conn->close();

?>
<br><br>
<span class="studentform"><a href="studentform.php">View Form</a></span>