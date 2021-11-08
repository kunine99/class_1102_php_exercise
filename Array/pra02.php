<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>利用程式來產生陣列</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>利用程式來產生陣列</h1>
    <h2>建立陣列練習</h2>
<?php
$nine=[];

for($j=1;$j<=9;$j++){

    for($i=1;$i<=9;$i++){
        $nine[]="$j x $i =" . ($j*$i);
    }
}

echo "<pre>";
print_r($nine);
echo "</pre>"

?>
   <h2>建立陣列練習2</h2>

<?php
echo "<hr>";
$nine=[];

for($j=1;$j<=9;$j++){

    for($i=1;$i<=9;$i++){
        $nine[]="$j x $i =" . ($j*$i)."<br>";
    }
}

// echo "<pre>";
// print_r($nine);
// echo "</pre>"
for($i=0;$i<count($nine);$i++){
    echo $nine[$i];
}


?>
  <h2>建立陣列練習3</h2>
<?php
echo "<hr>";
$nine=[];

for($j=1;$j<=9;$j++){

    for($i=1;$i<=9;$i++){
        $nine[]="$j x $i =" . ($j*$i);
    }
}


for($i=0;$i<count($nine);$i++){
    echo $nine[$i];
    // 當餘數==0時段行
    //現在是9沒有錯，若改成8會變成在8的位置段行
    if($i%9==0){
        echo "<br>";
    }
}
?>
  <h2>建立陣列練習4</h2>
<?php
echo "<hr>";
$nine=[];

for($j=1;$j<=9;$j++){

    for($i=1;$i<=9;$i++){
        $nine[]="$j x $i =" . ($j*$i);
    }
}


for($i=0;$i<count($nine);$i++){
    echo $nine[$i];
    if($i%9==8){
        echo "<br>";
    }
}
// 也可以
// for($i=0;$i<count($nine);$i++){
//     echo $nine[$i];
//     if($i+1)%9==0{
//         echo "<br>";
//     }
// }
?>


</body>
</html>