<?php
session_start();
// 記得要加底線
// 只要加了底線大多都是系統預設變數
// 為了避免跟系統預設變數衝突所以我們有時會直接打不加_
$_SESSION['name']='Joyce';

echo $_SESSION['name'];

$_SESSION['students']=['入間','魯夫','阿銀'];
?>