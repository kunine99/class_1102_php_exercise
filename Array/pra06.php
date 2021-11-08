<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉

</title>
</head>
<body>
<h1>反轉陣列</h1>
<h2></h2>
<?php
//例：$a=[2,4,6,1,8]    反轉後    $a=[8,1,6,4,2]
$a=[2,4,6,1,8];
echo "<pre>";
print_r($a);
echo "</pre>";
?>
<hr>

<?php
$a=[2,4,6,1,8];
echo "<pre>";
print_r($a);
echo "</pre>";
$count=(count($a)%2==0)? count($a)/2 : (count($a)-1)/2 ;
for($i=0;$i<count($a);$i++){
    // 隨便取的變數用佔存
    $t=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$t;
}
echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
print_r($a);
echo "<pre>";

?>
<hr>

<?php
$a=[2,4,6,1,8];
echo "<pre>";
print_r($a);
echo "</pre>";
$count=(count($a)%2==0)? count($a)/2 : (count($a)-1)/2 ;
for($i=0;$i<count($a);$i++){
    // 隨便取的變數用佔存
    $t=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$t;
}
echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
print_r($a);
echo "<pre>";

?>
</body>
</html>