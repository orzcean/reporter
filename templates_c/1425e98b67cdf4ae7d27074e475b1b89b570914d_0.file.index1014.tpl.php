<?php
/* Smarty version 3.1.30, created on 2017-10-24 10:06:35
  from "F:\bonphp\UniServerZ\www\reporter\templates\index1014.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ef029b56aeb8_19919989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1425e98b67cdf4ae7d27074e475b1b89b570914d' => 
    array (
      0 => 'F:\\bonphp\\UniServerZ\\www\\reporter\\templates\\index1014.tpl',
      1 => 1508835988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ef029b56aeb8_19919989 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--打B4可以直接顯示出以下BOOTSTRAP4-->

<!doctype html>
<html lang="zh-Hant-TW">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>頁面標題</title>
    <!--第一個為BOOTSTRAP4語法-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/my.css">



</head>

<body>



    <div class="img-container"></div>














    <!--BOOTSTRAP4內建的CONTAINER-->
    <div class="container">
        <!--變數titletext功能為由使用者自行輸入標題，但要有此功能要去php裏頭設定}-->
        <h1 style="color: <?php echo $_smarty_tpl->tpl_vars['showcolor']->value;?>
;"><?php echo $_smarty_tpl->tpl_vars['titletext']->value;?>
 <small>(<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
)</small></h1>
        <!--打b4-form-group會自動顯示以下，說明在影片IMG_2080-->
        <form action="index1014.php" method="post">
            <!--關鍵字搜尋才用GET，除此之外都是用POST(網址會較乾淨也沒有流量的限制)-->
            <div class="form-group">
                <label for="title">文章標題</label>
                <!--label包住的部分為表單標題，for後面認的是id，功能在於點表單標題游標會自動跳到表單-->
                <input type="text" name="typetitle" id="title" class="form-control" placeholder="" aria-describedby="helpId">
                <!--name後面即為php裡$_POST['typetitle']，id為辨識用-->
                <small id="helpId" class="text-muted">Help text</small>
                <!--說明-->
            </div>
            <div class="form-group">
                <label for="color">標題顏色</label>
                <input type="color" name="changecolor" id="color" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <!--打b4-form-submit-->
            <button type="submit" class="btn btn-primary">送出</button>




        </form>





    </div>

    <?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>


</body>

</html><?php }
}
