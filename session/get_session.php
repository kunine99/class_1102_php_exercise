<?php
//我的瀏覽器對serve發出請求去看瀏覽器的內容
//宣告的內容就會寫到伺服器上
//session的檔案不是存在記憶體是真的船到硬碟上
//後端(伺服器端)在做的事情使用者看不到
session_start();

echo "帳號是".$_SESSION['name'];

echo "<hr>";
echo "學生有:";
echo "<pre>";
print_r($_SESSION['students']);
echo "</pre>";

