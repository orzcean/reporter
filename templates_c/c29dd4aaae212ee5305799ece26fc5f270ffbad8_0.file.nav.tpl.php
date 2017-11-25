<?php
/* Smarty version 3.1.30, created on 2017-11-22 14:41:32
  from "F:\bonphp\UniServerZ\www\reporter\templates\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a158c9c4fd042_28756966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c29dd4aaae212ee5305799ece26fc5f270ffbad8' => 
    array (
      0 => 'F:\\bonphp\\UniServerZ\\www\\reporter\\templates\\nav.tpl',
      1 => 1511361688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a158c9c4fd042_28756966 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- 導覽列語法 更多樣式http://bootstrap.hexschool.com/docs/4.0/components/navs/ -->
<nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark py-0">
    <!-- 螢幕大於 md 768px時選單展開 -->
    
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu">
    <span class="navbar-toggler-icon"></span>
    </button>
<!-- 以上為加入視窗縮小時的展開按鈕 -->


    <a class="navbar-brand" href="index.php">
        <img alt="Brand" src="images/logo.png" class="img-fluid">
    </a>
<!-- logo -->

    <div class="collapse navbar-collapse" id="menu">
        <!-- 要縮小的範圍對應menu包起來 -->
        <div class="navbar-nav mr-auto">
            <!-- 強制靠右 -->
            <a class="nav-link text-warning pt-3 active" href="index.php">首頁</a>
            <a class="nav-link text-warning pt-3 active" href="gallery.php">圖集</a>
        </div>

        <div class="navbar-nav">

            <?php if (isset($_SESSION['username'])) {?>

            <!-- 假如smarty有接收到超級全域變數session裡的username 會秀出以下 -->
            <a class="nav-link text-warning pt-3 active" href="admin.php?op=article_form">發佈</a>
            <a class="nav-link text-warning pt-3 active" href="logout.php">登出</a> <?php } else { ?>
            <a class="nav-link text-warning pt-3 active" href="main_login.php">登入</a>
            <a class="nav-link text-warning pt-3 active" href="signup.php">註冊</a> <?php }?>
        </div>
    </div>
</nav><?php }
}
