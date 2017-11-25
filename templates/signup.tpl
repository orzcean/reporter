<!doctype html>
<html lang="zh-Hant-TW">


<head>
    {include file="header.tpl"}
</head>

<body>


    {include file="nav.tpl"}
    <!-- 導覽列樣板檔引入 -->
    <div class="img-container">
        <div class="container">


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

            <!-- row就是bootstrap裡設定隱藏欄位的語法，一定要放在container底下 -->
            <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
                <h2 class="text-info" class="form-signup-heading">Register</h2>
                <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Username" autofocus>
                <input name="email" id="email" type="text" class="form-control" placeholder="Email">
                <br>
                <input name="password1" id="password1" type="password" class="form-control" placeholder="Password">
                <input name="password2" id="password2" type="password" class="form-control" placeholder="Repeat Password">

                <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

                <div id="message"></div>
            </form>
        </div>
    </div>
    </div>







    </div>


    {include file="footer.tpl"}
    <script src="js/signup.js"></script>


    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script>
        $("#usersignup").validate({
            rules: {
                email: {
                    email: true,
                    required: true
                },
                password1: {
                    required: true,
                    minlength: 4
                },
                password2: {
                    equalTo: "#password1"
                }
            }
        });
    </script>


</body>

</html>