<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>威力彩電腦選號沒有重覆號碼</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>威力彩電腦選號沒有重覆號碼</h1>
<h2>威力彩電腦選號沒有重覆號碼1用for</h2>
<?php
// $OO=rand(起始數字,結束數字);echo $cc;
$nums=[];
for($i=0;$i<6;$i++){
    $t=rand(1,38);
    if(!in_array($t,$nums)){
    //!是否定
     $nums[]=$t;
    }
   
}
echo "<pre>";
print_r($nums);
echo "<pre>";

?>

<h2>威力彩電腦選號沒有重覆號碼2用while</h2>
<?php
// $OO=rand(起始數字,結束數字);echo $cc;
$nums=[];
$i=0;

while(count($nums)<6){
    $t=rand(1,38);
    if(!in_array($t,$nums)){
        $nums[]=$t;
    }
    $i++;
}
echo "<pre>";
print_r($nums);
echo "<pre>";
echo "迴圈次數:".$i;
// $score=10;
// while($score<60){
//     $score=$score+10;}
// echo $score;

?>

<h2>威力彩電腦選號沒有重覆號碼3用while foreach顯示</h2>
<?php
// $OO=rand(起始數字,結束數字);echo $cc;
$nums=[];
$i=0;

while(count($nums)<6){
    $t=rand(1,38);
    if(!in_array($t,$nums)){
        $nums[]=$t;
    }
    $i++;
}
// echo "<pre>";
// print_r($nums);
// echo "<pre>";
echo "迴圈次數:".$i;
echo "<hr>";
foreach($nums as $num){
    echo "<div class='ball'>".$num ."</div>";
}
echo "<br>";
echo "<div class='ball'>".rand(1,8)."</div>";
?>
</body>
</html>