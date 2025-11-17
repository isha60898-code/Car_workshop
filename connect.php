<?php
// Add this to process_booking.php after validation
$servername = "localhost";
$username = "root";  // Default for XAMPP
$password = "";  // Default password
$dbname = "car_workshop";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO bookings (name, email, service, date) VALUES ('$name', '$email', '$service', '$date')";
if ($conn->query($sql) === TRUE) {
    echo "Booking saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>