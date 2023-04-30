<?php

$conn = mysqli_connect("172.18.0.3", "root", "password123","Redlock");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysql_connect_error());
}
// SQL query to retrieve all columns from the "user" table
$sql = "SELECT * FROM users";

// Execute the query
$result = $conn->query($sql);

// Check if the query returned any results
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. "- Nama: " . $row["Nama"]. "- Alamat: " . $row["Alamat"]. "- Jabatan: " . $row["Jabatan"] ."<br>";
    }
} else {
    echo "0 results";
}
?>
