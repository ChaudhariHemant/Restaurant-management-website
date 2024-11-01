<?php
session_start();

$errors = array();

// Enable error reporting for mysqli errors
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Attempt to connect to MySQL
    $conn = mysqli_connect("127.0.0.1", "root", "", "foodshala");
    if (!$conn) {
        throw new Exception("Database connection failed: " . mysqli_connect_error());
    }
} catch (Exception $e) {
    die($e->getMessage());
}
?>
