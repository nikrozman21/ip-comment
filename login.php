<?php
include 'config.php';
session_name(NAME);
session_start();
if (isset($_SESSION['id'])) {
    header('Location: admin');
    die('Already signed in!');
}

if (isset($_COOKIE['IPILogin'])) {
	$ipilogin = $_COOKIE['IPILogin'];
}
else {
	$ipilogin = '';
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login | IP management</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link href="css/signin.css" rel="stylesheet">
</head>

<body>
  <?php include 'nav.php'; ?>
  <div class="text-center">
    <form action="api.php" method="post">
      <div class="form-group">
        <img class="mb-4" src="https://accuratenode.com/assets/img/glyph-1080.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="username" class="sr-only">Username</label>
        <input type="username" name="username" id="username" class="form-control username" placeholder="Username"
          required="" autocomplete="off">
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control password" placeholder="Password"
          required="" autocomplete="off">
        <button class="btn btn-lg btn-primary btn-block space" name="submit" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">AccurateNode © 2019</p>
      </div>
    </form>
  </div>
</body>

</html>