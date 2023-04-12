<?php


    require('connection.php');
    


?> 


<?php



if(isset($_POST['fullName']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $fullName = $_POST['fullName'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $Comments = $_POST['Comments'];
    $quant = $_POST['quantity'];
    $clr = $_POST['clr'];
    $mobi_name = $_POST['mobname'];
    $ram = $_POST['mobram'];
    $internal_memory = $_POST['mobmem'];
    $mobile_price = $_POST['mobprice'];
    $ordersql = "INSERT INTO `userdetail` (`Name`, `Email`, `Address`, `Phone-no`, `City`, `Comment`, `Order_mobile_name`, `Order_mobile_ram`, `Order_mobile_memory`, `Order_mobile_color`, `Order_mobile_quantity`, `Order_mobile_price`, `Date and Time`) VALUES ('$fullName', '$Email', '$Address', '$Phone', '$City', '$Comments', '$mobi_name', '$ram', '$internal_memory', '$clr', '$quant', '$mobile_price', current_timestamp())";
    $orderquery = mysqli_query($connection,$ordersql);
    if(!$orderquery){
        echo 'Failed'. mysqli_error($connection);
    }

    $to = "solemannoushad31@gmail.com";
    $subject = "New Order";
    $message = "cust_name :" . $fullName;
    $headers = "From: mobimen12@gmail.com";

    if(mail($to,$subject,$message,$headers)){
        echo "Sent";
    }
    else{
        // echo "Failed to sent mail";
    }
}




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/mobi.css">
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <title>Mobi Men</title>
</head>

<body>
    <header>

    <?php
    
        include('mobi_nav.php');

    ?>


       

    



    <section id="cong-sec">
        <h2>CONGRAGULATIONS</h2>
        <p>Your order has been placed successfully . After getting your details your order will be delivered in 2-7 Days. Thank You for placing order.</p>
    </section>






    <?php
    
            require("contact.php");
            require("footer.html");
    
    ?>








    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="jquery/typed.js"></script>
    <script src="js/mobi.js"></script>
    <script src="all.min.js"></script>


</body>

</html>