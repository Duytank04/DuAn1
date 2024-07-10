
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update account</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h3 {
            color: #333;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .row {
            margin: 20px 0;
        }

        .btn {
            padding: 10px 20px;
            background-color: rgb(105, 193, 234);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-reset {
            background-color: rgb(105, 193, 234);
        }
    </style>
</head>
<body>
    <?php
    if (is_array($bill)) {
        extract($bill);
    }
    ?>
    <br>
    <h3>Edit Status</h3>
    <form action="index.php?act=updatebill" method="post">
        <table>
            <tr>
                <th>Status</th>
                <td><input type="text" name="status" value="<?=$bill['bill_status']?>"></td>
            </tr>
            <tr>
                <th style="text-align:center;">0</th>
                <td><label for=""><b style="color:red;">New order</b></label></td>
            </tr>
            <tr>
                <th style="text-align:center;">1</th>
                <td><label for=""><b style="color:red;">Orders being delivered</b></label></td>
            </tr>
            <tr>
                <th style="text-align:center;">2</th>
                <td><label for=""><b style="color:red;">Orders delivered</b></label></td>
            </tr>
            <tr>
                <th style="text-align:center;">3</th>
                <td><label for=""><b style="color:red;">Old orders</b></label></td>
            </tr>
        </table>
        <div class="row">
            <input type="hidden" name="id" value="<?=$id?>">
            <input class="btn" name="capnhat" type="submit" value="update">
        </div>
    </form>
</body>
</html>