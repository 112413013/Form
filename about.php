<?php  
if(isset($_POST['submit']))  
{  
    echo "<h3>Ticket Booked Successfully</h3>";  
    echo "Name: " . $_POST['name'] . "<br>";  
    echo "Age: " . $_POST['age'] . "<br>";  
    echo "Destination: " . $_POST['destination'] . "<br>";  
}  
?>  <!DOCTYPE html>  <html>  
<head>  
    <title>Ticket Booking</title>  
</head>  
<body>  <h2>Ticket Booking Form</h2>  <form method="post">  
    Name:  
    <input type="text" name="name"><br><br>  Age:  
<input type="number" name="age"><br><br>  

Destination:  
<select name="destination">  
    <option>Chennai</option>  
    <option>Bangalore</option>  
    <option>Hyderabad</option>  
</select><br><br>  

<input type="submit" name="submit" value="Book Ticket">

</form>  </body>  
</html>
