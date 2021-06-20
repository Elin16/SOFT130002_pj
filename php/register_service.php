<?php
		if(isset($_POST['username'])){
			include_once("../php/connect.php");
			$result = mysqli_query($_mysqli,"SELECT * FROM users WHERE name="."'".$_POST['username']."'");
        		if($result){
				$totalItem=mysqli_num_rows($result);
                                echo $totalItem;
				if($totalItem==0){
					echo'
					        $("#bottomMessage").html("Username has been used, please choose another name! ");
                                                return false;
					';
				}else echo'
                                        return false;
                                ';
			}
		}
?>