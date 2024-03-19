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


    <!-- BEGIN: Main Menu-->
    <?php include '../includes/sidebar.php'?>
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
                <div class="card" style="height: 443.406px;">
                    <div class="card-header">
                        <h4 class="card-title">Add a Product</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form id="imageForm" class="form form-horizontal" action="../../controller.php" method="post" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Product Name</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="first-name" class="form-control" name="productName" placeholder="Product Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Quantity</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input required type="number" id="contact-info" class="form-control" name="quantity" placeholder="Current Quantity Available">
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
                                                            <input required type="text" class="form-control" name="price" placeholder="Unit Price" aria-label="Amount (to the nearest naira)">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">.00</span>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <?php// file upload?>
                                        <div class="col-12">
                                        <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Product image</span>
                                                </div>
                                                <div class="col-md-8">
                                                <fieldset class="form-group">
                                                    <input required id="imageInput" type="file" name="fileToUpload" accept="image/*">
                                                </fieldset> 
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                        <div class="col-md-8 offset-md-4">
                                            <button name="addProduct" type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Add Product</button>
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
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
       
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <?php include '../includes/userscript.php'?>
    <!-- END: Page JS-->

</body>
    <!-- BEGIN: Vendor JS-->
    <?php include '../includes/script.php';?>
    <script src="../../AWS/front/index.js"></script>
        <!-- END: Page JS-->
</body>