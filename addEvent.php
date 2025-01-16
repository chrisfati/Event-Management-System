<?php
include 'db.php';

$title = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];
$time = $_POST['time'];
$location = $_POST['location'];

$sql = "INSERT INTO events (title, description, date, time, location) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $title, $description, $date, $time, $location);

if ($stmt->execute()) {
    echo "Event added successfully!";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
