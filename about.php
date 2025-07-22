<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Online Food Delivery System </title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body id="home">
<section class=" w3l-header-4 header-sticky">
	<!--header-->
	<header id="site-header" class="fixed-top">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark stroke">
				<a class="navbar-brand" href="index.php">
					<span class="TASTE DELIGHT"></span> TASTE DELIGHT
				</a>
				<!-- if logo is image enable this   
			<a class="navbar-brand" href="#index.html">
				<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
			</a> -->
				<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
					<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					
				</button>
	  
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item @@home__active">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item @@services__active">
							<a class="nav-link" href="services.php">Menu</a>
						</li>
						<li class="nav-item @@contact__active">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item ml-4">
							<a class="nav-link phone" href="tel:9999999999"><span class="fa fa-phone"></span> +(21)-234-9999</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	  </header>
	<!--/header-->
</section>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!--/MENU-JS-->
<script>
	$(window).on("scroll", function () {
	  var scroll = $(window).scrollTop();
  
	  if (scroll >= 80) {
		$("#site-header").addClass("nav-fixed");
	  } else {
		$("#site-header").removeClass("nav-fixed");
	  }
	});
  
	//Main navigation Active Class Add Remove
	$(".navbar-toggler").on("click", function () {
	  $("header").toggleClass("active");
	});
	$(document).on("ready", function () {
	  if ($(window).width() > 991) {
		$("header").removeClass("active");
	  }
	  $(window).on("resize", function () {
		if ($(window).width() > 991) {
		  $("header").removeClass("active");
		}
	  });
	});
  </script>
  <!--//MENU-JS-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->


<!-- breadcrumbs -->
    <section class="w3l-inner-banner-main">
        <div class="about-inner about ">
            <div class="container">   
            <div class="breadcrumbs-sub">
                <ul class="breadcrumbs-custom-path">
                    <li class="right-side "><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
                    <li class="active ">About</li>
                </ul>
            </div>
</div>

   </div>
    </section>
<!-- breadcrumbs //-->

<section class="w3l-content-with-photo-4"  id="about">
    <div class="content-with-photo4-block ">
        <div class="container">
            <div class="main-titles-head ">
                <h3 class="header-name ">
					Why we are Best
                </h3>
                <p class="tiltle-para  ">

The core feature that makes it easy for you customers to order, savor,and share their experiences,the better the restaurant apps success would be.
.</p>
            </div>
            <div class="row">

                <div class="my-bio col-lg-5">
                    <h3>Best Restaurant food ideas & traditions from the whole world</h3>
        
            </div>
            <div class="col-lg-7">
                <div class="foot-best">
                <img src="assets/images/b7.jpg" alt="product" class="img-responsive about-me">
                <img src="assets/images/b8.jpg" alt="product" class="img-responsive about-me">
            </div>
            </div>
            </div>
    </div>
</div>
</section>
<section class="w3l-stats">
  <div class="main-w3 ">
      <div class="container">
          <div class="row align-items-center">

              <div class="col-lg-6 main-cont-wthree-fea text-center">
                  <div class="row">
                      <div class="col-6 pr-2">
                          <div class="grids-speci1">
                              <span class="fa fa-smile-o"></span>
                              <h3 class="title-spe">200+</h3>
                              <p>Happy Clients</p>
                          </div>
                      </div>
                      <div class="col-6 pl-2">
                          <div class="grids-speci1">
                              <span class="fa fa-cutlery"></span>
                              <h3 class="title-spe">25+</h3>
                              <p>Resturant</p>
                          </div>
                      </div>
                      <div class="col-6 pr-2 mt-4">
                          <div class="grids-speci1">
                              <span class="fa fa-users"></span>
                              <h3 class="title-spe">25+</h3>
                              <p>Chefs</p>
                          </div>
                      </div>
                      <div class="col-6 pl-2 mt-4">
                          <div class="grids-speci1">
                              <span class="fa fa-comments"></span>
                              <h3 class="title-spe">575+</h3>
                              <p>Dishes</p>
                          </div>
                      </div>
                  </div>
              </div>
              
          </div>

      </div>
  </div>
</section>
<section class="w3l-recent-work">
	<div class="jst-two-col">
		<div class="container">
<div class="row">

	<div class="my-bio col-lg-6">
		<h3>We Deliver Good Food
			Offer Great Smile</h3>
</div>
<div class="col-lg-6 ">
	<img src="assets/images/b4.jpg" alt="product" class="img-responsive about-me">
</div>
</div>
		</div>
	</div>
</section>
<section class="w3l-team-main-6" id="team">
	<!-- /team-grids -->
	<div class="team-content-page  ">
	</div>
	<!-- /team-grids -->
</section>
<section class="w3l-footer-29-main">
	<div class="footer-29 py-5 text-center">
	  <div class="container">
		<div class="footer-list-29 footer-1 ">
				<h2><a href="index.php" class="footer-logo"><span class="fa fa-cutlery"></span> TASTE DELIGHT </a></h2>
				
		  </div>
		<div class="row footer-top-29">

		  <div class="col-lg-4 col-md-4 col-sm-6 footer-list-29 footer-2 ">
				<h6 class="footer-title-29">Address</h6>
				<ul>
					<li><p><span class="fa fa-map-marker"></span> A.V.Parekh Technical Institue, Rajkot , Gujarat</p></li>
				</ul>
		  </div>
		  <div class="col-lg-4 col-md-4 col-sm-6 footer-list-29 footer-2 ">
				
		  </div>
		  <div class="col-lg-4 col-md-4 col-sm-6 footer-list-29 footer-2 ">
				<h6 class="footer-title-29">Contact Us</h6>
				<ul>
					<li><a href="tel:9999999999"><span class="fa fa-phone"></span>9999999999</a></li>
					<li><a href="mailto:corporate-mail@support.com" class="mail"><span class="fa fa-envelope-open-o"></span> tastedelight-mail@support.com</a></li>
				</ul>
		  </div>
		</div>
	</div>
  </section>
  <section class="w3l-footer-29-main w3l-copyright">
	<div class="container">
	  <div class=" bottom-copies text-center">
		<p class="copy-footer-29">© Taste Delight. All rights reserved | Designed by <a href="http://www.avpt.cteguj.in/">A.V.Parekh Technical Institute</a></p>
	  </div>
	</div>
  </section>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->
</body>

</html>
