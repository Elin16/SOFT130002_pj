<!DOCTYPE html>
<html>
       <head>
              <meta charset="utf-8">
              <title>search in Art Store</title>
              <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	       <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	       <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                     <input type="text" name="keyword" id="keyword" placeholder="Search for artworks/ artists/ styles ...">
                     <button type="submit">search</button>
              </form >
              <form method="get" id="selectForm">
                     <input type="radio" name="select" value="view" >view<br>
                     <input type="radio" name="select" value="price">price<br>
                     <input type="radio" name="select" value="yearOfWork">year of work<br>
                     <input type="radio" name="select" value="artist">artist<br>
              </form>
              
              <div id="results">
              </div>
              <?php
                     $url=$_SERVER['REQUEST_URI'];
                     $url_array=explode("?",$url);
                     $url='"../php/search_results.php';
                     if(count($url_array)>1) $url.="?".$url_array[count($url_array)-1];
                     $url.='"';
                     echo '
                     <script>
                            $("#results").load(encodeURI('.$url.')); 
                     </script>
                     ';
              ?>
              <script>
                     $("#searchForm").submit(function(){
                     var query="../php/search_results.php?keyword="+encodeURI($("#keyword").val());
                     alert(query);
                     $("#results").load(query);
                     return false;
              });
              </script>

              <script>
                     $("#selectForm input").click(function(){
                     var x="";
                     if($("#keyword").val()) x="&keyword="+encodeURI($("#keyword").val());
                     $("#results").load(encodeURI("../php/search_results.php?select="+$(this).attr("value")+x));
                     return false;
              });
              </script>
              </main> 
              <footer>
              <?php include_once('../php/footer.php'); ?>
       </footer>
       </body>
       <script src="footprint.js"></script>
</html>