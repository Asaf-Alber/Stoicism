<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "stoicism";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$knowledge = $_POST['knowledge'];
$philosophers = implode(", ", $_POST['philosophers']);
$interest = $_POST['interest'];

$sql = "INSERT INTO questionnaire_responses (name, email, age, knowledge_level, philosophers, interest)
VALUES ('$name', '$email', $age, '$knowledge', '$philosophers', '$interest')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>