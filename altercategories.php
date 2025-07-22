<?php
	include "header.php";
?>

<?php
	if(isset($_POST['insertbtn']))
	{
		$category_id = $_POST['category_id'];
		$category_name = $_POST['category_name'];
		$food_image = $_FILES['food_image']['name'];
		
		$cn = mysqli_connect("localhost","root","","ofdproject");
		
		$q = "insert into categories values('','$category_name','$food_image')";
		
		$sql = mysqli_query($cn,$q);
		
		if($sql)
		{
			move_uploaded_file($_FILES['food_image']['tmp_name'],"uploadimage/".$food_image);
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
                                <h4 class="card-title">CATEGORY</h4>
								
								<form action="#" method="POST" enctype="multipart/form-data">
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Category Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="category_name" placeholder="Enter category name">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Category Image <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-username" name="food_image" placeholder="Enter category image">
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