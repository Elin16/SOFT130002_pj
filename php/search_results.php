<?php
include_once("add_artwork.php");//是不是先 include后，自己才被include到search 的呢？
include_once("connect.php");
if(isset($_GET['begin'])) $begin=$_GET['begin'];else $begin=1;
if(isset($_GET['select'])){
    $select=$_GET['select'];
    $order=" ORDER BY ".$select;
    if($select=="view") $order.=" DESC";
} else $order="";
//echo $_GET['keyword'].":sdf";
if(isset($_GET['keyword'])){
       $keyword=urldecode($_GET['keyword']);
       //echo $keyword;
       $flag=0;
       $flag=mysqlQuery("title",$keyword,$order,$begin)|mysqlQuery("yearOfWork",$keyword,$order,$begin);
       $flag|=mysqlQuery("artist",$keyword,$order,$begin)|mysqlQuery("genre",$keyword,$order,$begin);
       if($flag==false) echo '<p id="subtitle">
       No results for now...
       </p>';
} else defaultPresentation($order,$begin);

function mysqlQuery($col,$keyword,$order='',$begin=1,$itemNumber=3){
       $query='SELECT * FROM artworks WHERE '.$col.'="'.$keyword.'"'.$order;              
       $result=mysqli_query($GLOBALS['_mysqli'],$query);
       $flag=0;
       if($result) $totalItem=mysqli_num_rows($result);
       else $totalItem=0;
       if($totalItem){
              $flag=1;$counter=0;
              while($row=mysqli_fetch_row($result)){
                     $counter++;
                     if($counter>$begin+$itemNumber-1) break;
                     if($counter>=$begin) printSearchResult($row);
              }
              PresenteSelectpageButton($totalItem,$begin,$itemNumber);
       }
       return $flag;
}
function defaultPresentation($order,$begin=1,$itemNumber=10){
       $query='SELECT * FROM artworks '.$order;
       $result=mysqli_query($GLOBALS['_mysqli'],$query);
       $counter=0;
       if($result){
              while($row=mysqli_fetch_row($result)){
                     $counter++;
                     if($counter>$begin+$itemNumber-1) break;
                     if($counter>=$begin) printSearchResult($row);
              }
              $totalItem=mysqli_num_rows($result);
              PresenteSelectpageButton($totalItem,$begin,$itemNumber);
       }
}
function PresenteSelectpageButton($totalItem,$nowIterm,$itemNumber){
       echo'
       <ul class="pagination">
       <li class="disabled"><a href="#">&laquo;</a></li>
       ';
       $back="";
       if(isset($_GET['keyword'])){
              $back.="&keyword=".$_GET['keyword'];
       }
       if(isset($_GET['select'])){
              $back.="&select=".$_GET['select'];
       }

       $url="../php/search_results.php?begin=";
       urlencode($back);
       $pages=ceil($totalItem/$itemNumber);
       for ($i=1;$i<=$pages;++$i){ //TODO onclick 函数
              if(ceil($nowIterm/$itemNumber)==$i)echo '<li class="active"><a href="';
              else echo '<li><a href="';
              
              echo $url.(($i-1)*$itemNumber+1).$back.'" ';
              echo ' onclick="function(){alert("!");}">'.$i.'</a></li>';
       }
       ///echo "total = ".$totalItem;
       echo '
       <li class="disabled"><a href="#">&raquo;</a></li>
       </ul>
       ';
       echo '
       <script src="jquery.js"></script>
       <script>
       $("li a").click(function (){
              var url=$(this).attr("href");
              $("#results").load(url);
              return false;
       });
        </script>
       ';
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
                                  <!--<p class="descreption">'.$row[4].'</p>-->
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