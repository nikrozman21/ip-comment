<?php
include 'config.php';
session_name(NAME);
session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $userInfo = $odb->query("SELECT * FROM `users` WHERE `id` = '$id'")->fetch();
}
else {
    header('LOCATION: login');
}

$do = $odb->prepare('UPDATE IPs SET comment="' . $_POST['comment'] . '" WHERE ip = "' . $_POST['ip'] . '"');
$do->execute();
header('LOCATION: admin');
?>