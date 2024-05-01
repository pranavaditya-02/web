<?php
// Retrieve form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to database (Replace these values with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sign_up";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into database
$sql = "INSERT INTO users (firstname, lastname, dob, gender, mobile, email, username, password)
        VALUES ('$firstname', '$lastname', '$dob', '$gender', '$mobile', '$email', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
