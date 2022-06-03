<?php
error_reporting(0);

$username = $_GET["username"]; 
$password = $_GET["password"];
$usernamefile = file_get_contents($path);

if ($usernamefile=="") {
$hashedpassword = password_hash($password, PASSWORD_DEFAULT);

$fp = fopen($username,"wb");
fwrite($fp, $hashedpassword);
fclose($fp);
  
echo "Account creation success";
} else {
  echo "This account already exists.";
}

?>
