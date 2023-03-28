<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}
unset($_SESSION['id']);
session_destroy();
header("Location: index.php");
?>