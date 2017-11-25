<?php
$smarty->assign('op', $op);
$smarty->assign('Title', $page_title);
// 前面的Title是對應到樣板檔header.tpl
$smarty->display(_PAGE_TPL);
