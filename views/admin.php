<?php include("$_SERVER[DOCUMENT_ROOT]/lab04/config.php"); ?>
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
        include("$_SERVER[DOCUMENT_ROOT]/lab04/controller/showAllCateTable.php");
        include("./backToHomeForm.php")
    ?>

    <hr>
    <form action="./../controller/addCategory.php" method="POST" >
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