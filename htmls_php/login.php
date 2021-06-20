
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login at ArtStore</title>
    <link type="text/css" rel="stylesheet" href="../cssstyle/css/global.css">
    <link type="text/css" rel="stylesheet" href="../cssstyle/login.css">
    <script src="jquery.js"></script>
        <script>
        function validateForm() {
            var validate = 1;
            var x = document.forms["myForm"]["username"].value;
            if (x == null || x == "") {
                alert("Usename must be filled");
                validate = 0;
            }
            var x1 = document.forms["myForm"]["password"].value;
            if (x1 == null || x1 == "") {
                alert("Password must be filled");
                validate = 0;
            }
            return validate;
        }    
        function failed(){
            alert("failed");
            $("#info").html('INCORRECT login information.Please try again.');
        }
        function submitForm() {
            var x = validateForm();
            if (!x) return false;
            alert("post message");
            return true;
        }
    </script>
    <script>
    <?php
    include_once("../php/connect.php");
    if(isset($_POST['username'])){
        //   echo $_POST['username']."=".$_POST['password']."<br>";
        $result = mysqli_query($_mysqli,"SELECT * FROM users WHERE name="."'".$_POST['username']."'");
        if($result){
            $row=mysqli_fetch_row($result);
            $db_password=$row[3];
            if($_POST['password']==$db_password){
                $userID=$row[0];//  注册登陆成功的 user ID
                include_once("../php/user_login.php");
            }else echo "failed();";           
        }else echo "failed();";
    }
    ?>
    </script>
</head>

<body id="allcontent">
<div id="footprints" class="button"></div>
<header id="top">
    <h1 class="title">Log in ArtStore</h1>
</header>
<main id="main">
    <form  id="form_login" name="myForm"  method=post>
        <label id="subtitle">Login Art store</label>
        <div class="captab">
            <div class="cap">Account</div><input type="text" id="username" name="username" value="" placeholder="Name of account">
        </div>
        <div class="captab">
            <div class="cap">Password</div><input type="password" id="password" name="password" value="" placeholder="Password">
        </div>
        <input type="submit" value="LOG IN" id="loginbutton">
        <div id="info"></div>
    </form>
    <div class="funcbutton">
        <button><a href="register.php" class="button">Create Your Account</a></button>
        <button><a href="homepage.php" class="button">Return to the Homepage</a></button>
    </div>
</main>
<footer>
    <?php include_once('../php/footer.php'); ?>
</footer>
</body>
<script src="footprint.js"></script>
</html>



