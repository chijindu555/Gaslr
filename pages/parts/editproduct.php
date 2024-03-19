<?php 
include '../includes/head.php';
include '../../controller.php';
$prd_id = $_GET['product_id'];
$py = selectProduct($prd_id);
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
                    <div class="col-md-6 col-12">
                        <div class="card" style="height: 373.406px;">
                            <div class="card-header">
                                <h4 class="card-title">Add a Product</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form form-horizontal" action="../../controller.php" method="post">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>Product Name</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="hidden" value='<?php echo $prd_id;?>' name='product_id'>
                                                            <input type="text" value='<?php echo $py[0]['product_name'];?>' id="first-name" class="form-control" name="productName" placeholder="Product Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>Quantity</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="number" value='<?php echo $py[0]['current_quantity'];?>' id="contact-info" class="form-control" name="quantity" placeholder="Current Quantity Available">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>Unit Price</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">N</span>
                                                                    </div>
                                                                    <input type="text" value='<?php echo $py[0]['price'];?>' class="form-control" name="price" placeholder="Unit Price" aria-label="Amount (to the nearest naira)">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">.00</span>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" name="updateProduct"  class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Update Product</button>
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
        </div>
    <!-- BEGIN: Vendor JS-->
    <?php
        include '../includes/script.php';
        ?>
        <!-- END: Page JS-->
</body>