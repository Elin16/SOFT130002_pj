<?php
        function addMember(){
                include("connect.php");
                $result = mysqli_query($_mysqli,"SELECT * FROM users ");
                $totalItem=mysqli_num_rows($result);
                $userID=$totalItem+1;
                $name="name";//$_POST['username'];
                $email="we@soft.fdu";//$_POST['email'];
                $tel="212323";//$_POST['tel'];
                $address=" h d ";//$_POST['address'];
                $password=" gfgdf ";//$_POST['password'];
                $query="INSERT INTO users VALUES 
                (".$userID."  ,'".$name."' ,'".$email."' ,'".$password."'  ,'".$tel."' ,'".$address."', 0 ".")";
                echo $query;
                mysqli_query($_mysqli,$query);
                return $userID;
        }
        addMember();
        echo "SDDSSD";
?>