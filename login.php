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
  <meta http-equiv='content-type' content='text/html;charset=utf-8' />
  <title>Login | IP management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h3 class="text-center">Login</h3>
    <form action="api.php" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="useremail" name="useremail" required>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" name="submit" class="btn btn-default">Login</button>
    </form>
  </div>
</body>

</html>