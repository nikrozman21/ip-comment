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
    <div class="form-group">
      <label for="usermail">Username:</label>
      <input type="text" class="form-control" id="usermail" name="usermail" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" id="loginbtn" name="submit" class="btn btn-default">Login</button>
  </div>
  <script type="text/javascript">
    var useremail = null;
    var password = null
    $('#loginbtn').click(function () {
      useremail = $('#useremail').val();
      password = $('#password').val();
      $.post("api.php", {
          useremail: useremail,
          password: password,
          action: 'login',
          remember: $('#remember_me').val()
        })
        .done(function (data) {
          if (data == '1') {
            //Login successful
            $('#result').html(
              '<div class="alert alert-success"><i class="fa fa-check"></i> Successfully signed in! Redirecting...</div>'
              );
            setTimeout(function () {
              location.replace('.');
            }, 4321);
          } else {
            $('#result').html('<div class="alert alert-danger"><i class="fa fa-times"></i> ' + data + '</div>');
          }
        });
    });
  </script>
</body>

</html>