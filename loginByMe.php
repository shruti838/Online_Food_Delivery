<?php
	
	session_start();
	if(isset($_POST['loginbtn']))
	{
		$customer_email = $_POST['customer_email'];
		$pass = $_POST['pass'];
		
		$cn = mysqli_connect("localhost","root","","ofdproject");
		
		$s = "select * from signuppage where customer_email= '$customer_email' && pass='$pass'";
		
		$sql = mysqli_query($cn,$s);
		$num = mysqli_num_rows($sql);
		
		if($num == 1)
		{
			?>
				<script>
					alert("Welcome to Taste Delight");
					window.location="indexPage.php";
				</script>
			<?php
		}
		else
		{
			?>
				<script>
					alert("Invalid Email or password");
				</script>
			<?php
		}
	}
	
?>
<html>
<head>
	<title>Online Food Delivery System</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>Login</h1>
			</div>
			<div class="login-block">
				<form action="#" method="POST">
					<input type="text" name="customer_email" placeholder="Email" required="">
					<input type="password" name="pass" class="lock" placeholder="Password">
					<input type="submit" name="loginbtn" value="Login">	
						
			<br>	
				</form>
				
				<form action="registerPage.php" method="POST">
					<input type="submit" name="register" value="Register">
				</form>
			</div>
      </div>
</div>
<br><br><br><br><br><br><br><br><br>

<div class="copyrights">
	<p>Developed at <a href="http://www.avpt.cteguj.in/">A.V.Parekh Technical Institute</a> Designed by : Netra,Juhi,Bhakti,Krishna
</div>

</body>
</html>