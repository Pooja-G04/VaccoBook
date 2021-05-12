<?php
include "Classes/Conn.php";

function test_input($data) {
  
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
  
  $name = test_input($_POST["adminname"]);
  $pass = test_input($_POST["Password"]);
}


$conn;
$database=DBConfig::DATABASE;
$connection=new Conn();
$conn=$connection->connectDB($database);


if(count($_POST)>0) {
	
	$result = mysqli_query($conn,"SELECT * FROM adminlogin WHERE Adminname='" . $name . "' and Password = '". $pass ."'");
	$count  = mysqli_num_rows($result);

	if($count>0) {
       header("Location:AdminMainPage.html");
       //echo "Success";
    }
    else {
      echo "<script language='javascript'>";
      echo "alert('WRONG INFORMATION')";
      echo "</script>";
      die();
    }
}