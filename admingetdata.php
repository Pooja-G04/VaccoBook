<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "hospital_system");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $hname =  $_REQUEST['hname'];
        $area = $_REQUEST['area'];
        $vacc =  $_REQUEST['vacc'];
        $trans = $_REQUEST['trans'];
        $oxygen = $_REQUEST['oxygen'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO hd  VALUES ('$hname', 
            '$area','$vacc','$trans','$oxygen')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>Data stored in a database successfully." ;
                
  
           
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>