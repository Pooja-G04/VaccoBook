<?php
include_once 'DBconfig.php';
class Conn{
  public function connectDB($database=DBconfig::DATABASE){
  $conn=new mysqli(DBconfig::SERVERNAME,DBconfig::USERNAME,DBconfig::PASSWORD,$database);
  if($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);
  }
  //echo "Success";
  return $conn;
}
}
 ?>
