<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>建立陣列練習</title>
    <link rel="stylesheet" href="style.css">
    <style>
       h1{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>建立陣列練習</h1>
<?php
$name=[];
$subject=['國文','英文','數學','地理','歷史'];
// <pre>再住兩個標籤之間的東西都會以他原始的格式出現
// pre就是保留它原本的屬性呈現 比如br就會斷行 
// judy是值不是key
// 另一個寫法$name['judy']=['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84];
//兩種寫法沒有高低，上面是表意清楚但資料量較大
$name['judy']=[95,64,70,90,84];
$name['amo']=[88,78,54,81,71];
$name['john']=[45,60,68,70,62];
$name['pete']=[59,32,77,54,42];
$name['hebe']=[71,62,80,62,64];

echo "<pre>";
print_r($name);
print_r($subject);
echo "<pre>";

print_r ($name['judy']);
echo "judy的數學成績為" .$name['judy'][2]."分";

echo "<hr>";
?>
<h1> 建立陣列練習2 </h1>
<?php


$name['judy']=['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84];
$name['amo']=['國文'=>88,'英文'=>78,'數學'=>54,'地理'=>81,'歷史'=>71];
$name['john']=['國文'=>45,'英文'=>60,'數學'=>68,'地理'=>70,'歷史'=>62];
$name['pete']=['國文'=>59,'英文'=>32,'數學'=>77,'地理'=>54,'歷史'=>42];
$name['hebe']=['國文'=>71,'英文'=>62,'數學'=>80,'地理'=>62,'歷史'=>64];


echo "<pre>";
print_r($name);
echo "<pre>";


print_r($name['judy']);

$students=array_keys($name);

echo "<pre>";
print_r($students);

echo "</pre>";

$subject=array_keys($name['judy']);
echo "<pre>";
print_r($subject);

echo "</pre>";
 echo "judy的數學成績為".$name['judy']['數學']."分"
?>

<?php
// $a=['國文','英文','數學','地理','歷史'];
// ['judy',95,64,70,90,84];
// ['amo',88,78,54,81,71];
// ['john',45,60,68,70,62];
// ['peter',59,32,77,54,42];
// ['hebe',71,62,80,62,64];
?>


</body>
</html>
