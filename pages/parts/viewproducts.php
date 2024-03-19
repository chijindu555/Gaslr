<?php 
include '../includes/adminhead.php';
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
                                <h4 class="card-title">Available Products</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Product Image</th>
                                                <th>Product Name</th>
                                                <th>Quantity Available</th>
                                                <th>Unit Price</th>
                                                <th>Date Created</th>
                                                <th>Action</th>
                                            </tr>
                                            <?php
                                               $prd = showProducts(); foreach ($prd as $value){?>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $value['product_image'] ;?></td>
                                                <td><?= $value['product_name'];?></td>
                                                <td><?= $value['current_quantity'];?></td>
                                                <td><?php echo $value['price'];?></td>
                                                <td><?php echo $value['date_created'];?></td>
                                                <td class="product-action">
                                                    <span class="action-edit"><a href="editproduct.php?product_id=<?php echo $value['product_id'];?>"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><a href="deleteproduct.php?product_id=<?php echo $value['product_id'];?>"onclick="return confirm('Are you sure ?');">
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