<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define constants for database connection
define('DB_SERVER', 'localhost'); // The server address (typically 'localhost')
define('DB_PORT', '4306');        // The MySQL port number (change if necessary)
define('DB_USER', 'root');        // The MySQL user
define('DB_PASS', '');            // The MySQL password for 'root'. Leave empty if no password
define('DB_NAME', 'hms');         // The name of the database

// Establish connection to the database using server, port, user, password, and database
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME, DB_PORT);

// Check connection
if (!$con) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// If connection is successful
echo "Connected successfully!";
?>
