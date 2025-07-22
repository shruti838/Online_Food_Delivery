<?php
	
	
	$category_id = $_REQUEST['category_id'];
	$con = mysqli_connect("localhost","root","","ofdproject");
	
	$q = "Delete from categories where category_id='$category_id'";
	
	$c = mysqli_query($con,$q);
	
	if($c)
	{
		?>
				<script>
						window.location="Categories.php";
				</script>
		<?php
	}
	else
	{
		?>
				<script>
						alert("Error");
						window.location="Categories.php";
				</script>
		<?php
	}
?>
