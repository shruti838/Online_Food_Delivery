<?php
	include "homeheader.php";
?>
<?php
	if(isset($_POST['sendbtn']))
	{
		$customer_name = $_POST['customer_name'];
		$customer_email = $_POST['customer_email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
		$cn = mysqli_connect("localhost","root","","ofdproject");
		
		$q = "insert into contactpage values('','$customer_name','$customer_email','$subject','$message')";
		
		$sql = mysqli_query($cn,$q);
		
		if($sql)
		{
			?>
				<script>
					alert("THANK YOU FOR YOUR TIME!!! PLEASE VISIT AGAIN");
				</script>
			<?php
		}
		else
		{
			?>
				<script>
					alert("OOPS !! SOMETHING WENT WRONG");
				</script>
			<?php
		}
	}
?>
<section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	">
        <div class="container">
            <div class="main-titles-head">
                <h3 class="header-name ">
                    Get In Touch
                </h3>
                <p class="tiltle-para ">Taste delight is now at your door step </p>
            </div>
            <div class="contact-grids d-grid">
                <div class="contact-left">
                    <h4>We are here for you</h4>
                    <div class="hours">
                        <h6 class="info mt-3 mb-1">Email:</h6>
                        <p> <a href="mailto:info@example.com">
                            tastedelight-mail@support.com</a></p>
                        <h6 class="info mt-3 mb-1">Address:</h6>
                        <p class="para">A.V.Parekh Technical Institue, Rajkot , Gujarat</p>
                        <h6 class="info mt-3 mb-1">Contact:</h6>
                        <p class="margin-top"><a href="tel:+(9999999999)">9999999999</a></p>
                    </div>
                </div>
                <div class="contact-right">
                    <form action="#" method="POST" class="signin-form">
                        <div class="input-grids">
                            <input type="text" name="customer_name" id="lName" placeholder="Your Name*" class="contact-input">
                            <input type="email" name="customer_email" id="lSender" placeholder="Your Email*" class="contact-input" required="">
                            <input type="text" name="subject" id="lSubect" placeholder="Subject*" class="contact-input">
                        </div>
                        <div class="form-input">
                            <textarea name="message" id="lMessage" placeholder="Type your message here*" required=""></textarea>
                        </div>
                        <input type="submit" name="sendbtn" value="Send Message" class="btn btn-style btn-primary submit" />
                    </form>
                </div>

    </div>
</div>
<div class="container-fluid">
<br><br>
</div>
</div>
</section>
<?php
	include "homefooter.php";
?>