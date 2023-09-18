<?php
$servername = "localhost"; // Replace with your MySQL server hostname
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "machine_db"; // Replace with the name of your MySQL database

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the HTML form
$name = $_POST["name"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
// $email = $_POST["email"];
// $message = $_POST["message"];

// Define the SQL statement for data insertion
$insert_sql = "INSERT INTO dob(name, dob, gender) VALUES ( '$name','$dob', '$gender')";
// talk about gender option in database it will take enum type value same as it is index value.

// Execute the SQL statement
if ($conn->query($insert_sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
