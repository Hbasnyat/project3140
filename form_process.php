<?php

// Database connection configuration for MAMP
$servername = "localhost";  // MAMP default MySQL server hostname
$username = "root";  // MAMP default MySQL username
$password = "root";  // MAMP default MySQL password
$dbname = "info";  // Database name

// Create a connection to the MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["fn"];
    $lastName = $_POST["ln"];
    $emailDomain = "@onlineprogrammingtutorials.edu";
    $generatedEmail = strtolower($firstName) . "." . strtolower($lastName) . $emailDomain;
    $courses = [];
    
    if (isset($_POST["c1"])) {
        $courses[] = "C++";
    }
    if (isset($_POST["c2"])) {
        $courses[] = "JAVA";
    }
    if (isset($_POST["c3"])) {
        $courses[] = "RUBY";
    }
    if (isset($_POST["c4"])) {
        $courses[] = "PYTHON";
    }
    
    $operatingSystemColor = $_POST["operating_system_color"];
    $operatingSystem = $_POST["operating_system"];
    $siteUsage = $_POST["site_usage"];
    $password = $_POST["password"];
    
    // Insert user data into the database
    $coursesString = implode(", ", $courses);
    $sql = "INSERT INTO user_enrollment (first_name, last_name, email, courses, operating_system_color, operating_system, site_usage, password) VALUES ('$firstName', '$lastName', '$generatedEmail', '$coursesString', '$operatingSystemColor', '$operatingSystem', '$siteUsage', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "User data inserted successfully!<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close the database connection
    $conn->close();
}
?>

