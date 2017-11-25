<?php
/* Smarty version 3.1.30, created on 2017-11-25 04:05:46
  from "F:\bonphp\UniServerZ\www\reporter\templates\op_modify_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a18ec1a874b86_15504538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa06b1b1ffc0bc19304e69295db3f0252942f215' => 
    array (
      0 => 'F:\\bonphp\\UniServerZ\\www\\reporter\\templates\\op_modify_article.tpl',
      1 => 1511582742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a18ec1a874b86_15504538 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

<form action="admin.php" method="post" enctype="multipart/form-data">
    <!-- 有file欄位時必加語法enctype="multipart/form-data" -->
    <div class="form-group">
        <label for="title" class="col-form-label text-white">文章標題</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="請輸入文章標題" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
">
    </div>
    <div class="form-group">
        <label for="content" class="col-form-label text-white">文章內容</label>
        <textarea name="content" id="content" rows="20" class="form-control" placeholder="請輸入文章內容"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</textarea>
    </div>
    <div class="form-group">
        <label for="title" class="col-form-label text-white">封面圖</label>
        <input type="file" class="form-control" name="pic" id="pic" placeholder="請上傳一張封面圖">
    </div>
    <div class="text-center">
        <input type="hidden" name="sn" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
">
        <input type="hidden" name="op" value="update">
        <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>
">
        <button type="submit" class="btn btn-primary">更新</button></button>
    </div>
</form>

<?php echo '<script'; ?>
>
    CKEDITOR.replace('content');
// 對應到上面的id=content，所以會顯現出ckeditor

<?php echo '</script'; ?>
><?php }
}
