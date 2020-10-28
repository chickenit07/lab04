<?php include("config.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Biz</title>
    <style>
        .left {
            float: left;
            width: 50%;
        }

        .right {
            float: right;
            width: 50%;
        }
        .right input{
            width: 100%;
            
        }
        #categories {
            margin-top: 10px;
            padding: 5px;
            width: 80%;
        }
    </style>

</head>

<body>
    <h1>Business Registration</h1>
    <div class="left">
        Click on one, or Ctrl-click on multiple categories:
        <form action="addBiz.php" method="POST">
            <select name='categories[]' id="categories" multiple size="8">
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
                ?>
            </select>
            <br>
            <br>
    </div>
    <div class="right">
        <label for="bName">Business name: </label>
        <input type="text" id="bName" name="bName"><br><br>

        <label for="address">Address: </label>
        <input type="text" id="address" name="address"><br><br>

        <label for="city">City: </label>
        <input type="text" id="city" name="city"><br><br>

        <label for="telephone">Telephone: </label>
        <input type="text" id="telephone" name="telephone"><br><br>

        <label for="url">Url: </label>
        <input type="text" id="url" name="url"><br><br>
    </div>
    <input type="submit" value="Submit">
    </form>
</body>
</html>