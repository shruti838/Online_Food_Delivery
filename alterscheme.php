<?php
	include "header.php";
?>

<?php
	if(isset($_POST['insertbtn']))
	{
		$cashback_id = $_POST['cashback_id'];
		$offer = $_POST['offer'];
		$start_date = $_POST['start_date'];
		$end_date = $_POST['end_date'];
		$terms_and_condition = $_POST['terms_and_condition'];
		
		$cn = mysqli_connect("localhost","root","","ofdproject");
		
		$q = "insert into schemes values('','$offer','$start_date','$end_date','$terms_and_condition')";
		
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
                                            <label class="col-lg-4 col-form-label" for="val-username">Offers <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="offer" placeholder="Enter an Offer">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Start Date <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="start_date" placeholder="Enter Start Date">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">End Date<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="end_date" placeholder="Enter End Date">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Terms and Condition <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="terms_and_condition" placeholder="Enter a terms and condition">
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