<?php
function getImgInfo($x){	//似乎引用不了？是否应该使用外部连接？
        include_once("../php/connect.php");	
        $query="SELECT * FROM artworks ORDER BY view DESC";
        $result=mysqli_query($_mysqli,$query);
        for($i=0;$i<5;++$i){
                $row=mysqli_fetch_row($result);
                echo '"../resources/img/'.$row[$x].'" ';
                if ($i==4) echo '';
                else echo ',';
                }
}	
?>