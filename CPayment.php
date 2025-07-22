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
                                <h4 class="card-title">PAYMENT SECTION</h4>
								<h5>
								<a href="alterpayment.php" style="float:right">Add Payment</a>
								</h5>
                                <div class="table-responsive">
								<form action="#" method="POST">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        
                                            <tr>
                                                <th>Payment_id</th>
                                                <th>Customer_ID</th>
                                                <th>Restaurant_ID</th>
												<th>Amount</th>
                                            </tr>
                                        
                                            <?php
												$cn=mysqli_connect("localhost","root","","ofdproject");
												$rs=mysqli_query($cn,"select * from payment");
												while($row=mysqli_fetch_array($rs))
												{
													echo "<tr>";
													echo "<td>".$row['payment_id']."<?td>";
													echo "<td>".$row['customer_id']."<?td>";
													echo "<td>".$row['restaurant_id']."<?td>";
													echo "<td>".$row['amount']."<?td>";
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