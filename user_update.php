<?php
// Create a connection
$servername = "localhost";
$username = "root";
$password =  -passwrd-;
$database = "projectlas";

$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// Prepare and execute an INSERT query
$id = 9;
$fname = "Cathy";
$sname = "Joseph";
$phonenum = "989905900";
$emailid = "cathijos@gmail.com";
$password = "cathjsoYh@$3";
$gender = "female";

$sql = "INSERT INTO newusers (id, fname, sname, phonenum, emailid, password, gender) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("issssss", $id, $fname, $sname, $phonenum, $emailid, $password, $gender);

if ($stmt->execute()) {
    echo "1 record inserted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
