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
        <h1 style="color: {$showcolor};">{$titletext} <small>({$time})</small></h1>
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

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>

</html>