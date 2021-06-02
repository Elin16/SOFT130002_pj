<?php
session_start();
if(isset($_SESSION['userID'])){
    $json['logged']=true;
}else $json['logged']=false;
echo json_encode(array('logged' => 'true', 'userID' => $_SESSION));
//echo json_encode($json);

