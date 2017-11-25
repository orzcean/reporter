<?php
require_once 'smarty/libs/Smarty.class.php';
$smarty = new Smarty;

$db = new mysqli('localhost', 'root', '12345', 'reporter');
if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
    // .為連接字串元 連前面的字串跟後面的變數
}
$db->set_charset("utf8");
// 以上為連結資料庫語法

if (isset($_POST['op']) and $_POST['op'] == "insert") {
    // if是判斷式 ()內的內容是他的條件，條件內的東西都要符合才會執行
    //   isset代表此變數存不存在，因為剛開頁面時沒有接收到POST的東西，所以會出錯，加入isset告訴系統op此變數是真存在的。
    $title = $db->real_escape_string($_POST['title']);
    // 利用 $db->real_escape_string() 過濾資料，目的是順利讓所有資料存入資料庫，並避免隱碼攻擊
    $content = $db->real_escape_string($_POST['content']);
    $sql     = "INSERT INTO `article` (`title`, `content`, `create_time`, `update_time`)
    VALUES ('{$title}', '{$content}', NOW(), NOW())";
// -- INSERT [INTO] `資料表名稱` [(`欄位1`, `欄位2`...)] VALUES ('值1<對應欄位1>', '值2<對應欄位2>'...)
    // values後的$title content 是 「$title」 = $db...的「$title」
    // NOW()是資料庫本身的函數，代表現在
    $db->query($sql) or die($db->error);
    // $db->query($sql) 就是送以上執行指令到資料庫
    $sn = $db->insert_id;
    // insert_id送出後請求流水號
    header("location: index.php?sn={$sn}");
    // 轉向，把頁面轉向剛剛使用者輸入的頁面
    exit;
    // 系統跑到此即停
}

// $smarty->assign('now', date("Y年m月d日 H:i:s"));
$smarty->display('admin.tpl');
