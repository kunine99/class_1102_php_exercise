<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串取代</title>
</head>
<body>
    <h1>字串取代</h1>
    <h3>將”aaddw1123”改成”*********”</h3>
    <?php
//str_replace ( $searchVal, $replaceVal, $subjectVal, $count )
//$searchVal 指定要搜索和替換的字符串,可以是iam 或是符號之類的;可以接受陣列
//$replaceVal 指定我們要用來替換$searchVal字符串的字符串;可以接受陣列，但必須要相互對印
//$subjectVal 指定我們要搜索$searchVal並替換為$replaceVal的字符串或字符串數​​組。
//$count 此參數是可選參數，如果傳遞，則其值將設置為對字符串$subjectVal執行的替換操作的總數。

//下方是自己嘗試的
// $subjectVal  = "aaddw1123";
// str_replace('a', '*', 9);
// echo "$subjectVal";

// 最常使用，因為只要寫一行而已
$str='aaddw1123';
echo str_repeat("*",strlen($str));

// 被取代，用什麼取代他
echo "<hr>";
//另一個方法str_replace ( $searchVal, $replaceVal, $subjectVal, $count )
echo str_replace ( 'aaddw1123', '*********', $str);

echo "<hr>";
echo str_replace ( ['a', 'd','w','1','2','3',] , '*' , $str);

echo "<hr>";

$array=[];
for($i=0;$i<strlen($str);$i++){
// echo $str[$i];)
$s=substr($str,$i,1);
if(!in_array($s,$array)){
    $array[]=$s;
}}
echo str_repalce($array,'*',$str);


?>
</body>
</html>