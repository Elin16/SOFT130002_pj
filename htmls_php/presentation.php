<!DOCTYPE <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
       <head>
              <meta charset="utf-8">
              <title>Detials of artwork</title>
              <link type="text/css" rel="stylesheet" href="../cssstyle/css/global.css">
              <link type="text/css" rel="stylesheet" href="../cssstyle/presentation.css">
              <script>
                     function addToCollections(){
                            confirm("添加成功!");
                     }
                     function confirmDelete(){
                            return confirm("确认取消收藏该商品？");
                     }
              </script>
       </head>
       <body id="allcontent">
              <div id="footprints" class="button"></div>
              <header id="top">
			<div id="sign">
				<span id="logo">Art Store</span>
				<span id="slogan">Where you find <em>genius</em> and <em>extroardinary</em> </span>
			</div>
			<nav>
                 <?php include_once('../php/nav.php'); ?>
            </nav>
		</header> 
              <main id="main">
       
<?php     
              include_once("../php/query_artwork.php");
              echo '
               <div id="present">
              <div class="figure">
                     <img src="../resources/img/'.$row[2].'" alt="A painting " >
              </div>
              <div class="figcap">
                     <p class="title">'.$row[3].'</p>
                     <p class="artist"><a class="athbut" href="search.php">'.$row[1].'</a></p>
                     <p class="descreption">
                            '.$row[4].'
                     </p><br>
                     <p><span class="yearOfWork tinfo">Year: </span><span class="info">'.$row[5].'</span>
                     <br><span class="style tinfo">Style: </span><span class="info">'.$row[6].'</span>
                     <br><span class="widthnheight tinfo">Dimensions: </span><span class="info">'.$row[7].' cm x '.$row[8].' cm</span>
                     <br><span class="price tinfo">Price: </span><span class="info">'.$row[9].' USD</span>
                     <br><span class="view tinfo">View: </span><span class="info">'.$row[10].'</span></p>
                     <br></p>
                     <form method="post" id="addCollection" >
                     <input type="text" name="addCollectionArtworkID" style="display:none" value="'.$row[0].'">
                     <button type="submit" class="button">Add to my collections</button>
                     </form>
                     <form method="post" id="removeCollection" class="invisible" onsubmit="return confirmDelete()">
                     <input type="text" name="removeCollectionArtworkID" style="display:none" value="'.$row[0].'">
                     <button type="submit" class="button" >Remove from my collections</button>
                     </form>
              </div>'
?>                   
       </main>
       <footer>
              <?php include_once('../php/footer.php'); ?>
       </footer>     
       </body>
       <script src="footprint.js"></script>
       <?php include_once("../php/add_artwork.php"); ?>
</html>