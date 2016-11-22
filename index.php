<?php
/*
 Author: Aklis
*/
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: /login.php");
  exit();
}

if ($_SESSION['level']==='0') {
  echo "You level is zero, so you can't touch me!";
  exit();
}

echo "Hello, " . $_SESSION['username'];

echo "This is your flag: hctf{}";