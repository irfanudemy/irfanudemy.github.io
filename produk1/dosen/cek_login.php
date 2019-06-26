<?php
// start the session
session_start();
// set session variable
$_SESSION["nip"] = $_POST["nip"];
$_SESSION["password"] = $_POST["pswd"];
header("location:detail_dosen.php");
?>