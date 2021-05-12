<?php
include "Classes/Conn.php";

function test_input($data) {
  
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
  
  $name = test_input($_POST["username"]);
  $pass = test_input($_POST["password"]);
}


$conn;
$database=DBconfig::DATABASE;
$connection=new Conn();
$conn=$connection->connectDB($database);


if(count($_POST)>0) {
	
	$result = mysqli_query($conn,"SELECT * FROM userlogin WHERE Username='" . $name . "' and Password = '". $pass ."'");
	$count  = mysqli_num_rows($result);

	if($count>0) {
       header("Location:CORONA1.html");
       //echo "Success";
    }
    else {
      echo "<script language='javascript'>";
      echo "alert('WRONG INFORMATION')";
      echo "</script>";
      die();
    }
}