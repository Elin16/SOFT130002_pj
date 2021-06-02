<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>My Collections</title>
    <link type="text/css" rel="stylesheet" href="../cssstyle/css/global.css">
    <link type="text/css" rel="stylesheet" href="../cssstyle/collection.css">
    <script type="text/javascript">
        function confirmDelete(){
            return confirm("确认取消收藏该商品？");
        }
        function deleteCol(blockid) {
            var x = document.getElementById(blockid);
            if (x != null) console.log("sss"); else console.log("ddd");
            x.innerHTML = "";
        }
    </script>
</head>
<body id="allcontent">
<div id="footprints" class="button"></div>
<header id="top">
    <div id="sign">
        <span id="logo">Art Store</span>
        <span id="slogan">Where you find <em>genius</em> and <em>extroordinary</em> </span>
    </div>
    <nav>
        <button><a href="homepage.php" class="button" id="home">home</a></button>
        <button><a href="search.php" class="button" id="search">search</a></button>
        <form>
            <input type="text" placeholder="Search in my collections">
            <button type="submit">search</button>
        </form>
    </nav>
</header>
<main id="main">
    <div id="slidebar">
        <?php
            session_start();
            include_once("../php/connect.php");
            $query="SELECT artworkID FROM wishlist WHERE userID='".$_SESSION['userID']."'";
            $query="SELECT * FROM users WHERE userID='".$_SESSION['userID']."'";
            $result=mysqli_query($_mysqli,$query);
            $row=mysqli_fetch_row($result);
            echo'
            <div>Account :'.$row[1].'  ;</div>
            <div>Email : '.$row[2].' ;</div>
            <div>Address :'.$row[5].' ; </div>
            <div>Tel :'.$row[4].' ;</div>';
        ?>
        
    </div>
    <div id="blocks_col">
        <div id="subtitle">My collections</div>
    <?php 

    include_once("../php/connect.php");
    $query='SELECT * FROM wishlist WHERE userID="'.$_SESSION['userID'].'"';
    $result=mysqli_query($_mysqli,$query);
    while($row=mysqli_fetch_row($result)){
        $query='SELECT * FROM artworks WHERE artworkID="'.$row[2].'"';
        $re=mysqli_query($_mysqli,$query);
        $row2=mysqli_fetch_row($re);
        pre_collection($row2);
    }
    function pre_collection($rowi){
        echo '
        <div class="block" id="clo'.$rowi[0].'">
            <div class="figure">
                <img src="../resources/img/'.$rowi[2].'" width="280" height="320" alt="A painting ">
            </div>
            <div class="figcap intro">
                <p class="title">'.$rowi[3].'</p>
                <p class="artist"><a class="athbut" href="search.php">'.$rowi[1].'</a></p>
                <p class="style">Style : '.$rowi[6].'</p>
                <p class="addTime">Release Time : '.$rowi[13].'</p>
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
   </div>
    </div>
</main>
<footer>
        <?php include_once('../php/footer.php'); ?>
</footer>
</body>
<script src="footprint.js"></script>
<?php include_once("../php/add_artwork.php"); ?>
</html>