<?php
//SYSTEM SETTINGS
$base_url = 'http://' . $_SERVER['SERVER_NAME'];
$signin_url = substr($base_url . $_SERVER['PHP_SELF'],0, -(6 + strlen(basename($_SERVER['PHP_SELF']))));
$invalid_mod = '$adminemail is not a valid email address';
$ip_address = $_SERVER['REMOTE_ADDR'];

?>
