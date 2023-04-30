<?php

$conn = mysqli_connect("172.18.0.3", "root", "password123","Redlock");

if (!$conn) {
  die("Connection failed: " . mysql_connect_error());
}
$sql = "SELECT COUNT(*) as total FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Jumlah data = " . $row["total"];
} else {
    echo "0 results";
}
?>
