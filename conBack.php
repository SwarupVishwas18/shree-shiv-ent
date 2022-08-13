<?php
    if(isset($_POST['submit'])){
        include 'connect.php';
        $name = $_POST['name'];
        $mob=$_POST['mob'];
        $mail=$_POST['mail'];
        $comments = $_POST['comments'];

        $sql = "INSERT INTO contact VALUES(null,'$name','$mail','$comments')";

        mysqli_query($conn, $sql)
        or die("Error While Inserting Data".mysqli_error($conn));
        header("Location: index.php?success=1");
    }
?>