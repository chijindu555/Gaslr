<?php
    include '../../controller.php';
    $d = $_GET['drivers_id'];
    $data1 = selectDriver($d);
    deleteDriver($d);
    header('location:viewdrivers.php');
?>