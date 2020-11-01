<?php
include("$_SERVER[DOCUMENT_ROOT]/lab04/config.php");

$categories = $_POST["categories"];
end($categories);
$lastKey = key($categories);

$bizName = $_POST['bName'];

// Check if form is submitted successfully 
if (isset($_POST["submit"])) {
    // Check if any option is selected 
    if ($categories != null && $bizName != null) {
        // Retrieving each selected option 
        $sqlAppendValue =" VALUES";
        foreach ($_POST['categories'] as $key => $category) {
            $categories[$key] = $category;
            $sqlAppendValue = $sqlAppendValue . " (@insert_ID," . $category . ")";
            if($key == $lastKey){
                $sqlAppendValue = $sqlAppendValue . ";";
            } else{
                $sqlAppendValue = $sqlAppendValue . ",";
            }
        }

        $sql = "
        INSERT INTO `businesses` (`name`, `address`, `city`, `telephone`, `url`) 
        VALUES ('"
            . $bizName . "', '"
            . $_POST["address"] . "', '"
            . $_POST["city"] . "', '"
            . $_POST["telephone"] . "', '"
            . $_POST["url"] . "')";
        $sqlInsertId = " SET @insert_ID = LAST_INSERT_ID(); ";
        $sqlAppend = "INSERT INTO `biz_categories` (`businessID`, `categoryID`)";

        $sqlAppendFull = $sqlAppend .$sqlAppendValue;

        mysqli_autocommit($conn,FALSE);
        mysqli_query($conn, $sql);
        mysqli_query($conn,$sqlInsertId);
        mysqli_query($conn,$sqlAppendFull);

        if (mysqli_commit($conn)) {
            echo "New record created successfully";
           } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
    } else{
        echo "Failed, insert all fields!";
    }
}
include("./../views/backToHomeForm.php");