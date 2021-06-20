<?php
        
        function addMember(){
                include("connect.php");
                $result = mysqli_query($_mysqli,"SELECT * FROM users ");
                $totalItem=mysqli_num_rows($result);
                $userID=$totalItem+1;
                $name=$_POST['username'];
                $email=$_POST['email'];
                $tel=$_POST['tel'];
                $address=$_POST['address'];
                $password=$_POST['password'];
                $query="INSERT INTO users VALUES 
                (".$userID."  ,'".$name."' ,'".$email."' ,'".$password."'  ,'".$tel."' ,'".$address."', 0 ".")";
                mysqli_query($_mysqli,$query);
                return $userID;
        }
        function checkUsername($username){
                include("connect.php");
		$result = mysqli_query($_mysqli,"SELECT * FROM users WHERE name="."'".$_POST['username']."'");
        	if($result){
		        $totalItem=mysqli_num_rows($result);
			return $totalItem;
                }
       }

        if(isset($_POST['username'])){
                $flag=checkUsername($_POST['username']);
                if($flag!=0) echo "0".$flag;
                else{
                        $userID=addMember();
                        $lifeTime = 1 * 3600;
                        session_set_cookie_params($lifeTime);
                        session_start();
                        $_SESSION["userID"] = $userID;
                        echo "success";
                }
        }else  echo "not success for no post ";
?>