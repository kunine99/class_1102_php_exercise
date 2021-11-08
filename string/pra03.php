<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>子字串取用</title>
</head>
<body>
<h1>子字串取用</h1>
<h3>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</h3>
<?php
  $str='The reason why a great man is great is that he resolves to be a great man”只取前十字成為';  
$sub=substr($str,0,10);
echo "<br>";
echo $sub . "...";
echo "<br>";
echo $sub . str_repeat(".",3);

$str="今年最強震 宜蘭6.5撼動全台 隱沒帶觸發地震 未來3天餘震恐達4.0以上";
$sub=mb_substr($str,0,4);
echo "<br>";
echo $sub . "~分隔字~";
echo "<br>";
echo $sub . str_repeat(".",3);


?>
</body>
</html>