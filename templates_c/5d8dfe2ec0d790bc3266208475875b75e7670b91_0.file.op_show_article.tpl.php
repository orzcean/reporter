<?php
/* Smarty version 3.1.30, created on 2017-11-25 01:04:52
  from "F:\bonphp\UniServerZ\www\reporter\templates\op_show_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a18c1b41f7081_08518245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d8dfe2ec0d790bc3266208475875b75e7670b91' => 
    array (
      0 => 'F:\\bonphp\\UniServerZ\\www\\reporter\\templates\\op_show_article.tpl',
      1 => 1511530736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a18c1b41f7081_08518245 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>


    <?php if (isset($_SESSION['username']) && $_SESSION['username'] == $_smarty_tpl->tpl_vars['article']->value['username']) {?>
    <!-- 如果 $smarty.session.username 和 $article.username(該篇文章登入者) 相等 秀出以下刪除編輯 -->
    <!-- 如果沒有登入時 判斷 isset($smarty.session.username) -->
    <div class="alert alert-info text-center">
        <!-- alert bootstrap4效果 -->
        <a href="admin.php?op=delete_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-danger">刪除</a>
        <a href="admin.php?op=modify_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-warning">編輯</a>
    </div>
    <?php }?>


</div>
<!-- //一維陣列語法 --><?php }
}
