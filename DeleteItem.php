<?php
	$cart_id = $_REQUEST['cart_id'];
	$con = mysqli_connect("localhost","root","","ofdproject");
	
	$q = "Delete from addtocart where cart_id='$cart_id'";
	
	$c = mysqli_query($con,$q);
	
	if($c)
	{
		?>
				<script>
						window.location="managecart.php";
				</script>
		<?php
	}
	else
	{
		?>
				<script>
						alert("Error");
						window.location="managecart.php";
				</script>
		<?php
	}
?>