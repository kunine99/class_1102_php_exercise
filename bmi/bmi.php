<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算結果</title>
</head>
<body>
    <?php
$bmi=$_GET['weight']/($_GET['height']/100)*($_GET['height'])
echo "你的BMI值為:".$bmi;
if($bmi>=18.5 && $bmi<24){
    echo "你的bmi為:".$bmi;
}else{
    echo "經判斷為異常";
}
?>
<a href="index.php?bmi=<?=$bmi;?>">回首頁</a>
</body>
</html>