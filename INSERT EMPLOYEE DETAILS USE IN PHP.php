<?php
include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$position = $_POST['position'];
$salary = $_POST['salary'];

$sql = "INSERT INTO employees (name, email, phone, position, salary) 
        VALUES ('$name', '$email', '$phone', '$position', '$salary')";

if ($conn->query($sql) === TRUE) {
    echo "Employee added successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
header("Location: index.html");
?>
