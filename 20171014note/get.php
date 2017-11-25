
<?php
$title = $_GET['yuki'];
echo $title;
//GET的傳遞方式，透過網址列來傳遞參數
// localhost/reporter/筆記/note.php?yuki=123 會顯示出123
//有加[]表示陣列，表示可以放很多值
//顯示string(數字) 代表接收到的是幾位數的字串

echo "<br>";

var_dump($_GET['money']);
//()為函數，有特定的功能在
