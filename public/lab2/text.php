<?php
if (isset($_POST['textInput'])) {
    $text = $_POST['textInput'];
    
    file_put_contents('log.txt', $text . PHP_EOL, FILE_APPEND);
    
    $logContent = file_get_contents('log.txt');
    echo "<h2>Log text: </h2>";
    echo nl2br($logContent); 
} else {
    echo "No text";
}
?>

