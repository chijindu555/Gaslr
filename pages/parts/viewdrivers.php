<?php 
include '../includes/head.php';
include '../../controller.php';
?>
<!-- END: Head-->

<!-- BEGIN: Body-->
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
                <div class="row" id="table-hover-row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Registered Drivers</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email Address</th>
                                                <th>License Number</th>
                                                <th>Vehicle Type</th>
                                                <th>Vehicle Colour</th>
                                                <th>Date Employed</th>
                                                <th>Action</th>
                                            </tr>
                                            <?php
                                                $drv = showDrivers(); $x=1; foreach ($drv as $value){?>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $x++;?></td>
                                                <td><?= $value['first_name'];?></td>
                                                <td><?= $value['last_name'];?></td>
                                                <td><?php echo $value['email_add'];?></td>
                                                <td><?php echo $value['drivers_license'];?></td>
                                                <td><?php echo $value['vehicle_type'];?></td>
                                                <td><?php echo $value['vehicle_colour'];?></td>
                                                <td><?php echo $value['date_employed'];?></td>
                                                <td class="product-action">
                                                    <span class="action-edit"><a href="editdrivers.php?drivers_id=<?php echo $value['drivers_id'];?>"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><a href="deletedrivers.php?drivers_id=<?php echo $value['drivers_id'];?>"onclick="return confirm('Are you sure ?');">
                                                    <i class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                                <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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