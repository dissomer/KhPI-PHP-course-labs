<?php
if (isset($_FILES['fileUpload']) && $_FILES['fileUpload']['error'] == 0) {
    $fileName = $_FILES['fileUpload']['name'];
    $fileTmpName = $_FILES['fileUpload']['tmp_name'];
    $fileSize = $_FILES['fileUpload']['size'];
    $fileType = $_FILES['fileUpload']['type'];
    
    $allowedExtensions = ['image/png', 'image/jpg', 'image/jpeg'];
    if (in_array($fileType, $allowedExtensions) && $fileSize <= 2000000) { 
        $uploadDir = 'uploads/';
        
        if (file_exists($uploadDir . $fileName)) {
            $fileName = time() . '-' . $fileName; 
        }
        
        if (move_uploaded_file($fileTmpName, $uploadDir . $fileName)) {
            echo "File uploaded successfully!<br>";
            echo "File Name: $fileName<br>";
            echo "File Type: $fileType<br>";
            echo "File Size: " . round($fileSize / 1024, 2) . " KB<br>";
            echo "<a href='$uploadDir$fileName' download>Download File</a>";
        } else {
            echo "Error uploading file";
        }
    } else {
        echo "Invalid file type or file too large";
    }
} else {
    echo "No file uploaded";
}
?>
