
<?php
        //session_start();
        echo '<script src="jquery.js"></script>
        <script> function toggleFormClass(){
                        $("#addCollection").toggleClass("invisible"); 
                        $("#removeCollection").toggleClass("invisible"); 
                }
        </script>
        ';
        if(isset($_POST['addCollectionArtworkID'])){
                if(!isset($_SESSION['userID'])){
                        unset($_POST['addCollectionArtworkID']);
                        echo'
                        <script>
                                alert("用户需登录后才能添加商品收藏");
                        </script>
                        ';
                }else{
                        include_once("connect.php");
                        function getListID(){
                                return $_POST['addCollectionArtworkID'];
                        }              
                        $query='SELECT * FROM wishlist';
                        $result=mysqli_query($_mysqli,$query);               
                        $query = 'INSERT INTO wishlist (listID,userID,artworkID) VALUES ('.getListID().','.$_SESSION['userID'].','.$_POST['addCollectionArtworkID'].')';
                        echo '
                        <script>
                                console.log("'.$query.'");
                        </script>
                        ';
                        if (mysqli_query($_mysqli, $query)) {
                               echo'
                                <script>
                                        alert("添加成功!");
                                        toggleFormClass();
                                </script>
                               ';
                        }else{
                                echo '<script>
                                        toggleFormClass();
                                        alert("已添加");
                                </script>';
                        }
                        unset($_POST['addCollectionArtworkID']);
                }
        }

        if(isset($_POST['removeCollectionArtworkID'])){
                if(!isset($_SESSION['userID'])){
                        unset($_POST['removeCollectionArtworkID']);
                        echo'
                        <script>
                                alert("用户需登录后才能删除商品收藏");
                        </script>
                        ';
                }else{
                        include_once("connect.php");
                        $query=' SELECT * FROM wishlist WHERE artworkID="'.$_POST['removeCollectionArtworkID'].'"';
                        $result=mysqli_query($_mysqli,$query);
                        $row=mysqli_fetch_row($result);
                        if($row){                    
                            $query = 'DELETE FROM wishlist WHERE artworkID="'.$_POST['removeCollectionArtworkID'].'"';
                            $result=mysqli_query($_mysqli, $query);
                            ///$_POST['removeCollectionArtworkID']=NULL;
                            unset($_POST['removeCollectionArtworkID']);
                            echo $query." ; ".$result.";";
                            echo'<script>
                                        alert("删除成功");
                                        //toggleFormClass();
                                        //histroy.go(-2);
                                        location.reload();
                                </script>
                               ';
                        }else {
                            unset($_POST['removeCollectionArtworkID']);
                            return ;
                        }
                }
        }
?>