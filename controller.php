<?php
include 'dbconnect.php';
include 'functions.php';

//register new user and head to login page
 if(isset($_POST['register'])){
     $fname = $_POST['firstName'];
     $lname = $_POST['lastName'];
     $uname = $_POST['username'];
     $address = $_POST['address'];
     $num = $_POST['phoneNumber'];
     $email = $_POST['email'];
     $pass = $_POST['password'];
     $rolee = $_POST['chooseAccountType']; 

     $reg = register($fname, $lname, $address, $pass, $num,$uname, $rolee);
    //  dd($reg);
     if($reg){
        header('location: login.php');
     }else{
        header('location: register.php');
     }
 }

 
//add product
if(isset($_POST['addProduct'])){
    $pname =$_POST['productName'];
    $qnty = $_POST['quantity'];
    $price = $_POST['price'];


    //upload file
    $target_dir = "uploads/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir);
    }
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $temp = explode(".", $_FILES["fileToUpload"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    // var_dump($newfilename);
    // die();
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($newfilename)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    //check if record already exists
    if (checkFileRecords($pname)) {
        echo "Sorry, file already exists";
        $uploadOk = 3;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$newfilename)) {
            $addProduct = addProduct($pname, $qnty, $newfilename, $price);
            header('location: pages/parts/viewproducts.php');
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
   
}


//update product info

//add driver to drivers table
elseif(isset($_POST['addDriver'])){
    $drivfname = $_POST['driverFirstName'];
    $drivlname = $_POST['driverLastName'];
    $drivmail = $_POST['driverMail'];
    $license = $_POST['licenseNumber'];
    $carType = $_POST['carType'];
    $carColor = $_POST['carColour'];

    $adddriver = addDriver($drivfname, $drivlname, $drivmail, $license, $carType, $carColor);
    header('location: pages/parts/viewdrivers.php');
}

//update driver info
elseif(isset($_POST['updateDriver'])){
    $d = $_POST['drivers_id'];

    $drivfname = $_POST['driverFirstName'];
    $drivlname = $_POST['driverLastName'];
    $drivmail = $_POST['driverMail'];
    $license = $_POST['licenseNumber'];
    $carType = $_POST['carType'];
    $carColor = $_POST['carColour'];

    updateDriver($drivfname, $drivlname, $drivmail, $license, $carType, $carColor, $d);
    header('location: pages/parts/viewdrivers.php');
}


?>




