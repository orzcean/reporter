<?php

//連線到資料庫
function link_db()
// 打包功能
{
    $db = new mysqli('localhost', 'root', '12345', 'reporter');
    // 此時此框裡的$db已有資料庫的功能
    if ($db->connect_error) {
        die('無法連上資料庫：' . $db->connect_error);
        // .為連接字串元 連前面的字串跟後面的變數
    }
    $db->set_charset("utf8");
    // 以上為連結資料庫語法
    return $db;
    // 把$db的功能丟出去此框運作，否則$db會被限制在此框裡出不去，做此動作框框外的link_db才能接收到。
}

//讀出單一文章(功能是撈出資料庫裡所有的欄位內容資料，且每次只顯示某"一維陣列"的欄位內容到樣板檔)
function show_article($sn) //給個參數代表給某一篇資料 預設值是0

{
    global $db, $smarty;

    require_once 'HTMLPurifier/HTMLPurifier.auto.php';
    $config   = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);
    // 以上三行為過濾使用者送出的內容

    $sql = "SELECT * FROM `article` WHERE sn='$sn'";
    //顯示出 *=所有欄位 的內容到樣板檔
    $result = $db->query($sql) or die($db->error);
    $data   = $result->fetch_assoc();
    // 只會抓出一篇
    $data['content'] = $purifier->purify($data['content']);
    //過濾使用者送出的內容
    $smarty->assign('article', $data);
}
