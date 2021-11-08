<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>給定兩個日期，計算中間間隔天數</title>

</head>
<body>
<h1>給定兩個日期，計算中間間隔天數</h1> 
<span>開始日期:2021-10-1</span><br>
<span>結束日期:2021-11-3</span>
<hr>
<?php
//年/月/日 時/分/秒
    // date_default_timezone_set('Asia/Taipei');
    echo date("Y-m-d H:1:s");
    echo "<br>";
    echo "開始的秒數".strtotime('2021-10-25');
    echo "<br>";
    echo "結束的秒數".strtotime('2021-10-27');
    $gapDays=(strtotime('2021-10-27')-strtotime('2021-10-25'))/(24*60*60);
    echo "<br>間隔".$gapDays."天";
    //0時0分0秒 在每個國家有不同定義
    //間隔天數也有不一定的定義(要不要去頭尾)



?>
</html>