<?php

        $_GET['artworkID']="19";
        include_once("connect.php");
        $query='SELECT * FROM artworks WHERE '.' artworkID="'.$_GET['artworkID'].'"';
        ///$query=$select.$column.$form.$tables;//.$where;//.$oder_by."  ".$privilege."DESC";
        $result=mysqli_query($_mysqli, $query);
        $row=mysqli_fetch_row($result);
        echo $row[0]." ;".$row[1].";".$row[2];
?>