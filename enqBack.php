<?php
    if(isset($_POST['submit'])){
        include 'connect.php';
        $name = $_POST['name'];
        $mail=$_POST['mail'];
        $prod = $_POST['prod'];

        $sql = "INSERT INTO enquiries VALUES(null,'$name','$mail','$prod', '')";

        mysqli_query($conn, $sql)
        or die("Error While Inserting Data".mysqli_error($conn));
        $to = "sdvishwas2312@gmail.com";
$subject = "Enquiry About $prod";
$txt = "Helllo, We Are $name and are here to enquire about $prod. Please contact immediately!";
$headers = "From: $mail";

$mail = mail($to,$subject,$txt,$headers)
or die("Error Occured");
if($mail){
    header("Location: success.php?success=1");
    ?>
    <script>
co();
}
</script
    <?php
}        
    }
?>

<script>
function co(){
window.open('https://wa.me/918668442185?text=<?php echo "Hello, I am here to enquire about $prod"; ?>', '_blank').focus();
}
</script>