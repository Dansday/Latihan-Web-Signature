<?php

session_start();
require_once ('db.php');

$id = $_SESSION['id'];
define('UPLOAD_DIR', '../img/ttd/');
$img = $_POST['img'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = UPLOAD_DIR . uniqid() . '.jpeg';
$success = file_put_contents($file, $data);

mysqli_query($conn ,"UPDATE akun SET img='$file',base64='$img',status='0' WHERE id='$id'");

header("Location: success.php");
?>