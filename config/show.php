<?php

require_once ('db.php');

$id = $_SESSION['id'];
$sql="SELECT * FROM akun WHERE id='$id'";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

$filename = $row['img'];
$image = $row['base64'];

$pecah = explode(",", $image);
?>