<?php
setcookie('PHPSESSID', '', time() - 100); // expiring cookie

session_start();

session_destroy();

setcookie('remember_me', '', time() - 1);

header("Location: login.php");
die;
