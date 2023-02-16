<?php
include "connect.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Student Details</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      h2 {
      font-weight: 400;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 60%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #095484; 
      }
      .banner {
      position: relative;
      height: 210px;
      background-image: url("/uploads/media/default/0001/01/3f0d2969f2cffeb123ab1a6fa7408bf87bd34bd3.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: #a9a9a9; 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder, a {
      color: #095484;
      }
      .item input:hover, .item select:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #095484;
      color: #095484;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=checkbox]  {
      display: none;
      }
      label.check {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      span.required {
      margin-left: 0;
      color: red;
      }
      label.check:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 16px;
      height: 16px;
      border-radius: 2px;
      border: 1px solid #095484;
      }
      input[type=checkbox]:checked + .check:before {
      background: #095484;
      }
      label.check:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 4px;
      width: 8px;
      height: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=checkbox]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #0666a3;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="studentdata.php" method = "POST">
        <div class="banner">
          <h1>Student Details</h1>
        </div>
        <h2>Student Details</h2>
        <div class="item">
          <p>Student Name</p>
          <div class="name-item">
            <input type="text" name="student_name" placeholder="First"/>
          </div>
        </div>
        <div class="item">
          <p>Email ID</p>
          <input type="text" name="email"/>
        </div>
        <div class="item">
          <p>Mobile no</p>
          <input type="text" name="stu_phone"/>
        </div>
        <div class="item">
          <label for="course_app"><b>select course:</b></label>
          <select name="course_id" id="course_id">
          <?php 
$sql="SELECT course_id, course_name FROM institute_category";
//$result = $mysqli->query($sqlnew);
//<!--echo "<option value='".$courseid."'>".$coursename."</option>";  -->
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$courseid=$row["course_id"];
$coursename=$row["course_name"]; 
?>
<option value="<?php echo $courseid; ?>"><?php echo $coursename; ?> </option>
<?php
  }
} 
?>
 </select>
        </div>
        <div class="item">
          <p>Address</p>
          <input type="text" name="stu_address" placeholder="Street address" />
          <div class="city-item">
            <input type="text" name="city" placeholder="city" />
            <select>
              <option value="">State</option>
              <option value="1">Telangana</option>
              <option value="2">Andhra Pradesh</option>
              <option value="3">Tamil Nadu</option>
              <option value="4">Maharastra</option>
              <option value="5">Punjab</option>
            </select>
            <input type="text" name="zipcode" placeholder="Postal / Zip code" />
            <input type="text" name="country" placeholder="India" />
          </div>
        <div><label>Password*</label><input type="password" name="student_pass"></div>
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
          <br><br><br>
          <span class="studentview"><a href="studentview.php">View Student</a></span>
        </div>
      </form>
    </div>
  </body>
</html>