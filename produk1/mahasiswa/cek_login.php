<?php
// start the session
session_start();
// set session variable
$_SESSION["nim"] = $_POST["nim"];
$_SESSION["password"] = $_POST["pswd"];
// $_SESSION["jurusan"] = "Teknik Informatika";
// $_SESSION["semester"] = "3";
// $_SESSION["hutang"] = "Rp 0";
// membuka halaman detail mahasiswa
header("location:detail_mhs.php");
?>