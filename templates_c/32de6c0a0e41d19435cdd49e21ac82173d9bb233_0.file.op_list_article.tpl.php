<?php
/* Smarty version 3.1.30, created on 2017-11-24 12:50:42
  from "F:\bonphp\UniServerZ\www\reporter\templates\op_list_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1815a2248986_55349259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32de6c0a0e41d19435cdd49e21ac82173d9bb233' => 
    array (
      0 => 'F:\\bonphp\\UniServerZ\\www\\reporter\\templates\\op_list_article.tpl',
      1 => 1511527807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1815a2248986_55349259 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="img-container">
    <div class="container">
        <div class="shadow">

        </div>
    </div>
</div>

    <!--         
        foreach $來源 as $別名 
        $別名.索引 
        foreachelse 
        該變數沒有值時要出現的內容 
        /foreach -->


<div class="container">
    <h1 class="my-3 text-center">最新文章</h1>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'article');
$_smarty_tpl->tpl_vars['article']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->index++;
$__foreach_article_0_saved = $_smarty_tpl->tpl_vars['article'];
?>
        <div class="col-sm-4">
            <?php $_smarty_tpl->_assignInScope('cover', "uploads/thumb_".((string)$_smarty_tpl->tpl_vars['article']->value['sn']).".png");
?>
            <!-- 以上變成一個$cover變數 -->
            <?php if (file_exists($_smarty_tpl->tpl_vars['cover']->value)) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['cover']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="rounded cover">
            <!-- alt代表當圖片不存在時 使用文字替代 -->
            <?php } else { ?>
            <img src="https://picsum.photos/400/300?image=<?php echo $_smarty_tpl->tpl_vars['article']->index;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="rounded cover">
            <!-- 沒有對應到封面的話設成假圖 -->
            <!-- cover內容可以到css改 -->
            <?php }?>
            <h3><a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
            <p><?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>
</p>
        </div>
        <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved;
}
} else {
?>

        <h1>尚無內容</h1>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>


<!-- <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['op']->value == "show_article") {?>
        <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>
        <?php } else { ?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'article');
$_smarty_tpl->tpl_vars['article']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->index++;
$__foreach_article_1_saved = $_smarty_tpl->tpl_vars['article'];
?>
        <h3><a href="index.php?snaa=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
        <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_1_saved;
}
} else {
?>

        <h1>尚無內容</h1>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 <?php }?>
    </div>改成以下 -->

        <!-- 在index.php switch裡有設判斷 初始值先跑op_list_article，網址有了數字後再跑op_show_article --><?php }
}
