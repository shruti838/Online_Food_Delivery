<?php
	include "homeheader.php";
?>
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(isset($_POST['addtocart']))
		{
			$item_name = $_POST['item_name'];
			$price = $_POST['price'];
			
		$cn = mysqli_connect("localhost","root","","ofdproject");
		
		$q = "insert into addtocart values('','$item_name','$price')";
		
		$sql = mysqli_query($cn,$q);
		
		if($sql)
		{
			?>
				<script>
					alert("YOUR ITEM IS ADDED");
				</script>
			<?php
		}
		else
		{
			?>
				<script>
					alert("OOPS !! SOMETHING WENT WRONG");
				</script>
			<?php
		}
		}
	}
?>
<section class="w3l-recent-work-hobbies" id="services"> 
    <div class="recent-work ">
        <div class="container">
            <div class="main-titles-head ">
                <h3 class="header-name ">
					Our Main Menu
                </h3>
                <p class="tiltle-para  ">A LIFE FULL OF TASTY FOOD</p>
            </div>
            <div class="menu-body">
                <!-- Section starts: Appetizers -->
                <div class="menu-section ">
                    <h3 class="menu-section-title">Breakfast </h3>
                     <!-- list starts -->
                    <div class="appetizers">
                    <!-- Item starts -->
                    <div class="menu-item">
					<form action="#" method="POST">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Pasta with fish</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>200</h6>
								<input type="submit" name="addtocart" value="Add To Cart" class="btn mb-1 btn-flat btn-danger">
								<input type="hidden" name="item_name" value="Pasta With Fish">
								<input type="hidden" name="price" value="200">
							</div>
                        </div>
                        </form>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
					
                    <div class="menu-item">
					<form action="#" method="POST">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Fresh meat</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>350</h6>
								<input type="submit" name="addtocart" value="Add To Cart" class="btn mb-1 btn-flat btn-danger">
								<input type="hidden" name="item_name" value="Fresh meat">
								<input type="hidden" name="price" value="350">
                            </div>
                        </div>
                       </form>
                    </div>
					
                    <!-- Item ends -->
            
                    <!-- Item starts -->
                    <div class="menu-item">
					<form action="#" method="POST">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Big vegetarian soup</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>150</h6>
								<input type="submit" name="addtocart" value="Add to Cart" class="btn mb-1 btn-flat btn-danger">
								<input type="hidden" name="item_name" value="Big vegetarian soup">
								<input type="hidden" name="price" value="150">
							</div>
                        </div>
                        </form>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
					<form action="#" method="POST">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Poha with Onion</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>50</h6>
								<input type="submit" name="addtocart" value="Add To Cart" class="btn mb-1 btn-flat btn-danger">
								<input type="hidden" name="item_name" value="Poha with Onion">
								<input type="hidden" name="price" value="50">
							</div>
                        </div>
                        </form>
                    </div>
                    <!-- Item ends -->
                </div>
                 <!-- list end-->
                </div>
                <!-- Section ends: Appetizers -->

                <!-- Section starts: Appetizers -->
                <div class="menu-section">
                    <h3 class="menu-section-title">Main Courses
                    </h3>
                       <!-- list starts -->
                       <div class="appetizers">
                    <!-- Item starts -->
                    <div class="menu-item">
					<form action="#" method="POST">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Beef Burger Meal</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>165</h6>
								<input type="submit" name="addtocart" value="Add To Cart" class="btn mb-1 btn-flat btn-danger">
								<input type="hidden" name="item_name" value="Beef Burger Meal">
								<input type="hidden" name="price" value="165">
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
					<form action="#" method="POST">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Pan Seared Sea Bass</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>210</h6>
								<input type="submit" name="addtocart" value="Add To Cart" class="btn mb-1 btn-flat btn-danger">
								<input type="hidden" name="item_name" value="Pan Seared Sea Bass">
								<input type="hidden" name="price" value="210">
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
					<form action="#" method="POST">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>King Prawns And Lobster</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>150</h6>
								<input type="submit" name="addtocart" value="Add To Cart" class="btn mb-1 btn-flat btn-danger">
								<input type="hidden" name="item_name" value="King Prawns And Lobster">
								<input type="hidden" name="price" value="150">
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
					<form action="#" method="POST">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Citrus Cured Salmon</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>300</h6>
								<input type="submit" name="addtocart" value="Add To Cart" class="btn mb-1 btn-flat btn-danger">
								<input type="hidden" name="item_name" value="Citrus Cured Salmon">
								<input type="hidden" name="price" value="300">
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- Item ends -->
                </div>
                <!-- list end-->
                </div>
                <!-- Section ends: Appetizers -->
                
                <!-- Section starts: Drinks -->
                <div class="menu-section">
                    <h3 class="menu-section-title">Chicken</h3>
                    <!-- list starts -->
                    <div class="appetizers">
                    <!-- Item starts -->
                    <div class="menu-item">
					<form action="#" method="POST">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Smoked Brisket Sandwich</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>250</h6>
								<input type="submit" name="addtocart" value="Add To Cart" class="btn mb-1 btn-flat btn-danger">
								<input type="hidden" name="item_name" value="Smoked Brisket Sandwich">
								<input type="hidden" name="price" value="250">
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
					<form action="#" method="POST">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Cheese Grilled Sandwich</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>120</h6>
								<input type="submit" name="addtocart" value="Add To Cart" class="btn mb-1 btn-flat btn-danger">
								<input type="hidden" name="item_name" value="Cheese Grilled Sandwich">
								<input type="hidden" name="price" value="120">
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Italian Pizza</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>230</h6>
								<input type="submit" name="addtocart" value="Add To Cart" class="btn mb-1 btn-flat btn-danger">
								<input type="hidden" name="item_name" value="Italian Pizza">
								<input type="hidden" name="price" value="230">
                            </div>
                        </div>
                        
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
					<form action="#" method="POST">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Peanut Sandwich</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>250</h6>
								<input type="submit" name="addtocart" value="Add To Cart" class="btn mb-1 btn-flat btn-danger">
								<input type="hidden" name="item_name" value="Peanut Sandwich">
								<input type="hidden" name="price" value="250">
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- Item ends -->     
                </div>
                <!-- list end -->
                </div>
                <!-- Section ends: Drinks -->

                <!-- Section starts: Drinks -->
                <div class="menu-section">
                    <h3 class="menu-section-title">Desserts
                    </h3>
                    <!-- list starts -->
                    <div class="appetizers">
                    <!-- Item starts -->
                    <div class="menu-item">
					<form action="#" method="POST">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Bananas Foster</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>110</h6>
								<input type="submit" name="addtocart" value="Add To Cart" class="btn mb-1 btn-flat btn-danger">
								<input type="hidden" name="item_name" value="Bananas Foster">
								<input type="hidden" name="price" value="110">
								
								
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
					<form action="#" method="POST">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Cream Cheesecake</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>100</h6>
								<input type="submit" name="addtocart" value="Add To Cart" class="btn mb-1 btn-flat btn-danger">
								<input type="hidden" name="item_name" value="Cream Cheesecake">
								<input type="hidden" name="price" value="100">
								
								<script>
									alert("HIGH SUGAR!!!!");
								</script>
                            </div>
                        </div>
                      </form>  
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
					<form action="#" method="POST">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Caramel Ice Cream</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>45</h6>
								<input type="submit" name="addtocart" value="Add To Cart" class="btn mb-1 btn-flat btn-danger">
								<input type="hidden" name="item_name" value="Caramel Ice Cream">
								<input type="hidden" name="price" value="45">
								
								
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
					<form action="#" method="POST">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Lemon Meringue Pie</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>118</h6>
								<input type="submit" name="addtocart" value="Add To Cart" class="btn mb-1 btn-flat btn-danger">
								<input type="hidden" name="item_name" value="Lemon Meringue Pie">
								<input type="hidden" name="price" value="118">
								
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- Item ends -->
                </div>
                <!-- list starts -->
                </div>
                <!-- Section ends: Drinks -->
            </div>
			</form>
        </div>
    </div>
</section>
<section class="w3l-services-two" id="services">
    <div class="service-single-page ">
        <div class="container">
            <div class="gallery-image row">
              <div class="img-box col-lg-4 col-md-6">
                <img src="assets/images/b2.jpg" alt="product" class="img-responsive ">
                <h5 class="my-2"><a href="about.php">Coconut Chicken and Rice</a></h5>
              </div>
              <div class="img-box col-lg-4 col-md-6">
                <img src="assets/images/b1.jpg" alt="product" class="img-responsive ">
                <h5 class="my-2"><a href="about.php">Garlic Roast Chicken</a></h5>
              </div>
              <div class="img-box col-lg-4 col-md-6">
                <img src="assets/images/b3.jpg" alt="product" class="img-responsive ">
                <h5 class="my-2"><a href="about.php">Butter pecan caramel</a></h5>
                </div>
                </div>
    </div>
</div>
</section>
<?php
	include "homefooter.php";
?>