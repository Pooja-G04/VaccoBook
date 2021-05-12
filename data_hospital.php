<?php
$con=mysqli_connect('localhost','root','','hospital_system');
 if($con==false)
	    die('problem in connection');

$operation=$_POST['button'];

if($operation=="Add Hospital"){
$username=$_POST['username'];
$hname=$_POST['hname'];
$area=$_POST['area'];
$vacc=$_POST['vacc'];
$trans=$_POST['trans'];

mysqli_query($con,"INSERT INTO `hospital`(`username`, `hname`, `area`, `vacc`, `trans`) VALUES ('$username','$hname','$area','$vacc','$trans')")
or die('can not insert record  error code').mysqli_errno($con)." <br> Error ".mysqli_error($con);
echo '<center><h2>'.mysqli_affected_rows($con).'</h2> records added';
include "bill.php";
 }

else if($operation=="Search Hospital"){

$name=$_POST['hname'];
$query="select * from hospital where name='".$hname."'";
$result= mysqli_query($con,$query);
$n=mysqli_num_rows($result);
if($n>0)
{

	$row=mysqli_fetch_row($result);

	echo "<table>";
	echo "<tr>" ;
	echo "<th>Username</th>";
	echo "<th>Hospital Name</th>";
	echo "<th>Area</th>";
  echo "<th>Vaccine</th>";
  echo "<th>Transportation</th>";

	echo "</tr>";
		  echo "<tr><td>".$row[1]."</td><td>  ".$row[2]."</td><td>  ".$row[3]."</td><td>  ".$row[4]."</td><td>  ".$row[5]."</td></tr>";
	echo "</table>";
    }
    else
      echo "<h1>No Record Found for Name ".$name." </h1>";
	}

else if($operation=="ShowAll Hospital"){
									  include "bill.php";
									  }
else if($operation=="Remove Hospital"){

$name=$_POST['hname'];
$query="select * from hospital where name='".$hname."'";
$result= mysqli_query($con,$query);
$n=mysqli_num_rows($result);
if($n>0)
{$q="DELETE FROM `hospital` WHERE hname='".$hname."'";
	mysqli_query($con,$q);
	echo '<center><h2>'.mysqli_affected_rows($con).'  Record Deleted </h2></center> ';

}
else{
echo '<center><h2>No Record Present For the name   '.$hname.'</h2></center>';

}
}
else if($operation=="Update Hospital"){
	 $name=$_POST['hname'];
   $query="select * from hospital where hname='".$hname."'";
   $result= mysqli_query($con,$query);

$n=mysqli_num_rows($result);
if($n>0)
  {
    $username=$_POST['username'];
    $area=$_POST['area'];
    $vacc=$_POST['vacc'];
    $trans=$_POST['trans'];
    mysqli_query($con,"update  hospital set username='".$username."',area='".$area."',vacc=".$vacc.", trans=".$trans." where hname='".$hname."'");
	echo '<center><h2>'.mysqli_affected_rows($con).'  Record Updated </h2></center> ';
  include "bill.php";

  }
  else {
	echo '<center><h2>No Record Present For the name   '.$hname.'</h2></center>';
	echo '<center><h2>It cannot be updated</h2></center>';

	}
}
?>
