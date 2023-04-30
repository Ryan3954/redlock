<?php

$conn = mysqli_connect("172.18.0.3", "root", "password123","Redlock");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysql_connect_error());
}
// SQL query to retrieve all columns from the "user" table
$sql = "SELECT COUNT(*) as total FROM users";

// Execute the query
$result = $conn->query($sql);

// Check if the query returned any results
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Jumlah data = " . $row["total"];
} else {
    echo "0 results";
}
?>
