<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $destination = $_POST['destination'];

    // Negative Scenario 1
    if (empty($name) || empty($age) || empty($destination)) {
        echo "<h3>Booking Failed!</h3>";
        echo "Please fill all the fields.";
    }

    // Negative Scenario 2
    elseif (!preg_match("/^[A-Za-z ]+$/", $name)) {
        echo "<h3>Invalid Name!</h3>";
        echo "Name should contain only alphabets.";
    }

    // Negative Scenario 3
    elseif ($age <= 0) {
        echo "<h3>Invalid Age!</h3>";
        echo "Age must be greater than 0.";
    }

    // Positive Scenario
    else {
        echo "<h3>Ticket Booked Successfully</h3>";
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Destination: " . $destination;
    }
}

?>
