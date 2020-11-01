<?php
try {
    if (isset($_POST['submit'])) {
        $category = $_POST['categories'];
        $categoryID = $category[0];
    } else
        $categoryID = "";
} catch (Exception $e) {
    $categoryID = "";
}

$sql = "SELECT b.businessID, b.name as Biz_Name, b.address, b.city, b.telephone, b.url, 
    GROUP_CONCAT(c.title) as Category_Name 
    from businesses as b, categories as c, biz_categories as bc 
    WHERE b.businessId = bc.businessID 
    AND  bc.categoryID = c.categoryId 
    AND  bc.categoryID = "
    . $categoryID .
    " GROUP BY b.businessId";

// echo $sql;
$result = $conn->query($sql);
if (isset($_POST["submit"])) {
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Business ID</th>
                    <th>Biz Name </th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Tel</th>
                    <th>Category</th>
                </tr>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["businessID"] . "</td>
                    <td>" . $row["Biz_Name"] . "</td>  
                    <td>" . $row["address"] . "</td>
                    <td>" . $row["city"] . "</td>
                    <td>" . $row["url"] . "</td>  
                    <td>" . $row["Category_Name"] . "</td>
                    </tr>";
        }
    } else {
        echo "0 results";
    }
}
