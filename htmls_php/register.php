<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register for Art Store</title>
	<link type="text/css" rel="stylesheet" href="../cssstyle/css/global.css">
	<link type="text/css" rel="stylesheet" href="../cssstyle/login.css">
	<link type="text/css" rel="stylesheet" href="../cssstyle/register.css">
	<script src="jquery.js"></script>
	<script>
		function validateForm(){
			var validate=1;
  			var x=document.forms["myForm"]["email"].value;
  			var atpos=x.indexOf("@");
  			var dotpos=x.lastIndexOf(".");
  			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
				$('#emailMessage').html("Not a valid e-mail address");
    				validate=0;
			}else  $('#emailMessage').html("");
			var x=document.forms["myForm"]["username"].value;
			if (x==null || x==""){
				$('#usernameMessage').html("Usename must be filled");
				validate=0;
			} else $('#usernameMessage').html("");
			var x=document.forms["myForm"]["address"].value;
			if (x==null || x==""){
				$('#addressMessage').html("Address must be filled");
				validate=0;
			} else $('#addressMessage').html("");
			var x=document.forms["myForm"]["tel"].value;
			if (x==null || x==""){
				$('#telMessage').html("Telephone must be filled");
				validate=0;
			} else $('#telMessage').html("");
			var x1=document.forms["myForm"]["password"].value;
			if (x1==null || x1==""){
				$('#pwdMessage').html("Password must be filled");
				validate=0;
			}else $('#pwdMessage').html("");
			var numberCheck=/\d+/;
			var stringCheck=/[a-zA-Z]/;
			if(!numberCheck.test(x1)||!stringCheck.test(x1)){
				$('#pwdMessage').html("Password must include both Number and Letter");
				validate=0;
			}else $('#pwdMessage').html("");
			//alert(numberCheck.test(x1));
			//console.log(x1,"-",numberCheck.test(x1),"-",numberCheck.test(x1),"\n");
			var x2=document.forms["myForm"]["passwordagain"].value;
			if (x2==null || x2==""||x1!=x2){
				$('#pwdaMessage').html("Password must be filled again");
				validate=0;
				if(x1!=x2) $('#pwdaMessage').html("The tow password DONOT match!");
			} else $('#pwdaMessage').html("");
			alert("ww s a re2 "+validate);
			return validate;
		}
	</script>
</head>
<body id="allcontent">
	<div id="footprints" class="button"></div>
	<header id="top">
		<h1 id="title">Join in Art Store</h1>
	</header>

	<main id="main">
		<div id="signup">
			<form id="container" name="myForm" method="post">
			  <label id="subtitle">Sign up for Art store</label>
			  <input type="email" placeholder="test@mailbox.com" name="email">
			  <div class="hintMessage" id="emailMessage"></div> 
			  
			  <input type="text" name="username" placeholder="username">
			  <div class="hintMessage" id="usernameMessage"></div> 
			 
			  <input type="text" name="address" placeholder="address">
			  <div class="hintMessage" id="addressMessage"></div> 
			 
			  <input type="text" name="tel" placeholder="telephone">
			  <div class="hintMessage" id="telMessage"></div> 
			 
			  <input type="password" name="password" placeholder="password   number and letter required ">
			  <div class="hintMessage" id="pwdMessage"></div> 
			 
			  <input type="password" name="passwordagain" placeholder="password again">
			  <div class="hintMessage" id="pwdaMessage"></div> 
			  
			  <input class="button-primary" type="submit" value="Submit" id="formSubmit">
			</form>
		</div>	
		<div id="bottomMessage" class="hintMessage"></div>
		<script>
			$('#container').submit(function(){
				var flag=validateForm();
				if(flag==0){
                    		$('#bottomMessage').html("Please fill the form correctly "); 
				}else{
                    $('#bottomMessage').html(" fill the form correctly ");
                    var formData = $("#container").serialize();
					console.log(formData);
					$.post("../php/register_service2.php",formData,function(data){
						alert(data);
				        	if(data=="success"){
							$('#bottomMessage').html("success!");
							setTimeout(function(){
                						alert("Login Successfully!");
                						if(history.length>2) history.go(-2);
                						else location.href="homepage.php";
           						},3000);
						} 
				        	else $('#usernameMessage').html(" Username has been used, please choose another name!");
                     			});
				}
				return false;
			});
		</script>

	<div id="funcbutton">
		<button><a href="login.php" class="button">Login for Artstore</a></button>
		<button><a href="  homepage.php" class="button">Return to Homepage</a></button>
	</div>
	</main>
	<footer>
		<?php include_once('../php/footer.php'); ?>
	</footer>
</body>
<script src="footprint.js"></script>
</html>