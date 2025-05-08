<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Validate input
if (empty($name) || empty($email) || empty($message)) {
    die("Error: Required fields are missing.");
}

// Sanitize input
$name = $conn->real_escape_string(htmlspecialchars($name));
$email = $conn->real_escape_string(htmlspecialchars($email));
$subject = $conn->real_escape_string(htmlspecialchars($subject));
$message = $conn->real_escape_string(htmlspecialchars($message));

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contact_submissions (name, email, subject, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $subject, $message);

// Execute the statement
if ($stmt->execute()) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>