<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shree Shiv Enterprises</title>
    <link rel="stylesheet" href="nav1.css">
    <link rel="stylesheet" href="style.css">
    <style>
        
.success{
    color: green;
}
div.arena{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}

@media screen and (max-width:950px){
 div.arena{
    grid-template-columns: 1fr 1fr;
 }   
}

@media screen and (max-width:600px){
    div.arena{
       grid-template-columns: 1fr;
    }
}
        </style>
        
    
    

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
                        Category
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
                    if(++$label>=6){
                        break;
                    }
                            }
                    ?>
                    </div>
                    <div class="viewAll-btn">
                    <a href="./allCat.php"><button>View All</button></a>
                    </div>

                </section>    
            <!-- CATEGORY ENDS HERE -->
            <!-- PRODUCT STARTS HERE -->
                <section class="product">
                    <h1 class="subtitle">
                        Product
                    </h1>
                    <div class="arena">

                    <?php
                        include 'connect.php';
                        $sql = "SELECT * FROM product ORDER BY id DESC";

                        $res = mysqli_query($conn, $sql)
                        or die("Error Retrieving Data");
                        $label = 0;

                        while($data = mysqli_fetch_assoc($res)){
                            $name = $data['name'];
                            $id = $data['id'];
                            $img = $data['img'];

                        
                        ?>

                        <a href="./viewProduct.php?id=<?php echo $id ?>">
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
                    if(++$label>=6){
                        break;
                    }
                            }
                    ?>
                    </div>
                    <div class="viewAll-btn">
                    <a href="./allProduct.php"><button>View All</button></a>
                    </div>
                </section>   
            <!-- PRODUCT ENDS HERE -->
            

            <!-- CONTACT US PAGE STARTS HERE -->
            <section class="contact" id="contact-1">
                <h1 class="subtitle">
                    Contact Us
                </h1>
                <div class="cnt-panel">
                    <div class="online-cnt">
                        <div class="mob">
                            <div class="header">
                                Mobile Number
                            </div>
                            <ul class="data">
                                <li><a href="tel:+919881337305">+91 9881337305</a></li>
                                <li><a href="tel:+919881337307">+91 9881337307</a></li>
                            </ul>
                        </div>
                        <div class="email">
                            <div class="header">Email Id</div>
                            <ul class="data">
                                <li> <a href="mailto:shreeshiv113@gmail.com" target="_blank"> shreeshiv113@gmail.com </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offline-cnt">
                        <div class="header">Address</div>
                        <address>
                            Shree Shiv Enterprises
                            Kharabwadi
                            Sara City Road 
                            Kad comlex
                            Kharabwadi Chakan 
                            Tal- Khed 
                            Dist- Pune 410501
                        </address>
                        <div class="viewAll-btn">
                    <a href="https://www.google.com/maps/place/Shree+Shiv+Enterprises/@18.7685583,73.774154,19.83z/data=!4m19!1m13!4m12!1m4!2m2!1d73.7796749!2d18.7691924!4e1!1m6!1m2!1s0x3bc2b54356cb60f3:0x5cae9cd4f54f1c1!2sShree+Shiv+Enterprises,+Sawardari,+Maharashtra!2m2!1d73.7742512!2d18.7686796!3m4!1s0x3bc2b54356cb60f3:0x5cae9cd4f54f1c1!8m2!3d18.7686796!4d73.7742512" target="_blank"><button>See at Google Map</button></a>
                    </div>
                    </div>
                </div>
            </section>
            <section class="form-contact">
                <h1 class="cnt-title">
                    You Can Also Contact Us Here!
                </h1>
                <div class="cnt-form">
                    <div class="success">
                        <?php
                            if(isset($_GET['success'])){
                                echo "You have contacted Successfully!!";
                            }
                        ?>
                </div>
                    <form class="form-cnnt" action="conBack.php" method="post" autocomplete="off">
                        <input class="cnt-input" type="text" placeholder="Enter Your Name" name="name" id="name">
                        <input class="cnt-input" type="number" placeholder="Mobile Number" name="mob" id="mob">
                        <input class="cnt-input" type="email" placeholder="Enter Your Email" name="mail" id="mail">
                        <textarea name="comments" placeholder="Enter Your Thoughts.." id="comments" cols="30" rows="10"></textarea>
                        <input type="submit" value="Submit" name="submit" class="sub">
                    </form>
                </div>
            </section>
            <!-- CONTACT US PAGE ENDS HERE -->
        </main>
        <!-- MAIN SECTION ENDS HERE -->

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