<h1>HEAD!</h1>
<script src="jquery.js"> </script>

<li><a href="homepage.php" id="aa" > fff</a></li>
<form method="post" id="selectForm">
        <input type="radio" name="select" value="view" >view<br>
        <input type="radio" name="select" value="price">price<br>
        <input type="radio" name="select" value="yearOfWork">year of work<br>
        <input type="radio" name="select" value="artist">artist<br>
 </form>
<div id="results">
</div>
<script>
    $("li a").click(function (){
        alert("DF");
        return false;
    });

</script>
    <div id="signup">
			<form id="container" name="myForm" method=post>
			  <label id="subtitle">Sign up for Art store</label>
			  <input type="email" placeholder="test@mailbox.com" name="email">
			  <input type="text" name="username" placeholder="username">
			  <input type="text" name="area" placeholder="area">
			  <input type="password" name="password" placeholder="password   number and letter required ">
			  <input type="password" name="passwordagain" placeholder="password again">
			  <input class="button-primary" type="submit" value="Submit" id="formSubmit">
			</form>
			<div id="message"></div>
		</div>	

		<script>
			$('#container').submit(function(){

			});
		</script>
<div id="main"></div>
<script>
<?php 
	$userID=1;
	include_once("../php/user_login.php");

?>
</script>