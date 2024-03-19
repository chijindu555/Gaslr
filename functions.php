<?php
    function dd($data){
        die(var_dump($data));
    }
    function register($fname, $lname, $address, $pass, $num, $uname, $rolee){
        global $conn;
        $sql= "INSERT INTO users(first_name, last_name, haddress, password, mobile_number, user_name, role) 
        VALUES('$fname','$lname', '$address', '$pass', '$num','$uname', '$rolee')";
        $conn->exec($sql);
        $last_id= $conn->lastInsertId();
        return $last_id;

    }
    
    function checkLogin($uname,$pass) {
        global $conn;
        $sql= "SELECT * FROM users  WHERE user_name = '$uname' AND password = '$pass'";
        $result = $conn->query($sql);
        $last_id= $result->fetch(); 
        return $last_id;
        // die(var_dump($last_id));
    }
    function selectFromUserData($id){
        global $conn;
        $sql= "SELECT * FROM users WHERE user_id = '$id'";
        $exec = $conn->query($sql);
        $fetch= $exec->fetchAll();
        return $fetch;
    } 

    function checkFileRecords($pname) {
        global $conn;
        $sql= "SELECT * FROM product  WHERE product_name = '$pname' ";
        $exec = $conn->query($sql);
        $fetch= $exec->fetchAll();
        return $fetch;
    }

    function addProduct($pname, $qnty, $newfilename, $price) {
        // $pname=$pname;
        global $conn;
        $sql = "INSERT INTO product(product_name,current_quantity,product_image,price) VALUES(" . $conn->quote($pname) . ",'$qnty','$newfilename','$price')";
        $conn->exec($sql);
        $last_id= $conn->lastInsertId();
        return $last_id;
        }
    
    function showProducts() {
        global $conn;
        $sql= "SELECT * FROM product";
        $exec = $conn->query($sql);
        $fetch= $exec->fetchAll();
        return $fetch;
    }
    function deleteProduct($p) {
        global $conn;
        $sql= "DELETE FROM product WHERE product_id='$p'";
        $conn->exec($sql);
        $last_id= $conn->lastInsertId();
        return $last_id;
    }
    function selectProduct($p){
        global $conn;
        $sql= "SELECT * FROM product WHERE product_id = '$p'";
        $exec = $conn->query($sql);
        $fetch= $exec->fetchAll();
        return $fetch;
    }
    function updateProduct($pname, $qnty, $price, $p){
        global $conn;
        $sql= "UPDATE product SET product_name ='$pname', current_quantity ='$qnty', price ='$price', WHERE product_id='$p' ";
        $conn->exec($sql);
        $last_id= $conn->lastInsertId();
        return $last_id;
    }
    
    function selectUser($u){
        global $conn;
        $sql= "SELECT * FROM users WHERE user_id = $u";
        $exec = $conn->query($sql);
        $fetch= $exec->fetchAll();
        return $fetch;
    }
   
    function selectDriver($d){
        global $conn;
        $sql= "SELECT * FROM drivers WHERE drivers_id ='$d'";
        $exec = $conn->query($sql);
        $fetch= $exec->fetchAll();
        return $fetch;
    }
    function deleteDriver($d) {
        global $conn;
        $sql= "DELETE FROM drivers WHERE drivers_id='$d'";
        $conn->exec($sql);
        $last_id= $conn->lastInsertId();
        return $last_id;
    }
    function addDriver($drivfname, $drivlname, $drivmail, $license, $carType, $carColor){
        global $conn;
        $sql = "INSERT INTO drivers(first_name, last_name, email_add, drivers_license, vehicle_type, vehicle_colour) 
        VALUES('$drivfname', '$drivlname', '$drivmail', '$license', '$carType', '$carColor')";
        $conn->exec($sql);
        $last_id= $conn->lastInsertId();
        return $last_id;
    }
    function showDrivers() {
        global $conn;
        $sql= "SELECT * FROM drivers";
        $exec = $conn->query($sql);
        $fetch= $exec->fetchAll();
        return $fetch;
    }
    function updateDriver($drivfname, $drivlname, $drivmail, $license, $carType, $carColor, $d){
        global $conn;
        $sql= "UPDATE drivers SET first_name ='$drivfname', last_name ='$drivlname', email_add ='$drivmail', 
        drivers_license = '$license', vehicle_type = '$carType', vehicle_colour = '$carColor' WHERE drivers_id='$d' ";
        $conn->exec($sql);
        $last_id= $conn->lastInsertId();
        return $last_id;
    }
    function sendOrder($reqst, $cus, $qty, $ttl){
        global $conn;
        $sql = "INSERT INTO customer_request(product_id, user_id, quantity, total_price)
        VALUES('$reqst', '$cus', '$qty', '$ttl')";
        $conn->exec($sql);
        $last_id= $conn->lastInsertId();
        return $last_id;
    }
    function displayOrder(){
        global $conn;
        $sql= "SELECT * FROM customer_request";
        $exec = $conn->query($sql);
        $fetch= $exec->fetchAll();
        return $fetch;
    }
   function newTable(){
    global $conn;
    $sql = "SELECT product.product_name, product.price, customer_request.time, customer_request.quantity, 
    customer_request.total_price, users.first_name, users.last_name
    FROM customer_request
    INNER JOIN product
    ON product.product_id = customer_request.product_id
    INNER JOIN users ON users.user_id = customer_request.user_id";
    $exec = $conn->query($sql);
    $fetch= $exec->fetchAll();
    return $fetch;
   }
?>

