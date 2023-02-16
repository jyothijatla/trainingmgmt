<?php

session_start();

include 'connect.php';

$username=$_POST['u_name'];
$password=$_POST['u_password'];

$passwordencrypted= md5($password);
//duplicate code



//original code

$sql="SELECT `usertype_id`,`mobile_no`,`email`,`usertype`
FROM `usertype_master`
WHERE (email='$username' AND pass = '$password')";

$resultuser=mysqli_query($conn,$sql);

if(mysqli_num_rows($resultuser) > 0)
{
    while($row=mysqli_fetch_assoc($resultuser))
    {
        $typeuser=$row['usertype_id'];
        $mobile=$row['mobile_no'];
        $email_id=$row['email'];
        $user_type=$row['usertype'];
        $password=$row['pass'];

        $_SESSION['usertype_id']=$typeuser;
        $_SESSION['email']=$email_id;
    }
}
else
{
    header('Location: login.php');
}

if($typeuser == 1)
{
    
    header('Location: superadmindashboard.php');
}
if($typeuser == 2)
{
    
    header('Location: admindashboard.php');
}
if($typeuser == 3)
{
    header('Location: facultydashboard.php');
}
if($typeuser == 4)
{
    header('Location: studentdashboard.php');
}
if($typeuser == 5)
{
    header('Location: staffdashboard.php');
}
?>

