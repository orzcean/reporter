<?php
require_once 'header.php';
//die(var_dump($_SESSION));
$page_title = '首頁';

$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
$sn = isset($_REQUEST['sn']) ? (int) $_REQUEST['sn'] : 0;
//還是要判斷外來變數並過濾(先isset判斷有無接收變數$snaa，有的話過濾為數字，沒有的話為0，也就是使用者故意在snaa後面不是打數字，系統不會理會只會認數字)

switch ($op) {
//index.tpl檔裡沒有設隱藏欄位op，admin裡才有。所以跑預設default。

    default:
        if ($sn) {
            // 網址有某個編號的時候，執行show_article
            show_article($sn); //抓某一篇文章所以要放入參數$sn
            // show_article即為撈出資料庫裡所有的欄位內容資料，且每次只顯示某"一維陣列"的欄位內容資料到樣板檔 如:snaa=(sn)1時 即抓到sn1裡的title content...etc
            // $sn= ?snaa = {$article.sn} → ex:snaa=(sn)1 此頁面已經有對應到sn1裡所有欄位內容資料，如title=001，content=內容
            // 至於樣板檔要顯示甚麼欄位內容 就要去樣板檔設定
            $op = 'show_article';
            // 做一個$op變數丟到footer，讓index.tpl去抓取op
        } else {
            list_article();
            // 否則就跑出所有欄位內容，初始值會先跑這個，至於看是要跑出甚麼欄位 去op_list_article樣板檔設定
            $op = 'list_article';
// 流程是:先執行list_article撈出所有欄位內容並設二維陣列，透過index.tpl由$op送去樣板檔op_list_article並設迴圈秀出所有title，把title設連結自動對應sn序號，點連結後即網址會產生sn編號，系統開始執行show_article，撈出某一維陣列的所有內容[sn][title][content]，再透過index.tpl由$op送去op_show_article樣板檔決定顯示哪一個內容。
        }
        break;

}

require_once 'footer.php';



//讀出所有文章
function list_article()
{
    global $db, $smarty;

    $sql    = "SELECT * FROM `article` ORDER BY `update_time` DESC LIMIT 0,9";
    $result = $db->query($sql) or die($db->error);
    $all    = [];
    $i      = 0;
    while ($data = $result->fetch_assoc()) {
        $all[$i]            = $data;
        $all[$i]['summary'] = mb_substr(strip_tags($data['content']), 0, 90);
        // mb_substr擷取文字功能，strip_tags拿掉網頁語法留下純文字
        $i++;
    }
    // die(var_export($all));
    $smarty->assign('all', $all);
}

//_GET可在網址輸入想要的內容送到tpl裡
