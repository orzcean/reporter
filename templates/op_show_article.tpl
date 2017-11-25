<div class="container">
    <h1>{$article.title}</h1>
    <p>{$article.content}</p>


    {if isset($smarty.session.username) and $smarty.session.username==$article.username}
    <!-- 如果 $smarty.session.username 和 $article.username(該篇文章登入者) 相等 秀出以下刪除編輯 -->
    <!-- 如果沒有登入時 判斷 isset($smarty.session.username) -->
    <div class="alert alert-info text-center">
        <!-- alert bootstrap4效果 -->
        <a href="admin.php?op=delete_article&sn={$article.sn}" class="btn btn-danger">刪除</a>
        <a href="admin.php?op=modify_article&sn={$article.sn}" class="btn btn-warning">編輯</a>
    </div>
    {/if}


</div>
<!-- //一維陣列語法 -->