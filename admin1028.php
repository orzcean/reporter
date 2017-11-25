<!--
    $db->xxx()
    xxx為db裡面的方法、函數
    $db->ooo;
    ooo為db裡面的變數
    #db=new ...
  ->右邊的東西通常是資料庫裡內建的功能
 -->

<?php
require_once 'function.php';
require_once 'smarty/libs/Smarty.class.php';
$smarty = new Smarty;

$db = link_db();
// 這邊的$db和下方link_db裡的$db是不同的，這邊的$db為叫出link_db的內容，所以可以改別的名稱，但以下的$db都要改了。

// if (isset($_POST['op']) and $_POST['op'] == "insert") { 改以下:
// 三元運算式：
// 條件 ? 真動作一 :假動作二
$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
// 用 PHP 的 filter_var 過濾器來過濾(不同過濾器的運用時機：要在php檔案中運算用的，請用PHP來過濾，要寫入資料庫的，用資料庫的real_escape_string()來過濾。)
// 解釋:先執行判斷有無變數op，有的話系統不會出錯，再來跑''，如果有人要從瀏覽器竄改東西，filter_var($_POST['op'])可過濾掉。
// 以上從以下簡便出來的
// if (isset($_POST['op'])) {
//     $op = htmlspecialchars($_POST['op']);
// } else {
//     $op = '';
// }

switch ($op) {
    case 'insert'; //<input type="hidden" name="op" value="insert">
        $insertarticle = insert_article();
        header("location: index.php?sn={$insertarticle}");
        break;

    default;

        break;

}

//1. switch 可以判斷某個變數值，當該變數值符合指定條件時，就去執行哪些動作，基本上就是「一個口令，一個動作」之意。
//2. case 到 break 就是完整一組，可以自行添加無限多組。
//3. break; 不加也符合語法，但會一直執行到下方動作。
//4. default 即預設動作，當變數跟任一個「特定值」都不相符時要進行的動作，一般放在最下方。

//以下變成SWITCH了
// if ($op == "insert") {
//     $insertarticle = insert_article();
//     header("location: index.php?sn={$insertarticle}");
//     // 轉向，把頁面轉向剛剛使用者輸入的頁面
//     exit;
//     // 系統跑到此即停
// }

// 儲存文章
function insert_article()
// 打包功能
{
    global $db;
    // 把外面的$db叫近來
    $title = $db->real_escape_string($_POST['title']);
    // 利用 $db->real_escape_string() 過濾資料，目的是順利讓所有資料存入資料庫，並避免隱碼攻擊
    $content = $db->real_escape_string($_POST['content']);
    $sql     = "INSERT INTO `article` (`title`, `content`, `create_time`, `update_time`)
    VALUES ('{$title}', '{$content}', NOW(), NOW())";
    $db->query($sql) or die($db->error);
    // $db->query($sql) 就是送以上執行指令到資料庫
    $sn = $db->insert_id;
    // insert_id送出後請求流水號
    return $sn;
    // 因為$title $content是存入資料庫即可的動作，所以不用return出去了
}

// $smarty->assign('now', date("Y年m月d日 H:i:s"));
$smarty->display('admin.tpl');
