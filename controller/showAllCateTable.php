<?php
    $sql = "SELECT categoryId, title, description FROM business_service.categories";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["categoryId"] . "</td>
                    <td>" . $row["title"] . "</td>  
                    <td>" . $row["description"] . "</td>
                    </tr>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>