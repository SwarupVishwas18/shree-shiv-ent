<?php

if(isset($_POST['submit'])){
    if($_POST['pwd']=="HBP"){
        header("Location: allEnqs.php");
    }else{
        header("Location: adminLogin.php?error=Incorrect Password!");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="nav2.css">
    <link rel="stylesheet" href="form.css">
    </head>
<body>
    <!-- Navbar 2 -->
    <?php

    include 'nav2.php';
    ?>

    <!-- form -->
    <div class="cnt-form">
        <form class="form-cnnt" action="adminLogin.php" method="post" autocomplete="off">
            <h1>Admin Login</h1>
            <div class="error">
                <?php
                    if(isset($_GET['error'])){
                        echo $_GET['error'];
                    }
                ?>
            </div>
            <input class="cnt-input" type="password" placeholder="Password" name="pwd" autofocus="on" id="name">
            <br>
            <input type="submit" value="Submit" name="submit" class="sub">
        </form>
    </div>

    <!-- Scripts -->
    <script src="./script.js"></script>
</body>
</html><?php

if(isset($_POST['submit'])){
    if($_POST['pwd']=="HBP"){
        header("Location: allEnqs.php");
    }else{
        header("Location: adminLogin.php?error=Incorrect Password!");
    }
}

?>