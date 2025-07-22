<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Online Food Delivery System</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/admin.jpg" height="40" width="40" alt="Login" />
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>     
                                        <hr class="my-2">
                                        <li><a href="page-login.php"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
						<a href="index.php">
							<i class="fa fa-tachometer"></i><span class="nav-text">Dashboard</span>
						</a>
					</li>
                   
                    <li>
                          <a href="Categories.php">
						  <i class="fa fa-list-alt"></i><span class="nav-text">Categories</span>
						  </a>
                    </li>
					
					<li>
						<a href="Order.php">
                            <i class="fa fa-cutlery"></i><span class="nav-text">Order</span>
                        </a>
                   
                    </li>
					
					
					<li>
                        <a href="Scheme.php">
                            <i class="fa fa-percent"></i><span class="nav-text">Schemes</span>
                        </a>
                        
                    </li>
					
                    <li>
                        <a href="Feedback.php">
                            <i class="fa fa-file-text"></i><span class="nav-text">Feedback</span>
                        </a>
                    </li>
					
					
                    <li>
                        <a href="CPayment.php">
                            <i class="fa fa-credit-card"></i><span class="nav-text">Payment</span>
                        </a>
                    </li>
					
					<li>
                        <a href="HealthReview.php">
                            <i class="fa fa-medkit"></i><span class="nav-text">Health Care Section</span>
                        </a>
                     
                    </li>
					
					<li>
                        <a href="UserRegisteration.php">
                            <i class="fa fa-registered"></i><span class="nav-text">Registered User</span>
                        </a>
                     
                    </li>
                    
                    <li>
                        <a href="page-login.php">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        
        