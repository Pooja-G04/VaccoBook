<!DOCTYPE html>
<html>
<head>
<center>
<h1>Check Below for Available Hospitals!</h1>
</center>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
top: 100px;
margin:250px 0 0 0;
}

th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body background="hospital.jpg" class="form-design"> 
<body>
<table>
<tr>
<th>HospitalName</th>
<th>Area</th>
<th>Type Of Vaccine</th>
<th>Transport Available?</th>
<th>Oxygen Cylinders In Supply?</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "hospital_system");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT hname, area, vacc, trans, oxygen FROM hd";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["hname"]. "</td><td>" . $row["area"] . "</td><td>" . $row["vacc"] . "</td><td>" . $row["trans"] .  "</td><td>".  $row["oxygen"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>