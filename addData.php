

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <link rel="stylesheet" href="nav2.css">
    <link rel="stylesheet" href="panel.css">
    <link rel="stylesheet" href="form.css">

    <!-- CKeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <style>
        form textarea{
            width: 80%;
                    }
</style>
</head>
<body>
<?php

include 'panel.php';

?>
    <div class="contents">
        <div class="cnt-form">
            <form class="form-cnnt" action="dataBack.php" method="post" enctype="multipart/form-data" autocomplete="off">
                <h1>Add Data</h1>
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
                <input class="cnt-input" type="text" placeholder="Enter Name Of Product" name="prodName" autofocus="on" id="prodName"><br>
                <input class="cnt-input" type="text" placeholder="Enter Price Range Of Product" name="priceRange"  id="priceRange"><br>
                <select name="cat">
                    <?php
                        include 'connect.php';

                        $sql = "SELECT * FROM categories";
                        $res = mysqli_query($conn, $sql)
                            or die("Error Retrievng Data!");
                        while($data=mysqli_fetch_assoc($res)){
                            $n = $data['name'];
                            echo "<option value='$n'>$n</option>";
                        }
                    ?>
                    </select><br>
                <input class="cnt-input" type="file" placeholder="Add Iamge" name="file"  id="file"><br>
                <textarea name="desc" id="desc"></textarea><br>

                <input type="submit" value="Submit" name="submit" class="sub">
            </form>
        </div>
    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#desc' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>
</html>