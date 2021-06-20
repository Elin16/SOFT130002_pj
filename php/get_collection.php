<?php
    include_once("../php/connect.php");
    $query='SELECT * FROM wishlist WHERE userID="'.$_SESSION['userID'].'"';
    $result=mysqli_query($_mysqli,$query);
    while($row=mysqli_fetch_row($result)){
        $query='SELECT * FROM artworks WHERE artworkID="'.$row[2].'"';
        $re=mysqli_query($_mysqli,$query);
        $row2=mysqli_fetch_row($re);
        pre_collection($row2,$row[3]);
    }
    function pre_collection($rowi,$addTime){
        echo '
        <div class="block" id="clo'.$rowi[0].'">
            <div class="figure">
                <img src="../resources/img/'.$rowi[2].'" width="280" height="320" alt="A painting ">
            </div>
            <div class="figcap intro">
                <p class="title"><a href="presentation.php?artworkID='.$rowi[0].'">'.$rowi[3].'</a></p>
                <p class="artist"><a class="athbut" href="search.php">'.$rowi[1].'</a></p>
                <p class="style">Style : '.$rowi[6].'</p>
                <p class="addTime">Add Time : '.$addTime.'</p>
                <p class="descreption">'.$rowi[4].'</p>
                <form onsubmit="return confirmDelete();" method="post" ">
                <input name="removeCollectionArtworkID" style="display: none" value="'.$rowi[0].'">
                <button type="submit" class="deleteBut">delete</button>
                </form>
            </div>
        </div>
        ';
    }
?>