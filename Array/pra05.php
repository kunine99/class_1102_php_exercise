<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。</title>
</head>
<body>
<h1>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。</h1>
<h2>先把儲存的陣列產生出來</h2>
<?php
//1984 甲子年
$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸',];
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥',];
// 把那60個站存到陣列裡
$zodiac=[];
for($i=0;$i<60;$i++){
    // 得到天干
    $zodiac[]=$sky[$i%10] . $land[$i%12];
}
echo "<pre>";
print_r($zodiac);
echo "<pre>";
?>

<h2>繼續做下去</h2>
<?php
echo "<hr>";
//1984 甲子年
$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸',];
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥',];
// 把那60個站存到陣列裡
$zodiac=[];
for($i=0;$i<60;$i++){
    // 得到天干
    $zodiac[]=$sky[$i%10] . $land[$i%12];
}

echo "<pre>";
print_r($zodiac);
echo "</pre>";
$tt=[];
for($i=0;$i<60;$i++){
    $tt[1984+$i]=$zodiac[$i];

}
echo "<pre>";
print_r($tt);
echo "</pre>";

echo $tt['2021'] . '年';
?>

</body>
</html>