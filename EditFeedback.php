<?php 

	include "header.php";
?>
<?php

	$feedback_id = $_REQUEST['feedback_id'];
	$con = mysqli_connect("localhost","root","","ofdproject");
	
	$q = "select * from feedback where feedback_id='$feedback_id'";
	
	$c = mysqli_query($con,$q);
	
	while($row=mysqli_fetch_array($c))
	{
		$custmor_name=$row['custmor_name'];
		$subject=$row['subject'];
		$email_id=$row['email_id'];
		$number=$row['number'];
		$description=$row['description'];
		$feedback_date = $row['feedback_date'];
	}
?>
<div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">SCHEMES</h4>
								
								<form action="#" method="POST">
									
	
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Customer Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="customer_name" placeholder="Enter Customer Name" value="<?php echo $custmor_name;?>">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Subject<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="subject" placeholder="Enter Subject" value="<?php echo $subject;?>">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Email id<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="email_id" placeholder="Enter Email Id" value="<?php echo $email_id;?>">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Number<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="number" placeholder="Enter Number" value="<?php echo $number;?>">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Description<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="description" placeholder="Enter Description" value="<?php echo $description;?>">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">FeedBack Date<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="feedback_date" placeholder="Enter FeedBack Date" value="<?php echo $feedback_date;?>">
                                            </div>
                                        </div>
										
							
										
										<div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
												<input type="submit" name="updatebtn" value="UPDATE" class="btn btn-primary" />
											</div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
	
<?php
	include "footer.php";
?>