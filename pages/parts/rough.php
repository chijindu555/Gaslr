
    $pname = $_POST['productName'];
    $qnty = $_POST['quantity'];
    $price = $_POST['price'];
    $prodimage = $_POST['upload'];

    $addprd = addProduct($pname, $qnty, $price, $prodimage);
    header('location: pages/parts/viewproducts.php');

    $targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$statusMsg = '';
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php }
?>



//upload file
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
//send customer order to db
elseif(isset($_POST['sendReq'])){
    $p_id = $_POST['checq'];
    $cus = $_POST['cusid'];
    $qty = $_POST['quant'];
    $ttl = $_POST['ttl_price'];

    // dd($qty);

    foreach($p_id as $key => $reqst){
        
    sendOrder($reqst, $cus, $qty[$key], $ttl[$key]);
    header('location: requestdelivery.php');
}
}

elseif(isset($_POST['updateProduct'])){
    $p = $_POST['product_id'];

    $pname = $_POST['productName'];
    $qnty = $_POST['quantity'];
    $price = $_POST['price'];

    updateProduct($pname, $qnty, $price, $p);
    header('location: pages/parts/viewproducts.php');
}

// File upload path




*/function Zt(e){return"number"==typeof e||a(e)&&"[object Number]"==n(e)}/**
   * <svg id="shepherdModalOverlayContainer" xmlns="http://www.w3.org/2000/svg">
   */function Qt(){const e=document.createElementNS(Fi,"svg");return e.setAttributeNS(null,"id",Ui.modalOverlay),e}/**
   * <mask id="shepherdModalMask" x="0" y="0" width="100%" height="100%">
   */function eo(){const e=document.createElementNS(Fi,"mask");return mo(e,{height:"100%",id:Ui.modalOverlayMask,width:"100%",x:"0",y:"0"}),e}/**
   *  <rect id="modalOverlayMaskRect" x="0" y="0" width="100%" height="100%" fill="#FFFFFF"/>
   */function to(){const e=document.createElementNS(Fi,"rect");return mo(e,{fill:"#FFFFFF",height:"100%",id:Ui.modalOverlayMaskRect,width:"100%",x:"0",y:"0"}),e}/**
   * <rect id="shepherdModalMaskOpening" fill="#000000"/>
   */function oo(){const e=document.createElementNS(Fi,"rect");return mo(e,{fill:"#000000",id:Ui.modalOverlayMaskOpening}),e}/**
   * <rect x="0" y="0" width="100%" height="100%" mask="url(#shepherdModalMask)"/>
   */function ro(){const e=document.createElementNS(Fi,"rect");return mo(e,{height:"100%",width:"100%",x:"0",y:"0"}),e.setAttribute("mask",`url(#${Ui.modalOverlayMask})`),e}/**