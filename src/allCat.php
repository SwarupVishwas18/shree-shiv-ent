<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - SSE</title>
    <link rel="stylesheet" href="nav1.css">
    <meta name="description" content="SSE Categories">
    <meta name="keyword" content="Categories, SSE, Shree Shiv">    
    <link rel="stylesheet" href="style.css">

</head>
<body>
        <!-- NAVBAR HTML CODE STARTS  -->
        <?php
            include 'nav1.php';
       ?>
        <!-- NAVBAR HTML CODE ENDS  -->

        <!-- MAIN SECTION STARTS HERE -->
            <main class="main">
            <!-- CATEGORY START HERE -->
                <section class="category">
                    <h1 class="subtitle">
                        All Categories
                    </h1>
                    <div class="arena">
                    <?php
                        include 'connect.php';
                        $sql = "SELECT * FROM categories ORDER BY id DESC";

                        $res = mysqli_query($conn, $sql)
                        or die("Error Retrieving Data");
                        $label = 0;

                        while($data = mysqli_fetch_assoc($res)){
                            $name = $data['name'];
                            $id = $data['id'];
                            $img = $data['img'];

                        
                        ?>

                        <a href="./byCat.php?id=<?php echo $id ?>">
                        <div class="box">
                            <div class="img">
                                <img src="<?php echo $img ?>" alt="<?php echo $name ?>" width="200">
                            </div>
                            <div class="name">
                            <?php echo $name ?>
                            </div>
                        </div>
                    </a>
                    <?php
                   
                            }
                    ?>
                        
                    </div>
                    

                </section>  
                </main>  
            <!-- CATEGORY ENDS HERE -->
        <footer>
            <div class="company">
                <div class="header">
                    Copyrights &copy; Shree Shiv Enterprises 2022
                </div>
                <div class="header">
                    Important Links
                </div>
                <ul class="data">
                <li><a href="./index.php">Home</a></li>
            <li><a href="./allProduct.php">Store</a></li>
            <li><a href="./index.php#contact-1">Contact Us</a></li>
                </ul>
            </div>
            <div class="developer">
                <div class="header">
                    Website Created By - Swarup Vishwas
                </div>
                <div class="header">
                    For Creating Similar Website
                </div>
                <address>
                    sdvishwas2312@gmail.com
                </address>
            </div>
        </footer>

        <script src="./script.js"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - SSE</title>
    <link rel="stylesheet" href="nav1.css">
    
    <link rel="stylesheet" href="style.css">

</head>
<body>
        <!-- NAVBAR HTML CODE STARTS  -->
        <?php
            include 'nav1.php';
       ?>
        <!-- NAVBAR HTML CODE ENDS  -->

        <!-- MAIN SECTION STARTS HERE -->
            <main class="main">
            <!-- CATEGORY START HERE -->
                <section class="category">
                    <h1 class="subtitle">
                        All Categories
                    </h1>
                    <div class="arena">
                    <?php
                        include 'connect.php';
                        $sql = "SELECT * FROM categories ORDER BY id DESC";

                        $res = mysqli_query($conn, $sql)
                        or die("Error Retrieving Data");
                        $label = 0;

                        while($data = mysqli_fetch_assoc($res)){
                            $name = $data['name'];
                            $id = $data['id'];
                            $img = $data['img'];

                        
                        ?>

                        <a href="./byCat.php?id=<?php echo $id ?>">
                        <div class="box">
                            <div class="img">
                                <img src="<?php echo $img ?>" alt="Product" width="200">
                            </div>
                            <div class="name">
                            <?php echo $name ?>
                            </div>
                        </div>
                    </a>
                    <?php
                   
                            }
                    ?>
                        
                    </div>
                    

                </section>  
                </main>  
            <!-- CATEGORY ENDS HERE -->
        <footer>
            <div class="company">
                <div class="header">
                    Copyrights &copy; Shree Shiv Enterprises 2022
                </div>
                <div class="header">
                    Important Links
                </div>
                <ul class="data">
                <li><a href="./index.php">Home</a></li>
            <li><a href="./allProduct.php">Store</a></li>
            <li><a href="./index.php#contact-1">Contact Us</a></li>
                </ul>
            </div>
            <div class="developer">
                <div class="header">
                    Website Created By - Swarup Vishwas
                </div>
                <div class="header">
                    For Creating Similar Website
                </div>
                <address>
                    sdvishwas2312@gmail.com
                </address>
            </div>
        </footer>

        <script src="./script.js"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - SSE</title>
    <link rel="stylesheet" href="nav1.css">
    
    <link rel="stylesheet" href="style.css">

</head>
<body>
        <!-- NAVBAR HTML CODE STARTS  -->
        <?php
            include 'nav1.php';
       ?>
        <!-- NAVBAR HTML CODE ENDS  -->

        <!-- MAIN SECTION STARTS HERE -->
            <main class="main">
            <!-- CATEGORY START HERE -->
                <section class="category">
                    <h1 class="subtitle">
                        All Categories
                    </h1>
                    <div class="arena">
                    <?php
                        include 'connect.php';
                        $sql = "SELECT * FROM categories ORDER BY id DESC";

                        $res = mysqli_query($conn, $sql)
                        or die("Error Retrieving Data");
                        $label = 0;

                        while($data = mysqli_fetch_assoc($res)){
                            $name = $data['name'];
                            $id = $data['id'];
                            $img = $data['img'];

                        
                        ?>

                        <a href="./byCat.php?id=<?php echo $id ?>">
                        <div class="box">
                            <div class="img">
                                <img src="<?php echo $img ?>" alt="Product" width="200">
                            </div>
                            <div class="name">
                            <?php echo $name ?>
                            </div>
                        </div>
                    </a>
                    <?php
                   
                            }
                    ?>
                        
                    </div>
                    

                </section>  
                </main>  
            <!-- CATEGORY ENDS HERE -->
        <footer>
            <div class="company">
                <div class="header">
                    Copyrights &copy; Shree Shiv Enterprises 2022
                </div>
                <div class="header">
                    Important Links
                </div>
                <ul class="data">
                <li><a href="./index.php">Home</a></li>
            <li><a href="./allProduct.php">Store</a></li>
            <li><a href="./index.php#contact-1">Contact Us</a></li>
                </ul>
            </div>
            <div class="developer">
                <div class="header">
                    Website Created By - Swarup Vishwas
                </div>
                <div class="header">
                    For Creating Similar Website
                </div>
                <address>
                    sdvishwas2312@gmail.com
                </address>
            </div>
        </footer>

        <script src="./script.js"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - SSE</title>
    <link rel="stylesheet" href="nav1.css">
    
    <link rel="stylesheet" href="style.css">

</head>
<body>
        <!-- NAVBAR HTML CODE STARTS  -->
        <?php
            include 'nav1.php';
       ?>
        <!-- NAVBAR HTML CODE ENDS  -->

        <!-- MAIN SECTION STARTS HERE -->
            <main class="main">
            <!-- CATEGORY START HERE -->
                <section class="category">
                    <h1 class="subtitle">
                        All Categories
                    </h1>
                    <div class="arena">
                    <?php
                        include 'connect.php';
                        $sql = "SELECT * FROM categories ORDER BY id DESC";

                        $res = mysqli_query($conn, $sql)
                        or die("Error Retrieving Data");
                        $label = 0;

                        while($data = mysqli_fetch_assoc($res)){
                            $name = $data['name'];
                            $id = $data['id'];
                            $img = $data['img'];

                        
                        ?>

                        <a href="./byCat.php?id=<?php echo $id ?>">
                        <div class="box">
                            <div class="img">
                                <img src="<?php echo $img ?>" alt="Product" width="200">
                            </div>
                            <div class="name">
                            <?php echo $name ?>
                            </div>
                        </div>
                    </a>
                    <?php
                   
                            }
                    ?>
                        
                    </div>
                    

                </section>  
                </main>  
            <!-- CATEGORY ENDS HERE -->
        <footer>
            <div class="company">
                <div class="header">
                    Copyrights &copy; Shree Shiv Enterprises 2022
                </div>
                <div class="header">
                    Important Links
                </div>
                <ul class="data">
                <li><a href="./index.php">Home</a></li>
            <li><a href="./allProduct.php">Store</a></li>
            <li><a href="./index.php#contact-1">Contact Us</a></li>
                </ul>
            </div>
            <div class="developer">
                <div class="header">
                    Website Created By - Swarup Vishwas
                </div>
                <div class="header">
                    For Creating Similar Website
                </div>
                <address>
                    sdvishwas2312@gmail.com
                </address>
            </div>
        </footer>

        <script src="./script.js"></script>
</body>
</html>