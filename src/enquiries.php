<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSE-Enquiry Desk</title>
    <link rel="stylesheet" href="nav2.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>
<?php

include 'nav2.php';

if(isset($_GET['name']) && isset($_GET['price'])){
    $name = $_GET['name'];
    $price = $_GET['price'];
}
?>

      

    <!-- form -->
    <div class="cnt-form">
        <form class="form-cnnt" action="enqBack.php" method="post" autocomplete="off">
            <h1>Ask About Product Here</h1>
            <div class="error">
                    <?php
                        if(isset($_GET['error'])){
                            echo $_GET['error'];
                        }
                    ?>
                </div>
                <div class="success">
                <?php
                        if(isset($_GET['success'])){
                            echo "Succesfully add data!!";
                        }
                    ?>
                </div>
            <input class="cnt-input" type="text" placeholder="Enter Your Name" name="name"  id="name" required><br>
            <input class="cnt-input" type="email" placeholder="Enter Your Mail" name="mail"  id="name" required><br>
            <input class="cnt-input" type="text" value="<?php echo $name ?>" name="prod" readonly  id="name" required><br>

            <input type="submit" value="Submit" name="submit" class="sub">
        </form>
    </div>
    <script src="./script.js"></script>

</body>
</html>