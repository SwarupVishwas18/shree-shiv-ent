<?php
if(isset($_POST['submit'])){
    include 'connect.php';
    $name = $_POST['name'];

    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
    $folder = "cat-img/".$filename;

    $qry = "INSERT INTO categories(`name`, img) VALUES('$name', '$folder')";


    mysqli_query($conn, $qry);

    if(move_uploaded_file($tempname, $folder)){
        header("Location: ./addCat.php?success=0");
    }
    else{
        header("Location: ./addCat.php?error=Error Uploadig File");
    }
}
else{
    header("Location: ./addCat.php?error=Enter the data..!!");
}


?>