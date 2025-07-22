<?php
include "header.php";
?>
<?php

	$category_id = $_REQUEST['category_id'];
	$category_name = $_REQUEST['category_name'];
	$food_image = $_REQUEST['food_image'];
	$con = mysqli_connect("localhost","root","","ofdproject");
	
	$q = "select * from categories where category_id='$category_id'";
	
	$c = mysqli_query($con,$q);
	
	while($row=mysqli_fetch_array($c))
	{
		$category_id = $row['category_id'];
		$category_name = $row['category_name'];
		$food_image = $row['food_image'];
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
								
								<form action="#" method="POST">
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Category ID <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="category_id" placeholder="Enter category name" value="<?php echo $category_id;?>">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Category Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="category_name" placeholder="Enter category name" value="<?php echo $category_name;?>">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Category Image <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="food_image" placeholder="Enter category image" value="<?php echo $food_image;?>>
                                            </div>
                                        </div>
									
										
										
										<div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
												<input type="submit" name="editbtn" value="EDIT" class="btn btn-primary" />
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