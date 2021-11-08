<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
<!-- 在table+padding=是在最外圍的地方加框線 -->
<style>
    table{
        width:500px;
        margin:auto;
        padding:20px;
        border:1 px solid red;
    }
    td{
            padding:5px;
            text-align: center;
            border:1px solid black;
        }
</style>


</head>
<body>
    <h1>線上月曆</h1>
    <?php
    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";

    echo "</tr>";
//先用date去查第一天是星期幾

//決定要跑幾星期  第一個for
for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        //只有第一周會從星期五開始
        //周五以前的
        if($i==0 && $j < 5)
        echo "<td>";
        echo $i*7+$j+1;
        echo "</td>";
        }

echo "</tr>";
}
echo "</table>";


?>

<?php
    $firstDay=date("Y-m-01");
    $month=date("m");
    $firstWeekWhiteDay=date("w",strtotime($firstDay));
    //$firstWeekfirstDay當月當周的第一天也可以說是當周空白的天數
    //$firstWeekfirstDay改成firstWeekWhiteDay
    echo "firstday".$firstDay;
    echo "<br>";
    echo "month".$month;
    echo "<br>";
    echo "firstWeekWhiteDay".$firstWeekWhiteDay;
    echo "<br>";
    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    
    echo "</tr>";
    for($i=0;$i<6;$i++){//決定當月有幾周
        echo "<tr>";
        //$whiteDay=;
        for($j=0;$j<7;$j++){
            if(($i==0 && $j <$firstWeekWhiteDay) || ($i==$firstWeekWhiteDay && $j>0)){
                echo "<td>";
                echo "&nbsp;";
                echo "</td>";

            }else{

                echo "<td>";
                echo $i*7+$j+1-$firstWeekWhiteDay;
                echo "</td>";
            }


        }
        echo "</tr>";   
    }
    echo "</table>";
    ?>
</body>
</html>