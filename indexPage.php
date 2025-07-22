<?php
	include "homeheader.php";
?>
<?php
	if(isset($_POST['registerbtn']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$customer_email = $_POST['customer_email'];
		$pass = $_POST['pass'];
		
		$cn = mysqli_connect("localhost","root","","ofdproject");
		
		$s = "select * from signuppage where customer_email= '$customer_email'";
		
		$sql = mysqli_query($cn,$s);
		
		if($sql == 1)
		{
			echo "User already Registered";
		}
		else
		{
			$q = "insert into signuppage values('','$fname','$lname','$customer_email','$pass')";
			?>
				<script>
					alert("You have successfully Registered");
					window.location="indexPage.php";
				</script>
			<?php
		}
	}
	
?>
<section class="w3l-specification-6">
    <div class="specification-layout ">
        <div class="container">
            <div class="main-titles-head ">
                <h3 class="header-name ">
					Our Special Feature
                </h3>
             
            </div>
                    <div class="call-grids-w3 d-grid">
                        <div class="grids-1  grids-effect-2">
                            <span class="fa fa-beer"></span>
                            <h2><a href="#feature" class="title-head">Well Decorated</a></h4>
                           
                        </div>
                        <div class="grids-1  grids-effect-2">
                            <div class="color-white">
                                <span class="fa fa-cutlery"></span>
                            <h2><a href="#page" class=" title-head">Breakfast</a></h4>
                        
                        </div>
                    </div>
                        <div class="grids-1 grids-effect-2">
                            <span class="fa fa-handshake-o"></span>
                            <h2><a href="#feature" class="title-head">Expert Chef</a></h4>
                         
                        </div>
                        <div class="grids-1  grids-effect-2">
                            <div class="color-white">
                                <span class="fa fa-spoon"></span>
                            <h2><a href="#page" class=" title-head">Lunch</a></h4>
                         
                        </div>
                    </div>
                            <div class="grids-1 grids-effect-2">
                                <span class="fa fa-smile-o"></span>
                                <h2><a href="#feature" class="title-head">Quick Serve</a></h4>
                               
                            </div>
                            
                        <div class="grids-1  grids-effect-2">
                            <div class="color-white">
                                <span class="fa fa-apple"></span>
                            <h2><a href="#page" class=" title-head">Dinner</a></h4>
                          
                        </div>
                    </div>
                            <div class="grids-1 grids-effect-2">
                                <span class="fa fa-diamond"></span>
                                <h2><a href="#feature" class="title-head title-head">Delicious Food</a></h4>
                              
                            </div>  
                        <div class="grids-1  grids-effect-2">
                            <div class="color-white">
                                <span class="fa fa-thumbs-o-up"></span>
                            <h2><a href="#page" class=" title-head">Desert</a></h4>
                          
                        </div>
                    </div>
                  </div>
        </div>
</section>

<section class="w3l-call-to-action_9">
    <div class="call-w3">
        <div class="container text-center">
            <div class="title-head">
            <h3>Enjoy Our<br>
                Delicious Food</h3>
           
        </div>
          
              </div>
        </div>
    </div>
</section>

<section class="w3l-covers-18">
        <div class="covers-main ">
            <div class="container">
              <div class="main-titles-head ">
                <h3 class="header-name ">
                 
              
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

<section class="w3l-clients" id="client">
    <div class="main-w3 text-center">
        <div class="container">
            <div class="form-right-inf"> 
                <div class="form-inner-cont">
                  <div class="main-titles-head ">
                   
                  
                </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<?php
	include "homefooter.php";
?>