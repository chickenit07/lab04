<?php include("$_SERVER[DOCUMENT_ROOT]/lab04/config.php"); ?>

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

        .right input {
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
    <?php 
    include("./backToHomeForm.php")
    ?>
    <hr>
    <div class="left">
        Click on one, or Ctrl-click on multiple categories:
        <form action="./../controller/addBiz.php" method="POST">
            <select name='categories[]' id="categories" multiple size="8">
                <?php
                include("$_SERVER[DOCUMENT_ROOT]/lab04/controller/showAllCateList.php");
                ?>
            </select>
            <br>
            <br>
        </div>
        <div class="right">
            <label for="bName">Business name: </label>
            <input type="text" name="bName"><br><br>
            
            <label for="address">Address: </label>
        <input type="text" name="address"><br><br>
        
        <label for="city">City: </label>
        <input type="text" name="city"><br><br>
        
        <label for="telephone">Telephone: </label>
        <input type="text" name="telephone"><br><br>
        
        <label for="url">Url: </label>
        <input type="text" name="url"><br><br>
    </div>
    <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>