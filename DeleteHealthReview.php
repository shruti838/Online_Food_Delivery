<?php
	
	
	//$hc_id = $_REQUEST['hc_id'];
	$con = mysqli_connect("localhost","root","","ofdproject");
	
	$q = "Delete from healthcarereview where hc_id='$hc_id'";
	
	$c = mysqli_query($con,$q);
	
	if($c)
	{
		?>
				<script>
						window.location="HealthReview.php";
				</script>
		<?php
	}
	else
	{
		?>
				<script>
						alert("Error");
						window.location="HealthReview.php";
				</script>
		<?php
	}
?>