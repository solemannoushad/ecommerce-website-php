<?php

require('connection.php'); 

    session_start();

    // if(isset($_POST['cartsno'])){


    //     $_SESSION['shopping_cart'] = true;
    //     $smw_sno = $_POST['cartsno'];
    //     $cat = $_POST['cartcat'];
    //     $_SESSION['cate'] = $cat;
    //     $_SESSION['cpsno'] = $smw_sno;
    //     $qty = 1;
    
    //     echo $cat;
    
    //     $sql = "SELECT * FROM `$cat` WHERE `Sr.no` = '$smw_sno'";
    //     $result = mysqli_query($connection , $sql);

    //     $num = mysqli_num_rows($result);
    //     if($num>0){
    //         $row = mysqli_fetch_assoc($result);
    //         $smw_name = $row['item_name'];
    //         $smw_price = $row['item_price'];
    //         $sno = $row['Sr.no'];

    //         $_SESSION['name'] = $smw_name;
    //         $_SESSION['price'] = $smw_price;
    //         $_SESSION['qty'] = $qty;

    //         $productcart = array($_SESSION['name'],$_SESSION['qty'],$_SESSION['price'],$sno,$cat);
    //         $productName = $_SESSION['name'].$smw_sno;
    //         $_SESSION['productName'] = $productName;
    //         $_SESSION[$productName] = $productcart;

    //     }
    
    //     if(!$result){
    //         echo "Failed". mysqli_error($connection);
    //     }
    //     else{
    //         echo "Success";
    //     }
    // }
    // else{
    //     $_SESSION['shopping_cart'] = false;
    // }








?>
