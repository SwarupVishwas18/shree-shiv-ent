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
    <link rel="stylesheet" href="search.css">
</head>
<body>
<?php

include 'panel.php';

?>
<div class="contents">
    <form action="allContact.php" role="search">
        <label for="search">Search for stuff</label>
        <input id="search" type="search" name="search" placeholder="Search..." autofocus required />
        <button type="submit">Go</button>    
      </form>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Comments</th>
        </tr>
        </thead>
        <tbody>
            <?php
                $str = "";
                if(isset($_GET['search'])){
                    $str = $_GET['search'];
                }
                include 'connect.php';
                $sql = "SELECT * FROM contact WHERE comments LIKE '%$str%'";
                $res = mysqli_query($conn, $sql)
                    or die("Error Occured While Retrieving Data!!");
                while($data=mysqli_fetch_assoc($res)){
                    $name = $data['name'];
                    $mail = $data['mail'];
                    $comments = $data['comments'];

            ?>
        <tr>
            <td><?php echo $name ?></td>
            <td><?php echo $mail ?></td>
            <td><?php echo $comments ?></td>

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