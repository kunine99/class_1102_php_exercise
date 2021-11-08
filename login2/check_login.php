<?php
session_start();
$acc='Amy';
$pw='1234';

if($acc==$_POST['acc'] && $pw==$_POST['pw']){
    $_SESSION('user',$_POST['acc'],time()+36000);
   //從cookie換成session
    header("location:mem_center.php");
}else{
   
    header("location:index.php?status=err");

}




// if($acc==$_POST['acc'] && $pw==$_POST['pw']){
//     setcookie('user',$_POST['acc'],time()+36000);
//     // 我就要把這個資訊告訴我的session有人登入成功了
//     //=0表示登入成功 =1表示登入失敗
//     //$_SESSION['user']=$_POST['acc'];
//     // 如果成功要等到使用者
//     //導航、導向

//         //$_SESSION['user']=$_POST['acc'];

//     // 登入成功就到會員中心
//     header("location:mem_center.php");
// }else{
//     //只做一次傳輸會用get的方式
//     //失敗就到
//     header("location:index.php?status=err");
//     // 問號前面是路徑
// }





