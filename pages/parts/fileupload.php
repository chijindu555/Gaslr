<?php 
 use AWS\s3\Exception\s3Exception
 require 'app/start.php';
 if(isset($_FILES['file'])) {
    $file = $_FILES['file'];

    //file details
    $name =$file['tmp_name'];
    $tmp_name = $file['tmp_name'];

    $extension = explode('.', $name);
    $extension = strtolower(end($extension));

    //temp details
    $key = md5(uniqid());
    $tmp_file_name = "{$key}.{$extension}";
    $tmp_file_path = "files/{stmp_file_name}";

    //move the file
    move_uploaded_file($tmp_name, $tmp_file_path);

    try {

        $s3=>putObject([
            'Bucket' =>$config['s3']['bucket'],
            'Key' => "uploads/{$name}",
            'Body'  => fopen($tmp_file_path, 'rb');
            'ACL' => 'public read'
        ]);

        //remove the file

        unlink( $tmp_file_path);

    } catch(s3Exception $e) {
        die("There was an error uploading that file.");
    }
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Upload</title>
    </head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php

?>
?>
</body>
</html>