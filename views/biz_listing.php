<?php include("$_SERVER[DOCUMENT_ROOT]/lab04/config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biz Lists</title>
    <style>
        .left {
            float: left;
            width: 40%;
        }

        .right {
            float: right;
            width: 60%;
        }

        .right input {
            width: 100%;
        }

        #cate_in_biz_list {
            margin-top: 10px;
            padding: 5px;
            width: 80%;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
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
    <h1>Business Listings</h1>
    <?php
    include("./backToHomeForm.php")
    ?>
    <hr>
    <div class="left">
        Click on a categories to check biz to do:
        <form action="#" method="POST">
            <select name='categories[]' id="cate_in_biz_list" size="15">
                <?php
                include("$_SERVER[DOCUMENT_ROOT]/lab04/controller/showAllCateList.php");
                ?>
            </select>
            <div>
                <input type="submit" name="submit" value="SHOW ALL">
            </div>
        </form>
    </div>
    <div class="right">
        <?php
        include("$_SERVER[DOCUMENT_ROOT]/lab04/controller/showAllBizTable.php");
        ?>
    </div>
</body>

</html>