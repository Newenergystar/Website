<?php

$servername = "localhost";
$dBUsername = "u-190131063";
$dBPassword = "aTnarBrzAnALxKP";
$dBName = " u_190131063_db";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
