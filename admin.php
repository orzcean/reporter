<?php
require "loginheader.php";
require_once 'header.php';
// define('_PAGE_TPL', 'admin.tpl');
$page_title = '管理頁面';

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
$sn = isset($_REQUEST['sn']) ? (int) $_REQUEST['sn'] : 0;
// 過濾op_show_article的sn

switch ($op) {
    case 'insert'; //<input type="hidden" name="op" value="insert">
        $sn = insert_article();
        // 這邊的sn也可以不叫sn，就是把insert_article變成叫做$sn的函數，然後動作到下面的sn={$sn}
        header("location: index.php?sn={$sn}");
        exit; //跳出迴圈(就是跳出現在這個大括號)不會再跑以下的東西

    case 'delete_article':
        delete_article($sn);
        // 這裡的$sn來自op_show_article
        header("location: index.php");
        exit;

    case "article_form";
        //admin.php?op=article_form
        //$op=article_form footer可以抓到 樣板檔設定 {include file="op_`$op`.tpl"}
        // 做此動作只是要獨立出樣板檔op_article_form
        break;

    case 'modify_article':
        show_article($sn);
        break;

    case 'update';
        update_article($sn);
        header("location: index.php?sn={$sn}");
        exit;

    default;
        $op = "";
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

require_once 'footer.php';

// -------------函數區---------------

// 儲存文章
function insert_article()
// 打包功能
{
    global $db;
    // 把外面的$db叫近來
    $title = $db->real_escape_string($_POST['title']);
    // 利用 $db->real_escape_string() 過濾資料，目的是順利讓所有資料存入資料庫，並避免隱碼攻擊
    $content  = $db->real_escape_string($_POST['content']);
    $username = $db->real_escape_string($_POST['username']);

    $sql = "INSERT INTO `article` (`title`, `content`,`username`, `create_time`, `update_time`)
    VALUES ('{$title}', '{$content}','{$username}', NOW(), NOW())";
    // 寫入資料庫的語法
    $db->query($sql) or die($db->error);
    // $db->query($sql) 就是送以上執行指令到資料庫
    $sn = $db->insert_id;
    // insert_id送出後請求流水號

    upload_pic($sn);

    return $sn;
    // 因為$title $content是存入資料庫即可的動作，所以不用return出去了
}

// 刪除文章
function delete_article($sn)
{
    global $db;

    $sql = "DELETE FROM `article` WHERE sn='{$sn}' and username='{$_SESSION['username']}'";
    $db->query($sql) or die($db->error);

    if (file_exists("uploads/cover_{$sn}.png")) {
        unlink("uploads/cover_{$sn}.png");
        unlink("uploads/thumb_{$sn}.png");
    }
}

//更新文章
function update_article($sn)
{
    global $db;
    $title    = $db->real_escape_string($_POST['title']);
    $content  = $db->real_escape_string($_POST['content']);
    $username = $db->real_escape_string($_POST['username']);

    $sql = "UPDATE `article` SET `title`='{$title}', `content`='{$content}', `update_time`= NOW() WHERE `sn`='{$sn}' and username='{$_SESSION['username']}'";
    $db->query($sql) or die($db->error);

    upload_pic($sn);

    return $sn;
}

//上傳團片
function upload_pic($sn)
{

    if (isset($_FILES)) {
        require_once 'class.upload.php';
        $foo = new Upload($_FILES['pic']);
        if ($foo->uploaded) {
            // save uploaded image with a new name
            $foo->file_new_name_body = 'cover_' . $sn;
            $foo->image_resize       = true;
            $foo->image_convert      = png;
            $foo->image_x            = 1200;
            $foo->image_ratio_y      = true;
            $foo->Process('uploads/');
            if ($foo->processed) {
                $foo->file_new_name_body = 'thumb_' . $sn;
                $foo->image_resize       = true;
                $foo->image_convert      = png;
                $foo->image_x            = 400;
                $foo->image_ratio_y      = true;
                $foo->Process('uploads/');
            }
        }
    }
}

// $ext = pathinfo($_FILES['pic']['name'], PATHINFO_EXTENSION);
// // 自動抓取附檔名的語法
// if (!is_dir('uploads')) {
//     mkdir('uploads');
// }
// // 如果沒有uploads的資料夾的話 建一個uploads資料夾
// move_uploaded_file($_FILES['pic']['tmp_name'], "uploads/{$sn}.{$ext}");
// // move_uploaded_file(暫存檔 , 新路徑檔名)
