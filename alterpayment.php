<?php
	include "header.php";
?>

<?php
	if(isset($_POST['insertbtn']))
	{
		//$payment_id = $_POST['payment_id'];
		$customer_id = $_POST['customer_id'];
		$restaurant_id = $_POST['restaurant_id'];
		$amount = $_POST['amount'];
		
		$cn = mysqli_connect("localhost","root","","ofdproject");
		
		$q = "insert into payment values('','$customer_id','$restaurant_id','$amount')";
		
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
                                <h4 class="card-title">PAYMENT</h4>
								
								<form action="#" method="POST">
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Customer ID <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="customer_id" placeholder="Enter customer id">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Restaurant ID <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="restaurant_id" placeholder="Enter restaurant id">
                                            </div>
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Amount <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="amount" placeholder="Enter amount">
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