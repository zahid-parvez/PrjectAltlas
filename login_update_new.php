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
$id = 8;
$emailid = "cwharry9@gmail.com";
$username = "Harish";
$password = "cwh1h3h45h@7$3#";

$sql = "INSERT INTO loginusers (id, emailid, username, password) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("isss", $id, $emailid, $username, $password);

if ($stmt->execute()) {
    echo "1 record inserted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
