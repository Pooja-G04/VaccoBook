<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>GFG- Store Data</title>
</head>
<body background="mainpage_pic.jpg" class="form-design"> 
<body>
    <center>
        <h1>Add Hospital Records in Database</h1>
  
        <form action="hospitalgetdata.php" method="post">
              
            <p>
                <label for="hname">Hospital Name:</label>
                <input type="text" name="hname" id="hname">
            </p>
  6
  
              
            <p>
                <label for="area">Area:</label>
                <input type="text" name="area" id="area">
            </p>
  
  
              
            <p>
                <label for="vacc">Vaccine Name:</label>
                <input type="text" name="vacc" id="vacc">
            </p>
  
              
              
            <p>
                <label for="trans">Transportation :</label>
                <input type="text" name="trans" id="trans">
            </p>
  
              
              
            <p>
                <label for="oxygen">Oxygen And Beds Needed?:</label>
                <input type="text" name="oxygen" id="oxygen">
            </p>
  
              
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>