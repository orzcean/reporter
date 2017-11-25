<script src="ckeditor/ckeditor.js"></script>

<form action="admin.php" method="post" enctype="multipart/form-data">
    <!-- 有file欄位時必加語法enctype="multipart/form-data" -->
    <div class="form-group">
        <label for="title" class="col-form-label text-white">文章標題</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="請輸入文章標題">
    </div>
    <div class="form-group">
        <label for="content" class="col-form-label text-white">文章內容</label>
        <textarea name="content" id="content" rows="20" class="form-control" placeholder="請輸入文章內容"></textarea>
    </div>
    <div class="form-group">
        <label for="title" class="col-form-label text-white">封面圖</label>
        <input type="file" class="form-control" name="pic" id="pic" placeholder="請上傳一張封面圖">
    </div>
    <div class="text-center">
        <input type="hidden" name="op" value="insert">
        <input type="hidden" name="username" value="{$smarty.session.username}">
        <button type="submit" class="btn btn-primary">儲存</button>
    </div>
</form>

<script>
    CKEDITOR.replace('content');
// 對應到上面的id=content，所以會顯現出ckeditor

</script>