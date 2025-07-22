<?php
	
	
	$cashback_id = $_REQUEST['cashback_id'];
	$con = mysqli_connect("localhost","root","","ofdproject");
	
	$q = "Delete from schemes where cashback_id='$cashback_id'";
	
	$c = mysqli_query($con,$q);
	
	if($c)
	{
		?>
				<script>
						window.location="Scheme.php";
				</script>
		<?php
	}
	else
	{
		?>
				<script>
						alert("Error");
						window.location="Scheme.php";
				</script>
		<?php
	}
?>
