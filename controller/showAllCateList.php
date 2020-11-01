<?php
    $sql = "SELECT categoryId, title 
    FROM business_service.categories";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<option value=" . $row["categoryId"] . ">"
                . $row["categoryId"] . " - " . $row["title"] .
                "</option>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
