<?php
    include '../../controller.php';
    $p = $_GET['product_id'];
    $data1 = selectProduct($p);
    deleteProduct($p);
    header('location:viewproducts.php');
?>