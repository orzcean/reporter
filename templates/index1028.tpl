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



    <div class="img-container">
        <div class="container">

            <!-- 導覽列語法 更多樣式http://bootstrap.hexschool.com/docs/4.0/components/navs/ -->
            <nav class="nav">
                <a class="nav-link text-warning pt-3 active" href="index.php">首頁</a>
                <a class="nav-link text-warning pt-3 active" href="gallery.php">圖集</a>
                <a class="nav-link text-warning pt-3 active" href="admin.php">管理</a>
            </nav>

            <!-- 間隔工具的組成為「屬性邊緣-尺寸」，如.m-3、.pt-5、py-1...等。
     屬性設定：m 即 margin（外距），p 即 padding（內距）
     邊緣設定：t（即top）、b（即bottom）、l（即left）、r（即right）、x（即left和right）、y（即top和bottom）、空白則是設定元素的四個邊緣。 尺寸設定：0~5個空白空間。 
     詳情：http://bootstrap.hexschool.com/docs/4.0/utilities/spacing/ -->

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


    <div class="container">
        {foreach $all as $article}
        <h3>{$article.content} </h3>
        {foreachelse}
        <h1>尚無內容</h1>
        {/foreach}


    </div>

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


    <!-- 崁入 -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <!-- 利用jquery可以偵測各種事件，script會比內建的css先決 -->
    <!-- document此事件指的是載入目前的頁面，ready是載入完成的事件，function是函數 -->
    <!-- fuction() {
        執行動作
    } -->
    <script>
        // <!--動態套用某元素樣式值的作法為：$("挑選目標").css('屬性名稱', '值'); -->
        $(document).ready(function () {
            $('.img-container').css('width', $(window).width());
            $('.img-container').css('height', $(window).height());
            //    這裡的值的作用是讓圖變成滿版：動態偵測視窗的寬、高值的作法為：$(window).width();  $(window).height();
        });
        // 若視窗大小有調整一樣要維持滿版的話，則事件為：
        $(window).resize(function () {
            $('.img-container').css('width', $(window).width());
            $('.img-container').css('height', $(window).height());
        });
    </script>

    <!-- 假文產生器js -->
    <script src="js/moretext-1.2.js" type="text/javascript"></script>




</body>

</html>