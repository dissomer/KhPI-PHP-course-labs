<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $surname = trim($_POST["surname"]);

    if (!preg_match("/^[a-zA-Z]+$/", $name) || !preg_match("/^[a-zA-Z]+$/", $surname)) {
        echo "Field must only contain letters";
        exit;
    }

    echo "Hello, $name $surname!";
} else {
    echo "Error. Form wasn't send";
}
?>
