<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:login'); die();}
    if($_GET['ip'] == ''){
        header('LOCATION:admin'); die();}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | IP management</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">IP Address</th>
                                <th class="column2"></th>
                                <th class="column3">Comment</th>
                                <th class="column4"></th>
                                <th class="column5"></th>
                                <th class="column6">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                    echo '<tr>';
                                    echo '<td class="column1"><form action="post.php" method="post"><input type="text" name="ip" value="'. $_GET['ip'] . '" readonly> </td>';
                                    echo '<td class="column2"></td>';
                                    echo '<td class="column3"><input type="text" name="comment" size="50"></td>';
                                    echo '<td class="column4"></td>';
                                    echo '<td class="column5"></td>';
                                    echo '<td class="column6"><input class="btn btn-primary btn-sm" type="submit"></td></form>';
                                    echo '</tr>';
                                mysqli_close($con);
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>