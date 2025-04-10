<?php
$directory = 'uploads/'; 
$files = array_diff(scandir($directory), array('..', '.')); 

echo "<h2>List of uploaded files: </h2>";
if (empty($files)) {
    echo "Files were not found";
} else {
    echo "<ul>";
    foreach ($files as $file) {
        echo "<li><a href='$directory$file' download>$file</a></li>";
    }
    echo "</ul>";
}
?>
