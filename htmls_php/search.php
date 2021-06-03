<!DOCTYPE html>
<html>
       <head>
              <meta charset="utf-8">
              <title>search in Art Store</title>
              <link type="text/css" rel="stylesheet" href="../cssstyle/css/global.css">
              <link type="text/css" rel="stylesheet" href="../cssstyle/result.css">
              <link type="text/css" rel="stylesheet" href="../cssstyle/search.css">
       </head>
       <body id="allcontent">
              <!--[if lt IE 7]>
                     <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
              <![endif]-->
              <div id="footprints" class="button"></div>
              <header id="top">
                     
			<div id="sign">
				<span id="logo">Art Store</span>
				<span id="slogan">Where you find <em>genius</em> and <em>extroordinary</em> </span>
			</div>
			<nav>
                            <?php include_once("../php/nav.php");?>
                     </nav>
		</header>
              <main id="main">
              
              <form method="get" id="searchForm">
                     <input type="text" name="keyword" placeholder="Search for artworks/ artists/ styles ...">
                     <button type="submit">search</button>
              </form >
              <form method="post" id="selectForm">
                     <input type="radio" name="select" value="view" >view<br>
                     <input type="radio" name="select" value="price">price<br>
                     <input type="radio" name="select" value="yearOfWork">year of work<br>
                     <input type="radio" name="select" value="artist">artist<br>
                     <input type="submit">
              </form>
              <div id="results">
              <?php
              include_once("../php/add_artwork.php");
              include_once("../php/connect.php");    
              //if(isset($_POST['select'])){echo"therre";}
              if(isset($_POST['select'])&&isset($_GET['keyword'])){
                     $order=" ORDER BY ".$_POST['select'];
                     $keyword=$_GET['keyword'];      
                     $flag=0;
                     $flag=mysqlQuery("title",$keyword,$order)|mysqlQuery("yearOfWork",$keyword,$order);
                     $flag|=mysqlQuery("artist",$keyword,$order)|mysqlQuery("genre",$keyword,$order);
                     if($flag==false) echo '<p id="subtitle">
                     No results for now...
                     </p>';
              } else 
              if(isset($_GET['keyword'])){
                    // $_POST['resultKeyword']=$_POST['keyword'];
                     $keyword=$_GET['keyword'];      
                     $flag=0;
                     $flag=mysqlQuery("title",$keyword)|mysqlQuery("yearOfWork",$keyword);
                     $flag|=mysqlQuery("artist",$keyword)|mysqlQuery("genre",$keyword);
                     if($flag==false) echo '<p id="subtitle">
                     No results for now...
                     </p>';
              }
              function mysqlQuery($col,$keyword,$order=''){
                     $query='SELECT * FROM artworks WHERE '.$col.'="'.$keyword.'"'.$order;   
                     //echo "Q=: ".$query." ";                
                     $result=mysqli_query($GLOBALS['_mysqli'],$query);
                     $flag=0;
                     if($result){
                            while($row=mysqli_fetch_row($result)){
                                   $flag=1;
                                   printSearchResult($row);
                            }
                           
                     }
                     return $flag;
              }
              function printSearchResult($row){
              echo '
              <div class="result">
				<div class="figure">
					<img src="../resources/img/'.$row[2].'" width="400px" height="320px" alt="A painting ">
				</div>
				<div class="outfig">
					<div class="figcap">
						<p class="title">'.$row[3].'</p>
						<p class="artist"><a class="athbut" href="search.php">'.$row[1].'</a></p>
						<p class="descreption">'.$row[4].'</p>
						<div class="yearOfWork tinfo">Year: '.$row[5].'</div>
						<div class="style tinfo">Style:'.$row[6].'</div>   
						<div class="widthnheight tinfo">Dimensions:'.$row[7].' cm x '.$row[8].' cm</div>
						<div class="price tinfo">Price: '.$row[9].' USD</div>
						<div class="view tinfo">View :'.$row[10].'</div>
					</div>
				<div id="searchButtons">
                                   <form method="get" id="detail" action="presentation.php?artworkID='.$row[0].'" >
                                   <input type="text" name="artworkID" style="display:none" value="'.$row[0].'">
                                   <button type="submit" class="button">learn more</button>
                                   </form>
                            </div>
				</div>
                            </div>';
                     }
                     ?>
              </div>       
              </main> 
              <footer>
              <?php include_once('../php/footer.php'); ?>
       </footer>
       </body>
       <script src="footprint.js"></script>
</html>