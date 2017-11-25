<?php
/* Smarty version 3.1.30, created on 2017-11-22 14:02:57
  from "F:\bonphp\UniServerZ\www\reporter\templates\index1109.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1583917d9d57_58933993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '368b26cf390002bc87c16f0ecdb79a6b18ce402a' => 
    array (
      0 => 'F:\\bonphp\\UniServerZ\\www\\reporter\\templates\\index1109.tpl',
      1 => 1510988948,
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
function content_5a1583917d9d57_58933993 (Smarty_Internal_Template $_smarty_tpl) {
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

    <div class="img-container">
        <div class="container">


            <!-- 間隔工具的組成為「屬性邊緣-尺寸」，如.m-3、.pt-5、py-1...等。
     屬性設定：m 即 margin（外距），p 即 padding（內距）
     邊緣設定：t（即top）、b（即bottom）、l（即left）、r（即right）、x（即left和right）、y（即top和bottom）、空白則是設定元素的四個邊緣。 尺寸設定：0~5個空白空間。 
     詳情：http://bootstrap.hexschool.com/docs/4.0/utilities/spacing/ -->
            <div class="shadow">
                <h1 class="text-white pt-3">巷集談-街道新聞</h1>
                <!-- col－斷點(不同媒介的閱讀方式)－寬度(欄位的寬度) -->
                <!-- 寬度有12欄數值通常設1~12，也可設auto，或都不設 -->
                <!-- 斷點設 xs(或不寫) 代表螢幕等同於手機直立的狀態，內容會上下分行
                斷點設 sm 代表螢幕大於等於576px時(手機拿橫的看時的狀態)，有寫的話大於此螢幕寬度時內容會左右分行
             *斷點設 md 代表螢幕大於等於768px時(平板直的狀態)
             斷點設 lg 代表螢幕大於等於922px時(平板衡的狀態)
            斷點設x1代表螢幕大於等於1200px(一般桌機)
            -->
                <div class="row">
                    <!-- row就是bootstrap裡設定隱藏欄位的語法，一定要放在container底下 -->
                    <div class="col-sm-6 col-md-8">
                        <!-- 設數值6會分兩欄 6+6=12 所以sm手機橫式的狀態會是兩欄 -->
                        <p class="text-white pt-2">「臺南公民智庫」是一個全新的概念，有效地運用社大的公民教育場域、加上民間NGO、專業學者，成為一個具有研究與提供思考與政策方向的機構，並兼具有行動力及參與城市運作的社會機能。</p>
                    </div>
                </div>
            </div>
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
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
        <h3><a href="index.php?snaa=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
        <?php
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
    <?php $_smarty_tpl->_subTemplateRender("file:op_".((string)$_smarty_tpl->tpl_vars['op']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <!-- 在index.php switch裡有設判斷 初始值先跑op_list_article，網址有了數字後再跑op_show_article -->


    <!--         
        foreach $來源 as $別名 
        $別名.索引 
        foreachelse 
        該變數沒有值時要出現的內容 
        /foreach -->






    <!-- 假文產生器文章
    <div class="container">
        <h1 class="text-black my-2">
            <p class="lipsum(1,5-10)"></p>
        </h1>
        <p class="lipsum(3,20-50)"></p>
        <p class="lipsum(5,80-100)"></p>
        <p class="lipsum(4,80-100)"></p>
        <p class="lipsum(2,40-50)"></p>
    </div> -->


    </div>



    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</body>

</html><?php }
}
