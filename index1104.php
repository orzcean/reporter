<?php
require_once 'header.php';
// 頁首

// $page_title是藏在footer.php裏
$page_title = '首頁';

$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
$sn = isset($_REQUEST['sn']) ? (int) $_REQUEST['sn'] : 0;
//還是要判斷外來變數並過濾
switch ($op) {

    default:
        if ($sn) {
            show_article($sn);
            // 如果有變數$sn就跑讀出單一篇文章
            $op = 'show_article';
            // 做一個$op變數，好讓丟到樣板檔
        } else {
            list_article();
            // 否則就跑讀書所有文章(標題)，初始值會先跑這個
            $op = 'list_article';

        }
        break;

}

require_once 'footer.php';

//讀出單一文章
function show_article($sn)
{
    global $db, $smarty;

    $sql = "SELECT * FROM `article` WHERE sn='$sn'";
    //ˋsnˋ是資料庫裡的sn欄位，代表從資料庫裡sn欄位撈出資料，顯示出 *=所有欄位 的內容到樣板檔
    //後面的$sn在op_list_article裡有做迴圈，所以會強迫撈出所有一維陣列的sn，不會受限於以下$data   = $result->fetch_assoc();只顯示第一筆內容，如果是設sn>0，雖然都有抓出來，但網頁仍只會顯示第一筆，要有設迴圈才會全部都顯示出來。)
    // $sn是op_list_article.tpl裡的一微陣列{$article.sn}，因為有被二微陣列$all包住，所以等於從資料庫抓出一為陣列的所有sn出來
    $result = $db->query($sql) or die($db->error);
    $data   = $result->fetch_assoc();
    // 顯示一篇文章所以不用設迴圈了
    $smarty->assign('article', $data);
}

//讀出所有文章
function list_article()
{
    global $db, $smarty;

    $sql = "SELECT * FROM `article` ORDER BY `update_time` DESC";
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
