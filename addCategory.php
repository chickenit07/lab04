<?php
include("config.php");
$id =  $_POST["categoryID"];
$title =  $_POST["title"];
$description =  $_POST["description"];

if (isset($id) && isset($title) && isset($description)) {
} else {
    echo "Missing some fields!";
}

$sql = "INSERT INTO `categories` (`categoryId`, `title`, `description`) 
        VALUES ('" . $id .  "', '" . $title . "', '" . $description ."')";
$conn->query($sql);

header("Location: http://127.0.0.1/Lab06/admin.php");