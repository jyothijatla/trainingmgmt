<?php
session_start();
include 'connect.php';

if
($_SESSION['usertype_id'] == 3) {
    ?>

    <?php

    $sqlstaff = "SELECT `staff_id` FROM `stafftb` ";

    $resultstafftb = mysqli_query($conn, $sqlstaff);

    $staff = mysqli_num_rows($resultstafftb);

    $sqlcourse = "SELECT `course_id` 
FROM `institute_category`";

    $rescou = mysqli_query($conn, $sqlcourse);

    $course = mysqli_num_rows($rescou);


    $sqlstudent = "SELECT `stu_id`
FROM `studenttb`";

    $resstudent = mysqli_query($conn, $sqlstudent);

    $student = mysqli_num_rows($resstudent);



    if (session_status() == PHP_SESSION_ACTIVE) {
        //echo "session is active <br>";

        if ($_SESSION['usertype_id'] == 3) {

            ?>
<html>

        <head>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
          
        <style>
                .container {
                       width: 50%;
                       margin: 15px auto;
                       position: center center;
                       padding: 90px 0px;
                }
                .staff
                {
                    position:absolute;
                    margin-top:40px;
                    margin-left:500px;
                    box-shadow: 2px 4px;
                    color:lightgrey;
                    width:100px;
                    transition:0.2s;
                    
                }
                .staff:hover
                {
                    box-shadow: 3px 5px;
                    color: grey;
                    width:110px;
                }
                .pad
                {
                    padding: 5px;
                    text-align: center;
                }
                .course
                {
                    
                    position:absolute;
                    margin-top:40px;
                    margin-left:650px;
                    box-shadow: 2px 4px;
                    color:lightgrey;
                    width:100px;
                    transition:0.2s;
                    
                }
                .course:hover
                {
                    box-shadow:3px 5px;
                    width:110px;
                    color: grey;
                }
                .student
                {
                    
                    position:absolute;
                    margin-top:40px;
                    margin-left:800px;
                    box-shadow: 2px 4px;
                    color:lightgrey;
                    width:100px;
                    transition:0.2s;
                    
                }
                .student:hover
                {
                    box-shadow:3px 5px;
                    width:110px;
                    color: grey;
                }
                .bottom
                {
                    
                    margin-left:1200px;
                    
                }
            </style>


        </head>
        
        <body>
             
        <h1 style=text-align:center><b>Faculty Dashboard<b></h1>
           <h2> <?php //this comment is to remove admin email
           //echo "admin user is" . $_SESSION['email'];
             $email_id= $_SESSION['email'];
             $_SESSION['staff_name']="";
             $adminname = "";
             $sqlname = "SELECT staff_name as sname FROM stafftb WHERE email='$email_id'";

             $resultuser = mysqli_query($conn, $sqlname);

             if (mysqli_num_rows($resultuser) > 0) {
                 while ($row = mysqli_fetch_assoc($resultuser)) {
                     $adminname = $row['sname'];
                     $_SESSION['staff_name']=$row['sname'];
                     echo "the admin user is : " . $adminname;

                 }
             } ?> </h2>

        <br><a href="facultypage.php">Connect to FacultyPage</a>

        <div class='staff'>
            <div class ='pad'>Staff <?php echo $staff ?></div>
            </div>

            <div class='course'>
                <div class ='pad'>Course <?php echo $course ?></div>
            </div>

            <div class='student'>
                <div class ='pad'>Students <?php echo $student ?></div>
            </div>

            <div class="container">
            <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js'></script>
  
  <div>
    <canvas id="myChart"></canvas>
  </div>
</div>
            <script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
            labels: ["staff", "courses", "students", "others"],
            datasets: [{
            backgroundColor: [
            "#2ecc71",
            "#3498db",
            "#95a5a6",
            "#9b59b6",
            "#f1c40f",
            "#e74c3c",
            "#34495e"
      ],
      data: [35, 49, 60, 58, 65]
    }]
  }
});
</script>
   
            
            <div>
            <!--<form  action="logout.php" method="post">
-->
                <div class='bottom'>
                  <a href="logout.php" >Logout</a>
                </div>
              <!--</form>-->

             </div>
            
        </body>
        </html>

<?php


        } else {
            header('Location: login.php');
        }
    } 

}

?>