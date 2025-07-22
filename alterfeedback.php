<?php
	include "header.php";
?>
<?php
	if(isset($_POST['insertbtn']))
	{
		//$feedback_id = $_POST['feedback_id'];
		$customer_name = $_POST['customer_name'];
		$subject = $_POST['subject'];
		$email_id = $_POST['email_id'];
		$number = $_POST['number'];
		$description = $_POST['description'];
		$feedback_date = $_POST['feedback_date'];
		
		$cn = mysqli_connect("localhost","root","","ofdproject");
		
		$q = "insert into feedback values('$customer_name','$subject','$email_id','$number','$description','$feedback_date')";
		
		$sql = mysqli_query($cn,$q);
		
		if($sql)
		{
			echo "Row Inserted Successfully";
		}
		else
		{
			echo "Error!!! Please enter the correct value";
		}
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
                                                <input type="text" class="form-control" id="val-username" name="customer_name" placeholder="Enter Customer Name">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Subject<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="subject" placeholder="Enter Subject">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Email id<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="email_id" placeholder="Enter Email Id">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Number<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="number" placeholder="Enter Number">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Description<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="description" placeholder="Enter Description">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">FeedBack Date<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="feedback_date" placeholder="Enter FeedBack Date">
                                            </div>
                                        </div>
										
							
										
										<div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
												<input type="submit" name="insertbtn" value="INSERT" class="btn btn-primary" />
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