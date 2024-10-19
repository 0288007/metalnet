<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traffic";
 
// Create connection
$conn = mysqli_connect($servername, $username, $password);
 
// Check connection
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}
 
// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql)) {
    // Select the database
    mysqli_select_db($conn, $dbname);
} else {
    die('Error creating database: ' . mysqli_error($conn));
}
 
// Create table if it doesn't exist
$table_sql = "CREATE TABLE IF NOT EXISTS count_number (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    count1 INT(11) NOT NULL
)";
if (mysqli_query($conn, $table_sql)) {
    // Check if the table is empty and insert initial value if necessary
    $result = mysqli_query($conn, "SELECT COUNT(*) as count FROM count_number");
    $row = mysqli_fetch_assoc($result);
    if ($row['count'] == 0) {
        mysqli_query($conn, "INSERT INTO count_number (count1) VALUES (0)");
    }
} else {
    die('Error creating table: ' . mysqli_error($conn));
}
 
// Fetch current count and update
$find_count = mysqli_query($conn, "SELECT * FROM count_number");
while ($row = mysqli_fetch_assoc($find_count)) {
    $current_count = $row['count1'];
    $new_count = $current_count + 1;
    try {
        $sql = "UPDATE count_number SET count1 = '$new_count' WHERE id = 1";
        $update_count = mysqli_query($conn, $sql);
        echo $new_count;
    } catch (Exception $e) {
        echo 'error: ' . $e->getMessage();
    }
}
 
// Close connection
mysqli_close($conn);
?>