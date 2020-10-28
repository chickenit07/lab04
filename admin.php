<?php include("config.php") ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 400px;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <h1> Category Administration </h1>
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
    <form action="addCategory.php" method="POST">
        <tr>
            <td><input type="number" name="categoryID" size="70%" /></td>
            <td><input type="text" name="title" size="70%" /></td>
            <td><input type="text" name="description" size="70%" /></td>
        </tr>
        <?php echo "</table>"; ?>
        <button type="submit"> Add Category</button>
    </form>

</body>

</html>