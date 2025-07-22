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
                                <h4 class="card-title">HEALTH CARE REVIEW SECTION</h4>
								<h5>
								<a href="alterhealthcare.php" style="float:right">Add Review</a>
								</h5>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <form action="alterhealthcare.php" method="POST">
                                            <tr>
												<th>Health Care ID</th>
                                                <th>Customer_Name</th>
                                                <th>Customer_Email</th>
												<th>Disease</th>
												<th>Action</th>
                                            </tr>
                                        
                                            <?php
												$cn=mysqli_connect("localhost","root","","ofdproject");
												$rs=mysqli_query($cn,"select * from healthpage");
												while($row=mysqli_fetch_array($rs))
												{
													echo "<tr>";
													echo "<td>".$row['health_id']."<?td>";
													echo "<td>".$row['customer_name']."<?td>";
													echo "<td>".$row['customer_email']."<?td>";
													echo "<td>".$row['disease_name']."<?td>";
											?>
											
											<td>
												<i class="fa fa-edit"></i>&nbsp;
												<a href="EditCategory.php">EDIT</a><br>
												<i class="fa fa-trash"></i>&nbsp; 
												<a href="DeleteHealthReview.php?health_id=<?php echo $row['health_id'];?>">DELETE</a>
											</td>
												
												<?php 
												echo "</tr>";
												}
												
											?>
                                        
                                    </table>
									</form>
									
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