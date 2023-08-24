<?php
// Create a connection
$servername = "localhost";
$username = "root";
$password = "a1r2i3f4@Q";
$database = "projectlas";

$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// Prepare and execute an INSERT query
$user_email = "rajiv@gmail.in";
$msg = "Reduced my efforts to find a problem statement for my project";

$sql = "INSERT INTO feedbacks (user_email, msg) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $user_email, $msg);

if ($stmt->execute()) {
    echo "1 record inserted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
