<?php
$StringExplo=explode("/",$_SERVER['REQUEST_URI']);
$HeadTo=$StringExplo[0]."/Index.php";
Header("Location: ".$HeadTo);
?>