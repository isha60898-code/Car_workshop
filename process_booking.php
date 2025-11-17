<?php
// process_booking.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);  // Sanitize input
    $email = htmlspecialchars($_POST['email']);
    $service = htmlspecialchars($_POST['service']);
    $date = htmlspecialchars($_POST['date']);
    
    // Basic validation
    if (empty($name) || empty($email) || empty($service) || empty($date)) {
        echo "All fields are required. <a href='index.php'>Go back</a>";
        exit;
    }
    
    // In a real app, send an email or save to database
    // Example: mail($email, "Booking Confirmation", "Thank you, $name, for booking $service on $date.");
    
    // For now, just display a confirmation
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>Your booking for $service on $date has been received. We'll confirm via email at $email.</p>";
    echo "<a href='index.php'>Back to Home</a>";
} else {
    echo "Invalid request. <a href='index.php'>Go back</a>";
}
?>
