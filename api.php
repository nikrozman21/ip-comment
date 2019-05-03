<?php
include 'config.php';
session_name(NAME);
			if (isset($_POST['useremail']) && isset($_POST['password'])) {
				$useremail = $_POST['useremail'];
				$password = $_POST['password'];
				$countUser = $odb->query("SELECT COUNT(*) FROM `users` WHERE `username`='$useremail'")->fetchColumn();
				if ($countUser > 0) {
					//User exists
					$userData = $odb->query("SELECT * FROM `users` WHERE `username`='$useremail' OR `email`='$useremail'")->fetch();
					if (SHA1(md5($password)) === $userData['password']) {
						session_start();
						$_SESSION['id'] = $userData['id'];
                        $_SESSION['username'] = $userData['username'];
                        header("LOCATION: admin");
					} else {
						die('Invalid username/email or password!');
					}
				}
            }

            


/*         	break;
        case 'upd-comment':
            $odb->query('UPDATE IPs SET comment="' . $_POST['comment'] . '" WHERE ip = "' . $_POST['ip'] . '"')->fetch();
        break;
    }
} */


?>