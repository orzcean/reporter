<?php
/* Smarty version 3.1.30, created on 2017-11-11 03:19:37
  from "F:\bonphp\UniServerZ\www\reporter\templates\verifyuser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a066c49508da7_72613771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '053b7125a45928e3f80e7f5603708e7cfe0faa3e' => 
    array (
      0 => 'F:\\bonphp\\UniServerZ\\www\\reporter\\templates\\verifyuser.tpl',
      1 => 1510370210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a066c49508da7_72613771 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>

    <div class="img-container">
        <div class="container">
            <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <h1 class="text-white pt-3">巷集談-街道新聞</h1>


            <font color="#ffffff"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</font>
        </div>
    </div>


    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</body>

</html><?php }
}
