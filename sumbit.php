<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data to prevent XSS
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);

    // Here you can process the data, for now, we just display it
    echo "<h2>Registration Successful!</h2>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Phone:</strong> " . $phone . "</p>";
    echo "<p><strong>Date of Birth:</strong> " . $dob . "</p>";
}
?>
