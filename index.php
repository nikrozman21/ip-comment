<?php
include 'config.php';
session_name(NAME);
session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $userInfo = $odb->query("SELECT * FROM `users` WHERE `id` = '$id'")->fetch();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | IP management</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <?php include 'nav.php'; ?>
    <main role="main" class="container">
        <div class="jumbotron text-center">
            <h1 class="display-3 mb-4"><b><span class="text-primary font-weight-bold">IP</span>Info</b></h1>
            <p class="lead mb-4">Welcome to AccurateNode's IP administration panel.<br>This panel is built mostly for staff to keep track of the used IPs and what they are in use by.</p>
            <a class="btn btn-sm btn-primary" href="https://accuratenode.com/" target="_blank" role="button">Landing page</a>
        </div>
    </main>
</body>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="js/main.js">
</script>

</html>