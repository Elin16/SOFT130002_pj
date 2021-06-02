}/*
$servername = "127.0.0.1";$username = "username";$password = "password";
$dbname = "artworklab";
// 创建连接
$_mysqli = mysqli_connect('localhost','root','');
mysqli_select_db($_mysqli,$dbname);
if(!$_mysqli){ echo "false";}
$select=' SELECT ';
$column=' * ';
$from=' FROM ';
$tables=' users ';
$where=' WHERE ';
$oder_by=' ORDER BY ';
$binary=' BINARY ';
$username=' name='."'".$_POST['username']."'   ";
$query=$select.$column.$from.$tables.$where.$username.$binary;
$result=mysqli_query($_mysqli, $query);
mysqli_close($_mysqli);
if($result){
    $row=mysqli_fetch_row($result);
    if($_POST['password']==$row[3]){
        session_start();
        $_SESSION['userID']=$row[0];
        echo"<script>success(); history.back(-1);</script>";
    }else{
        echo"<script>failed(); history.back(-1);</script>";
    }
}else{
    echo"<script>failed(); history.back(-1);</script>";
?>*/