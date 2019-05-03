<?php
include 'config.php';
session_name(NAME);
			if (isset($_POST['useremail']) && isset($_POST['password'])) {
				$useremail = $_POST['useremail'];
				$password = $_POST['password'];
                $userData = $odb->query("SELECT * FROM `users` WHERE `username`='$useremail'")->fetch();
					if (SHA1(md5($password)) === $userData['password']) {
						session_start();
						$_SESSION['id'] = $userData['id'];
                        $_SESSION['username'] = $userData['username'];
                        header("LOCATION: admin");
					} else {
						header("LOCATION: login");
					}
                }
?>