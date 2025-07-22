<?php
	
	
	$feedback_id = $_REQUEST['feedback_id'];
	$con = mysqli_connect("localhost","root","","ofdproject");
	
	$q = "Delete from feedback where feedback_id='$feedback_id'";
	
	$c = mysqli_query($con,$q);
	
	if($c)
	{
		?>
				<script>
						window.location="Feedback.php";
				</script>
		<?php
	}
	else
	{
		?>
				<script>
						alert("Error");
						window.location="Feedback.php";
				</script>
		<?php
	}
?>