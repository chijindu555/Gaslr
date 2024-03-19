<?php
 include '../../controller.php';
 include '../includes/head.php';
 $drv_id = $_GET['drivers_id'];
 $dy = selectDriver($drv_id);
//  var_dump($dy);
//  die();
?>
<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

<!-- BEGIN: Header-->

<?php
include '../includes/adminheader.php';
?>

<?php
include '../includes/adminnav.php';
?>

<!-- END: Header-->

<!-- BEGIN: Main Menu-->
    <?php
        include '../includes/sidebar.php';
    ?>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Driver Information</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="../../controller.php" method="post">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group">
                                                <input type="hidden" value='<?php echo $drv_id; ?>' name='drivers_id'>
                                                <input type="text" value='<?php echo $dy[0]['first_name'];?>' id="first-name-column" class="form-control" placeholder="First Name" name="driverFirstName">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group">
                                                <input type="text" value='<?php echo $dy[0]['last_name'];?>'id="last-name-column" class="form-control" placeholder="Last Name" name="driverLastName">
                                            
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group">
                                                <input type="email" value='<?php echo $dy[0]['email_add'];?>' id="email-id-column" class="form-control" name="driverMail" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group">
                                                <input type="text"  value='<?php echo $dy[0]['drivers_license'];?>' id="country-floating" class="form-control" name="licenseNumber" placeholder="License Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group">
                                                <input type="text" value='<?php echo $dy[0]['vehicle_type'];?>' id="company-column" class="form-control" name="carType" placeholder="Car Type">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group">
                                                <input type="text" value='<?php echo $dy[0]['vehicle_colour'];?>' id="company-column" class="form-control" name="carColour" placeholder="Car Colour">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="updateDriver" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Update</button>
                                            <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- BEGIN: Vendor JS-->
<?php
    include '../includes/script.php';
    ?>
    <!-- END: Page JS-->
</body>

<!-- container-scroller -->
<?php include '../includes/script.php';?> 
<!-- plugins:js -->
<!-- End custom js for this page-->