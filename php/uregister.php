<?php
$servername = "127.0.0.1";
$username = "username";
$password = "password";
$dbname = "artworklab";
// 创建连接
$_mysqli = mysqli_connect('localhost','root','');
mysqli_select_db($_mysqli,$dbname);
$select=' SELECT ';
$column=' * ';
$form=' FROM ';
$tables=' users ';
$where=' WHERE ';
$username=' name='."'".$_POST['username']."'   ";
$query=$select.$column.$form.$tables.$where.$username;
$result=mysqli_query($_mysqli, $query);
if($result){
    $flag=1;
}else{//插入数据
    
}
mysqli_close($_mysqli);
