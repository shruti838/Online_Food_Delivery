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
                                <h4 class="card-title">HEALTH CARE FORM</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        
                                            <form class="mt-5 mb-5 login-input" action="index.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" name= "txt" class="form-control" placeholder="Enter Disease">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name= "avoidtxt" class="form-control" placeholder="Enter what to avoid">
                                    </div>
                                   
								<input type="submit" name="submitbtn" value="Submit" class="btn login-form__btn submit w-100" />
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