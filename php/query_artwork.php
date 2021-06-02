<?php
        $str=$_SERVER["QUERY_STRING"];       
        $start=strcspn($str,"=");
        $artworkID=substr($str,$start+1);       
        $_GET['artworkID']=$artworkID;
        //$artworkID=$_GET['artworkID'];
        include_once("connect.php");
        $query='SELECT view FROM artworks WHERE '.' artworkID="'.$artworkID.'"';
        $result=mysqli_query($_mysqli, $query);
        if(!$result) echo "false";
        $row=mysqli_fetch_row($result);
        $view=$row[0]+1;
        ///echo $row[1]." ".$row[2]." ".$row[3];
        $query='UPDATE artworks SET view="'.$view.'" WHERE artworkID="'.$artworkID.'"';
        mysqli_query($_mysqli,$query);
        $query='SELECT * FROM artworks WHERE '.' artworkID="'.$artworkID.'"';
        $result=mysqli_query($_mysqli, $query);
        if(!$result) echo "false";
        $row=mysqli_fetch_row($result);
?>