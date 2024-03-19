<?php
include 'dbconnect.php';
include 'functions.php';
session_start();
    
    if(isset($_POST['login'])){
    $uname= trim($_POST['username']);
    $pass= $_POST['password'];
    $check = checkLogin($uname,$pass);
    if(!empty($check)){
        $user_id = $check['user_id'];
        $_SESSION['user_id'] = $user_id;
        $role= $check['role'];

        // storing the new data in a session
        $_SESSION['userData'] = $check;
        if($role=='admin'){
            $newData = selectFromUserData($user_id);
            $_SESSION['loginData'] = $newData;
            header('location: pages/parts/adminhome.php');
        }
        elseif($role=='user'){
            $newData = selectFromUserData($user_id);
            $_SESSION['loginData'] = $newData;
            header('location:  pages/parts/user.php');
        }
        elseif($role=='driver'){
            $newData = selectFromUserData($user_id);
            $_SESSION['loginData'] = $newData;
            header('location: pages/parts/driver.php');
        }
    }
        else{
            header('location:login.php?message=error');
        }
}
?>