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
        {foreach $all as $article}
        <div class="col-sm-4">
            {assign var="cover" value="uploads/thumb_`$article.sn`.png"}
            <!-- 以上變成一個$cover變數 -->
            {if file_exists($cover)}
            <img src="{$cover}" alt="{$article.title}" class="rounded cover">
            <!-- alt代表當圖片不存在時 使用文字替代 -->
            {else}
            <img src="https://picsum.photos/400/300?image={$article@index}" alt="{$article.title}" class="rounded cover">
            <!-- 沒有對應到封面的話設成假圖 -->
            <!-- cover內容可以到css改 -->
            {/if}
            <h3><a href="index.php?sn={$article.sn}">{$article.title}</a></h3>
            <p>{$article.summary}</p>
        </div>
        {foreachelse}
        <h1>尚無內容</h1>
        {/foreach}
    </div>
</div>


<!-- <div class="container">
        {if $op=="show_article"}
        <h1>{$article.title}</h1>
        <p>{$article.content}</p>
        {else} {foreach $all as $article}
        <h3><a href="index.php?snaa={$article.sn}">{$article.title}</a></h3>
        {foreachelse}
        <h1>尚無內容</h1>
        {/foreach} {/if}
    </div>改成以下 -->

        <!-- 在index.php switch裡有設判斷 初始值先跑op_list_article，網址有了數字後再跑op_show_article -->