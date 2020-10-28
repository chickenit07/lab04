<?php
include("config.php");

$categories = $_POST["categories"];
$bizName = $_POST[$bName];

// Check if form is submitted successfully 
if (isset($_POST["submit"])) {
    // Check if any option is selected 
    if (isset($categories) && isset($bizName)) {
        // Retrieving each selected option 
        foreach ($_POST['categories'] as $key => $category) {
            $categories[$key] = $category;
        }
        
        $sql = " Begin;
        INSERT INTO `businesses` (`businessId`, `name`, `address`, `city`, `telephone`, `url`) 
        VALUES (NULL, '" 
        .$_POST["bName"]. "', '" 
        .$_POST["address"]. "', '"
        .$_POST["city"]. "', '"
        .$_POST["telephone"]. "', '"
        .$_POST["url"]. "') 
        INSERT INTO `biz_categories` (`businessID`, `categoryID`) 
        VALUES (LAST_INSERT_ID(), '" . $_POST["categories"]. "')";

}

}


// header("Location: http://127.0.0.1/Lab06/admin.php");