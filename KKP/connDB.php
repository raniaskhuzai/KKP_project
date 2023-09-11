<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kkp_project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture form data
$date = $_POST['date'];
$room = $_POST['room'];
$printerBrand = $_POST['printer-brand'];
$color = $_POST['color'];
$receiver = $_POST['receiver'];
$giver = $_POST['giver'];

// Insert data into the database
$sql = "INSERT INTO form_data (date, room, printer_brand, color, receiver, giver)
        VALUES ('$date', '$room', '$printerBrand', '$color', '$receiver', '$giver')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
