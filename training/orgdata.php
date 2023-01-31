<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "training_institutedb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get data from the form

$org = $_POST['orgname'];
$year = $_POST['yearofestablishment'];
$add = $_POST['address'];
$branches = $_POST['noofbranches'];
$regis_id = $_POST['registration_id'];

// Insert data into the database
$sql = "INSERT INTO organization_master(org_name,year_of_establishment,address,no_of_branches,registration_id) 
VALUES ('$org','$year','$add','$branches','$regis_id')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);

?>

