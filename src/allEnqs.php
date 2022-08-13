<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nav2.css">
    <link rel="stylesheet" href="panel.css">
    <link rel="stylesheet" href="table.css">
</head>
<body>
<?php

include 'panel.php';

?>
<div class="contents">
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Enquired Item</th>
        </tr>
        </thead>
        <tbody>
        <?php
                $str = "";
                if(isset($_GET['search'])){
                    $str = $_GET['search'];
                }
                include 'connect.php';
                $sql = "SELECT * FROM enquiries";
                $res = mysqli_query($conn, $sql)
                    or die("Error Occured While Retrieving Data!!");
                while($data=mysqli_fetch_assoc($res)){
                    $name = $data['name'];
                    $mail = $data['mail'];
                    $item = $data['item'];
                    $price = $data['price'];

            ?>
        <tr>
            <td><?php echo $name ?></td>
            <td><?php echo $mail ?></td>
            <td><?php echo $item ?></td>

        </tr>
        <?php   
                }
        ?>
        </tbody>
    </table>   
</div>
    <script src="./panel.js"></script>
</body>
</html>