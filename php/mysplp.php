<?php
include_once("connect.php");
session_start();
$select=' SELECT ';
$column=' * ';
$form=' FROM ';
$tables=' artworks ';
$where=' userID='.$_SESSION['userID'];
$oder_by=' ORDER BY ';
$privilege=' view ';
$query=$select.$column.$form.$tables;//.$where;//.$oder_by."  ".$privilege."DESC";
$result=mysqli_query($_mysqli, $query);
if($result){
    $tables=' artworks';
    $artwork=mysqli_query($_mysqli,$query);
    while($row=mysqli_fetch_row($result)){
        echo $row[0]," ",$row[1],"<br>";
    }
    mysqli_close($_mysqli);
}else{
    echo '
    <p>
    No collection for now.
    </p>
    ';
}
?>