<?php
/* Smarty version 3.1.30, created on 2017-11-24 12:50:42
  from "F:\bonphp\UniServerZ\www\reporter\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1815a2171bd0_32881954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0227c18635d61b568cf0e0b9c9c2cbc3915b2793' => 
    array (
      0 => 'F:\\bonphp\\UniServerZ\\www\\reporter\\templates\\index.tpl',
      1 => 1511527835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:op_".((string)$_smarty_tpl->tpl_vars[\'op\']->value).".tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a1815a2171bd0_32881954 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-Hant-TW">


<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>

    <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- 導覽列樣板檔引入 -->



    <?php $_smarty_tpl->_subTemplateRender("file:op_".((string)$_smarty_tpl->tpl_vars['op']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>




    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</body>

</html>

<!-- 假文產生器文章
    <div class="container">
        <h1 class="text-black my-2">
            <p class="lipsum(1,5-10)"></p>
        </h1>
        <p class="lipsum(3,20-50)"></p>
        <p class="lipsum(5,80-100)"></p>
        <p class="lipsum(4,80-100)"></p>
        <p class="lipsum(2,40-50)"></p>
    </div> --><?php }
}
