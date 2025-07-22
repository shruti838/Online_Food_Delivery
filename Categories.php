<?php
	include "header.php";
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
								<h5>
								<a href="altercategories.php" style="float:right">Add Category</a>
								</h5>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <form action="altercategories.php" method="POST">
                                            <tr>
                                                <th>Category_ID</th>
                                                <th>Category_Name</th>
                                                <th>Category_Image</th>
												<th>Action</th>
                                         
                                            </tr>
                                        
                                            <?php
												$cn=mysqli_connect("localhost","root","","ofdproject");
												$rs=mysqli_query($cn,"select * from categories");
												while($row=mysqli_fetch_array($rs))
												{
													echo "<tr>";
													echo "<td>".$row['category_id']."<?td>";
													echo "<td>".$row['category_name']."<?td>";
											?>
											
												<td>
												  <img src="<?php echo "<td>".$row['food_image']."</td>";?> alt="image" width="50px" height="50px">
												</td>
												
											
											<td>
												<i class="fa fa-edit"></i>&nbsp;
												<a href="EditCategory.php">EDIT</a><br>
												<i class="fa fa-trash"></i>&nbsp; 
												<a href="DeleteCategory.php?category_id=<?php echo $row['category_id'];?>">DELETE</a>
											</td>
												
												<?php 
												echo "</tr>";
												}
												
											?>
													
                                        </form>
                                    </table>
                                </div>
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