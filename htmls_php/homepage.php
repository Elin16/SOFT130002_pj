<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>homepage</title>
		<link type="text/css" rel="stylesheet" href="../cssstyle/css/global.css">
		<link type="text/css" rel="stylesheet" href="../cssstyle/home.css">
		<script src="jquery.js"> </script>
	</head>
	
<body id="allcontent">
		<div id="footprints" class="button"></div>
		<header id="top">
			<div id="sign">
				<span id="logo">Art Store</span>
				<span id="slogan">Where you find <em>genius</em> and <em>extraordinary</em> </span>
			</div>
			<nav>
				<?php include_once('../php/nav.php'); ?>
			</nav>
		</header>
		<div id="main">
			<div id="headimg">
				<?php
					echo '<div id="headimgback"><a id="topPhotoHref" href="presentation.php?artworkID=51"><img id="topPhoto" src=""></a></div>';
					echo '<div id="headimginfo"></div>';
				?>
			</div>
		<div id="blocks_row">	
<?php	//最新图片展示 orderBy TimeReleased
	include_once("../php/connect.php");
	$query='SELECT  *  FROM  artworks  ORDER BY  timeReleased DESC ';
	$result=mysqli_query($_mysqli, $query);
	if($result){
        for($i=1;$i<4;++$i) {
            $row = mysqli_fetch_row($result);
            echo '
            <div class="block">
					<div class="figure">
						<a href="presentation.php?artworID='.$row[0].'"><img src="../resources/img/' . $row[2] . '" width="300" height="300" alt="A painting">
						</a>
					</div>
				<div class="outfig">
            ';
            echo '
            <div class="figcap">
					<p class="title">' . $row[3] . '</p>
					<p class="artist"><a href="search.php" class="athbut">
					' . $row[1] . '</a></p>
					<p>' .
                $row[4] .
                '   </p>
				</div>
            ';
            echo '
                <div class="funcbutton">
				<button><a class="button more" href="presentation.php?artworID='.$row[0].'">learn more</a><button>
				</div>
				</div>
			</div>
			';
			//<a href="presentation.php" class="more button" >learn more</a>
        }
	}
?>
</div>
<footer>
			<?php include_once('../php/footer.php'); ?>
</footer>
</body>	
	<script>
		//function preloadImg(){ 预先载入头图的轮播图片	
			var imgArry=[	//获得头图资源访问目录
				<?php 
					//include_once("../php/topimg.php");
					//getImgInfo(2);
					include_once("../php/connect.php");	
					$query="SELECT * FROM artworks ORDER BY view DESC";
					$result=mysqli_query($_mysqli,$query);
					for($i=0;$i<5;++$i){
						$row=mysqli_fetch_row($result);
						echo '"../resources/img/'.$row[2].'" ';
						if ($i==4) echo '';
						else echo ',';
					}
				?>
			];
			var urlArry=[		//获得头图详情连接
				<?php 
					//getImgInfo(0);
					include_once("../php/connect.php");	
					$query="SELECT * FROM artworks ORDER BY view DESC";
					$result=mysqli_query($_mysqli,$query);
					for($i=0;$i<5;++$i){
						$row=mysqli_fetch_row($result);
						echo '"presentation.php?artworkID='.$row[0].'" ';
						if ($i==4) echo '';
						else echo ',';
					}
				?>
			];
			var imginfoArry=[	//获得头图简介信息
				<?php 
					//getImgInfo(0);
					include_once("../php/connect.php");	
					$query="SELECT * FROM artworks ORDER BY view DESC";
					$result=mysqli_query($_mysqli,$query);
					for($i=0;$i<5;++$i){
						$row=mysqli_fetch_row($result);
						echo '"Auther: '.$row[1].'; Title: '.$row[3].';  Style: '.$row[6].'."';
						if ($i==4) echo '';
						else echo ',';
					}
				?>
			];
			var imgs = [];
			for(var i=0;i<imgArry.length;++i){
				imgs[i]=new Image();	// 生成图片对象
				imgs[i].src= imgArry[i];
				imgs[i].longDesc= urlArry[i];
				//imgs[i].info=imginfoArry[i];
			}

		//}
		var orderimg=0;		//全局变量，设置当前展示的图片序号
		function playImgs(){
			var imgobj=$('#topPhoto');
			$('#topPhotoHref').attr('href',imgs[orderimg].longDesc);
			$('#topPhoto').attr('src',imgs[orderimg].src); 
			$('#headimginfo').text(imginfoArry[orderimg]);
			orderimg+=1;
			orderimg%=4;
			setTimeout("playImgs()",1500);	//调用自身
		}
		playImgs();
		
	</script>
	<script src="footprint.js"></script>
</html>