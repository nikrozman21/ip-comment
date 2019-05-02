<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:login'); die();}

$conn = new mysqli("server_ip","db_username","db_pass","db_name");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = 'UPDATE IPs SET comment="' . $_POST['comment'] . '" WHERE ip = "' . $_POST['ip'] . '"';
if ($conn->query($sql) === TRUE) {
    header('LOCATION:admin'); die();
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>