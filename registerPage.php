<?php

	session_start();
	if(isset($_POST['registerbtn']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$customer_email = $_POST['customer_email'];
		$pass = $_POST['pass'];
		
		$cn = mysqli_connect("localhost","root","admin123","ofdproject");
		
		$s = "select * from signuppage where customer_email= '$customer_email'";
		
		$sql = mysqli_query($cn,$s);
		$num = mysqli_num_rows($sql);
		
		if($num == 1)
		{
			?>
				<script>
					alert("User already Registered");
				</script>
			<?php
		}
		else
		{
			$q = "INSERT INTO `signuppage`(`fname`, `lname`, `customer_email`, `pass`) VALUES ('$fname','$lname','$customer_email','$pass')";
			$result = $cn->query($q);
			if($result){
				?>
				<script>
					alert("You have successfully Registered");
					window.location="indexPage.php";
				</script>
				<?php
			}
			
			?>
			
				
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
				<h1>SIGN UP</h1>
			</div>
			<div class="login-block">
				<form action="#" method="POST">
					<input type="text" name="fname" placeholder="First Name" >
					<input type="text" name="lname" placeholder="Last Name" >
					<input type="text" name="customer_email" placeholder="Email">
					<input type="password" name="pass" placeholder="Password">
					<input type="submit" name="registerbtn" value="Register">
				</form>

			</div>
      </div>
</div>
<br><br><br><br><br><br><br><br><br>

<div class="copyrights">
	<p>Developed at <a href="http://www.avpt.cteguj.in/">A.V.Parekh Technical Institute</a> Designed by : Netra,Juhi,Bhumit,Aayush
</div>

</body>
</html>
