<?php
/* Smarty version 3.1.30, created on 2017-11-28 14:44:09
  from "F:\bonphp\UniServerZ\www\reporter\templates\op_article_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1d7639adaa84_13731928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c971ddd2fe42fc70f5f9321c4ad1d56b6645e685' => 
    array (
      0 => 'F:\\bonphp\\UniServerZ\\www\\reporter\\templates\\op_article_form.tpl',
      1 => 1511598109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1d7639adaa84_13731928 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="js/languages/jquery.validationEngine-zh_TW.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css">


<?php echo '<script'; ?>
 src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

<form action="admin.php" method="post" enctype="multipart/form-data" form id="myform">
    <!-- 有file欄位時必加語法enctype="multipart/form-data" -->
    <div class="form-group">
        <label for="title" class="col-form-label text-white">文章標題</label>
        <input type="text" class="form-control validate[required]" name="title" id="title" placeholder="請輸入文章標題">
    </div>
    <div class="form-group">
        <label for="content" class="col-form-label text-white">文章內容</label>
        <textarea name="content" id="content" rows="20" class="form-control validate[required, minSize[10]]" placeholder="請輸入文章內容"></textarea>
    </div>
    <div class="form-group">
        <label for="title" class="col-form-label text-white">封面圖</label>
        <input type="file" class="form-control" name="pic" id="pic" placeholder="請上傳一張封面圖">
    </div>
    <div class="text-center">
        <input type="hidden" name="op" value="insert">
        <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>
">
        <button type="submit" class="btn btn-primary">儲存</button>
    </div>
</form>

<?php echo '<script'; ?>
>
    CKEDITOR.replace('content');
// 對應到上面的id=content，所以會顯現出ckeditor
        $(document).ready(function () {
            $('#myform').validationEngine({ promptPosition: "bottomLeft" });
        });

<?php echo '</script'; ?>
><?php }
}
