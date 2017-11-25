<div class="footer"></div>
<footer class="bg-dark text-white fixed-bottom">
    <!-- fixed-bottom 固定footer在底部 -->
    <div class="container">
        <div class="my-3 d-none d-sm-block">
            <!-- 預設d(display)-none 大於sm的視窗及顯現(block) -->
            以台南社大師生為主體寫作者的《巷集談-街道新聞》，秉持公民素人發聲 、開放以及非營利的宗旨，除希望培力更多公民記者、自由寫手之外，更希望以關注台南市未來城鄉永續發展過程中，保障公民參與審議的權利為精神，成為台南市公民傳播媒體的草根平台。
        </div>
        <div class="my-2 d-block d-sm-none text-center">台南市公民傳播媒體的草根平台</div>
             <!-- 預設d(display)-block 會顯現 但大於sm的視窗及消失 -->
    </div>
</footer>


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
        // var images = ['pic.jpg', 'pic1.jpg'];
        // $('.img-container').css({ 'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')' });

        // var txt = ['大家好', '歡迎光臨'];
        // $('title').text(txt[Math.floor(Math.random() * txt.length)]);
        // 隨機變換標題


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

<!-- 假文產生器js
<script src="js/moretext-1.2.js" type="text/javascript"></script> -->