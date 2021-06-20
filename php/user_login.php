<?php
        echo'
        function success(){
            $("#main").html("Login successfully!");
            setTimeout(function(){
                alert("You login Successfully!");
                if(history.length>2) history.go(-2);
                else location.href="homepage.php";
            },300);
        }';
        $lifeTime = 1 * 3600;
        session_set_cookie_params($lifeTime);
        session_start();
        $_SESSION["userID"] = $userID;
        echo " success();";
?>