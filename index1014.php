<?php
require_once 'smarty/libs/Smarty.class.php';
//require 一定要有不然沒有辦法顯示 include 沒有也沒關係只是有些功能出不來
$smarty = new Smarty;
//標題
//$_POST 後對應的是tpl的 name，POST代表接收。
$potitle = $_POST['typetitle'];
$smarty->assign('titletext', $potitle);
//$smarty->assign('樣板標籤名稱', $變數值); 代表將變數送至樣板檔，樣板檔就是index.tpl放在templates裡。
//左邊的titletext是$potitle的標籤名可放在tpl裡面
//使用者輸入的內容echo在titletext的地方

//顏色
$selectcolor = $_POST['changecolor'];
$smarty->assign('showcolor', $selectcolor);

$smarty->assign('time', date("Y年m月d日 H:i:s"));
$smarty->display('index1014.tpl');

//_GET可在網址輸入想要的內容送到tpl裡
