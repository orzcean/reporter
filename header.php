<?php
if (!isset($_SESSION)) {
    // 假如$SESSION不存在 啟動session_start，主要是loginheader裡已經有session_start了
    session_start();
}

require_once 'function.php';
require_once 'smarty/libs/Smarty.class.php';
$smarty = new Smarty;
$db     = link_db();
//自動抓樣板檔
define('_PAGE_TPL', str_replace('.php', '.tpl', basename($_SERVER['PHP_SELF'])));
