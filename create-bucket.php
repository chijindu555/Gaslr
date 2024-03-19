<?php
require 'vendor/autoload.php';
use Aws\S3\S3Client;
  
$bucket = 'bucketnouploads';
  
$s3Client = new S3Client([
    'version' => 'latest',
    'region' => 'YOUR_AWS_REGION',
    'credentials' => [
        'key'    => 'ACCESS_KEY_ID',
        'secret' => 'SECRET_ACCESS_KEY'
    ]
]);
 
try {
    $result = $s3Client->createBucket([
        'Bucket' => $bucket, // REQUIRED
    ]);
    echo "Bucket created successfully.";
} catch (Aws\S3\Exception\S3Exception $e) {
    // output error message if fails
    echo $e->getMessage();
}