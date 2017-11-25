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

//讀出所有文章
function list_article()
{
    global $db, $smarty;

    $sql = "SELECT * FROM `article` ORDER BY `update_time` DESC LIMIT 0,9";
    //SELECT `查詢的欄位(*代表所有欄位)` [FROM `資料表名稱` 附加的篩選條件]
    // 其中篩選條件語法如下（有順序關係，需注意）：
    // view sourceprint?
    // [where 篩選條件]
    // [group by `欄位名稱`][having group的篩選條件]
    // [order by以甚麼去做排序 {unsigned_integer | `欄位名稱` | formula} [asc | desc反向排序 由新到舊] ,...]
    // [limit [起點,] 筆數]
    $result = $db->query($sql) or die($db->error);
    $all    = [];
    //如果資料庫沒有資料的時候，要先設定一個初始值以免出錯，因為$all是陣列，所以初始值設[]陣列做告知
    while ($data = $result->fetch_assoc()) {
        // $result->fetch_assoc()每次只會抓一筆 所以放入while迴圈 功能讓他把每一筆都列出來，目前是一為陣列
        $all[] = $data;
        // 讓迴圈變成一個變數,加一個$all[] 中括號讓他變二為陣列
    }
    //die(var_export($all));
    $smarty->assign('all', $all);
    // 後面的$all對應$all[] = $data; 前面的all名稱可自行更改
}

//_GET可在網址輸入想要的內容送到tpl裡
