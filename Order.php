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
                                <h4 class="card-title">ORDER SECTION</h4>
								<h5>
								<a href="addOffers.php" style="float:right">Add Order</a>
								</h5>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        
                                            <tr>
                                             
												<th>Order_ID</th>
                                                <th>Customer_ID</th>
												<th>DPerson_ID</th>
                                                <th>Restaurant_ID</th>
												<th>Action</th>
                                            </tr>
											
											<?php
												$cn=mysqli_connect("localhost","root","","ofdproject");
												$rs=mysqli_query($cn,"select * from orders");
												while($row=mysqli_fetch_array($rs))
												{
													echo "<tr>";
													echo "<td>".$row['order_id']."<?td>";
													echo "<td>".$row['customer_id']."<?td>";
													echo "<td>".$row['restaurant_name']."<?td>";
													echo "<td>".$row['dperson_id']."<?td>";
												}
											?>
											
											<td>
												<i class="fa fa-edit"></i>&nbsp;
												<a href="EditCategory.php?order_id=<?php echo $row['order_id'];?>">EDIT</a><br>
												<i class="fa fa-trash"></i>&nbsp; 
												<a href="DeleteOrder.php?order_id=<?php echo $row['order_id'];?>">DELETE</a>
											</td>
                                           <?php
											echo "</tr>";
										   ?>
                                        
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