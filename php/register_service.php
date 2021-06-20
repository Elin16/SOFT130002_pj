<?php
        function addMember(){
            include_once("../php/connect.php");
            $result = mysqli_query($_mysqli,"SELECT * FROM users ");
            $totalItem=mysqli_num_rows($result);
            $userID=$totalItem+1;
	        $name=$_POST['username'];
	        $email=$_POST['email'];
	        $tel=$_POST['tel'];
	        $address=$_POST['address'];
	        $query="INSERT INTO users VALUES 
	        (".$userID."'".$name."' '".$email."' '".$password."'  '".$tel."' '".$address."' 0 ".")
	        ";
            mysqli_query($query);
	        return $userID;
        }

		if(isset($_POST['username'])){
		    echo "alert(.".$_POST['username'].".);";
			include_once("../php/connect.php");
			$result = mysqli_query($_mysqli,"SELECT * FROM users WHERE name="."'".$_POST['username']."'");
        		if($result){
				$totalItem=mysqli_num_rows($result);
				echo "alert(totalIterm=".$totalItem.".);";
				//echo $totalItem;
				if($totalItem!=0){
					echo'
                        $("#bottomMessage").html("Username has been used, please choose another name! ");
                        ';
				}else{
				    $userID=addMember();
				    echo'
					alert("userID='.$userID.' ");
					$("#bottomMessage").html("You are a member of Art Store Now! ");
					';
				    include_once("user_login.php");
				}
			}else echo" alert('database query failed'); return false;";
		}else echo "alert('not get');";
?>