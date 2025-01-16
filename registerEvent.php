<?php
include 'db.php';

$event_id = $_POST['event_id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO registrations (event_id, name, email) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iss", $event_id, $name, $email);

if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
