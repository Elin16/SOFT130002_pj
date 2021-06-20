<script src="../htmls_php/nav.js"></script>
<script src="../htmls_php/jquery.js"></script>

<script>
        function userLogout(){
                $.post("../php/logout.php","",not_login());
                return false ;
        }
</script>
<button><a href="homepage.php" class="button" id="home">home</a></button>
<button><a href="search.php" class="button" id="search">search</a></button>
<button><a href="login.php" class="button" id="login">login</a></button>
<button><a href="register.php" class="button" id="register">register</a></button>
<button><a href="collection.php" class="button" id="collection">My collection</a></button>
<button class="button" id="logout" onclick="userLogout();">logout</button>
<?php
        session_start();
        if(isset($_SESSION['userID'])){
                echo'
                        <script>is_login();</script>
                ';
        }else{
                echo'
                        <script>not_login();</script>
                ';
        }

?>
