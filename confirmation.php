<html>
<head>
<style>
body{
 background-image:url("background1.jpg");
}
table{
 width: 1000px;
 background: aqua;
 border:inset black 10px;
 margin-left: 40px;
 margin-top: 20px;
 padding: 2em;

}
td,th{
 border: inset black 1px;
padding: 1em;
font-weight: bold;
}
.style1{
 margin-left: 200px;
 margin-top: 100px;
}
</style>
<div align="right"><a href="index.html">Logout</a></div>
</head>
<body>



</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','hospital_system');
if($con==false)
{
 die('problem in connection');
}
$name=$_GET['name'];
//$pass=$_GET['pass'];
$query="select * from hospital where username='".$name."'";

$result=mysqli_query($con,$query);
$row=mysqli_fetch_row($result);

echo "<table>";
echo"<th>Confirmation for User:".$name."</th>";
echo "<tr>";
echo "<th>Username </th>";
echo "<th>Hospital name </th> ";
echo "<th>Hospital Area </th>";
echo "<th>Vaccine </th>";
echo "<th>Transportation </th>";

$total=0;
while ($row) {
  
 $row=mysqli_fetch_row($result);
}

echo "</table>";
?>
