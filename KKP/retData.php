<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kkp_project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select the data you want to visualize
$sql = "SELECT color, COUNT(*) AS count FROM form_data GROUP BY color";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();
?>
