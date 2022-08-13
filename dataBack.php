<!-- Here Data Added Backed In Present -->

<?php
if(isset($_POST['submit'])){
    include 'connect.php';
    $name = $_POST['prodName'];
    $desc = $_POST['desc'];
    $cat = $_POST['cat'];
    $rate = $_POST['priceRange'];

    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
    $folder = "prod-img/".$filename;

    $qry = "INSERT INTO product(`name`, `desc`, price, img, cat) VALUES('$name', '$desc', '$rate', '$folder', '$cat')";


    mysqli_query($conn, $qry)
    or die(mysqli_error($conn));

    if(move_uploaded_file($tempname, $folder)){
        header("Location: ./addData.php?success=0");
    }
    else{
        header("Location: ./addData.php?error=Error Uploadig File");
    }
}
else{
    header("Location: ./addData.php?error=Enter the data..!!");
}


?>