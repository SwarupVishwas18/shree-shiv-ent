 <?php
        if(isset($_GET['id'])){
            include 'connect.php';
            $id = $_GET['id'];
            $sql = "SELECT * FROM product WHERE id='$id'";

            $res = mysqli_query($conn, $sql)
                or die("Error Retriieving Data");
            
            while($data = mysqli_fetch_assoc($res)){
                $name = $data['name'];
                $img = $data['img'];
                $desc = $data['desc'];
                $cat = $data['cat'];
                $price = $data['price'];

            
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?></title>
    <link rel="stylesheet" href="nav2.css">
    <link rel="stylesheet" href="viewProd.css">
    <meta name="description" content="<?php echo $desc ?>">
    <meta name="keyword" content="<?php echo $name ?>,<?php echo $cat ?>">
<style>
@media screen and (max-width:900px) {
    .product-data{
        grid-template-columns: 1fr;
    }
    .product-img{
        text-align: center;
    }
    .product-img img{
        width:300px;
    }
}
</style>
</head>
<body>
<?php

include 'nav2.php';
?>

      
   
    <main class="arena">
       
        <div class="product-data">
            <div class="product-img">
                <img src="<?php echo $img ?>" width="600" alt="<?php echo $name ?>">
            </div>
            <div class="prod-info">
                <h1 class="product-name">
                <?php echo $name ?>
                </h1>
                <div class="data-extra">
                <?php echo $desc ?>

                </div>
                <div class="price">
                Category -                 <?php echo $cat ?>

            </div>
                 <a href='https://wa.me/918668442185?text=<?php echo "Hello, I am here to enquire about $name"; ?>' target="_b" class="buy">
                            ENQUIRE NOW
                    </a>
            </div>            
        </div>
    </main>
    <?php
            }
        }
    ?>
    <script src="./script.js"></script>
</body>
</html>