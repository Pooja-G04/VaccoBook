<?php

include "Classes/Conn.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $ID=Validate($_POST['id']);//ID
  $Name=Validate($_POST['name']); //username
  $Password=Validate($_POST['pass']);  //password
}

function Validate($value)
{
 $data=trim($value);
 $data=stripslashes($value);
 $data=htmlspecialchars($value);
 return $data;
}

$conn;
$database=DBConfig::DATABASE;
$connection=new Conn();
$conn=$connection->connectDB($database);


$sql="Insert into userlogin(ID,Username,Password) values('$ID' ,'$Name','$Password')";

if($conn->query($sql)===true){
header("Location:index.php");
}
else{
echo "Error";
}
 ?>
