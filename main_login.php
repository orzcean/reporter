<?php
require_once 'header.php';
$page_title = '註冊';
$op         = '';

if (isset($_SESSION['username'])) {
    header("location:index.php");
}
require_once 'footer.php';
