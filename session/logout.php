<?php
include "database.php";

session_destroy();

setcookie('remember_me', '', time() - 1);

header("Location: login.php");
die;
