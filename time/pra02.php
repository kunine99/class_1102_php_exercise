<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算距離自己下一次生日還有幾天</title>
</head>
<body>
<h3>計算距離自己下一次生日還有幾天</h3>
<div>我的生日09-28</div>
<div>下一次的生日2022-09-28</div>
<?php
date_default_timezone_set('Asia/Taipei');
$now=strtotime('now');
$next_bd=(strtotime('2022-09-28')-strtotime('2021-10-25'))/(24*60*60);
echo "$next_bd";
echo "<hr>";
//下面是老師的
    date_default_timezone_set('Asia/Taipei');
    $now=strtotime('now');
    $nextBirthady=strtotime('2022-09-28');
    $gap=($nextBirthady-$now)/86400;

    echo floor($gap)."天";
    echo "<br>";
    //直接/365會得到小數，我們要再把它化為整數
    $year=floor(floor($gap)/365);
    echo $year;
    $month=floor(floor(floor($gap)%365)/30);
    echo $month;
    echo "<br>";
    $days=floor(floor($gap)%365)%30;
    echo $days;
    echo "<br>";
    echo "我的下次生日還有".$year."年".$month."月".$days."天";

    



?>
</body>
</html>