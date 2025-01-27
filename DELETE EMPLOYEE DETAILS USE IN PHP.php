<?php
include 'config.php';

$id = $_GET['id'];
$sql = "DELETE FROM employees WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Employee deleted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
header("Location: index.html");
?>
