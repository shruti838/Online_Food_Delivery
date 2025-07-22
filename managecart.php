<?php
	include "homeheader.php";
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
                                <h4 class="card-title">ADD TO CART</h4>
							
                                <div class="table-responsive">
								<form action="#" method="POST">
                                    <table class="table table-striped table-bordered zero-configuration">
											
											<tr>
                                                <th>Cart_ID</th>
                                                <th>Item Name</th>
												<th>Price</th>
												<th>Remove Item</th>
                                            </tr>
                                        
                                           <?php
												$cn=mysqli_connect("localhost","root","","ofdproject");
												$rs=mysqli_query($cn,"select * from addtocart");
												while($row=mysqli_fetch_array($rs))
												{
													echo "<tr>";
													echo "<td>".$row['cart_id']."<?td>";
													echo "<td>".$row['item_name']."<?td>";
													echo "<td>".$row['price']."<?td>";
												
										?>
											<td>
												<i class="fa fa-trash"></i>&nbsp; 
												<a href="DeleteItem.php?cart_id=<?php echo $row['cart_id'];?>">REMOVE</a>
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
    include "homefooter.php";
?>