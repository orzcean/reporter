<div class="container">
    {foreach $all as $article}
    <!-- foreach為二維陣列語法，$all為抓取所有二維陣列[0][1]..，後面的$article即為二維裡的一維陣列[sn][title][content]... -->
    <h3><a href="index.php?snaa={$article.sn}">{$article.title}</a></h3>
    <!-- 秀出所有二維陣列裡的[title]到樣板檔 -->
    <!-- <a href="index.php?snaa={$article.sn}">{$article.title}</a> 這裡已經會自動對應網址的snaa=1 即為資料庫欄位sn1的title，也就是{$article.sn=1}={$article.title=001}(如果資料庫sn1的title使用者是儲存為001的話)，以此列推下去，只是還沒有辦法在各個 snaa=數字 裡的頁面產生東西，因為還沒去資料庫撈其他欄位出來。 -->
    {foreachelse}
    <h1>尚無內容</h1>
    {/foreach}
</div>
<!-- 此語法是還沒有點連結進去會顯示所有標題 -->