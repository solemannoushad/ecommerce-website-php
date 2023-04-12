<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mobi.css">
    <title>Document</title>

</head>
<body>

<!-- <select name="clr" id="clr">
    <option value="1">1</option>
    <option value="1">2</option>
    <option value="1">3</option>
    <option value="1">4</option>
    <option value="1">5</option>
    <option value="1">6</option>
    <option value="1">7</option>
    <option value="1">8</option>
    <option value="1">9</option>
    <option value="1">10</option>
</select> -->
    

<script src="jquery/jquery-3.5.1.min.js"></script> 
    <script src="jquery/typed.js"></script>
    <script src="js/mobi.js"></script>
    <script src="js/loader.js"></script>
    <script src="all.min.js"></script>
    <script src="cycle/cycle2.js"></script>
    <script src="all_cart.js"></script>
    <script>

// var cartBtn = document.getElementsByClassName('cartBtn');
//             Array.from(cartBtn).forEach((element)=>{
//                 element.addEventListener("click",(e)=>{
//                     pn = e.target.parentNode;
//                     pnsno = pn.getElementsByTagName("input")[3].value;    
//                     pncat = pn.getElementsByTagName("input")[5].value;
//                     $.ajax({
//                         url : "cart_add.php",
//                         type : "POST",
//                         data : {cartsno : pnsno , cartcat : pncat},
//                         success : function(cartdata){
//                             add_cart_table();
//                         }
//                     });
//                 });
//             });
            
//             function add_cart_table(){
//                 // deleteCart();
//                 $.ajax({
//                     url : "view_cart.php",
//                     type : "POST",
//                     success : function(data){
//                         $("#cartData").html(data);
//                     }
//                 });
//             }

//             var deleteCartPro = document.getElementsByClassName("deleteCartPro");
// Array.from(deleteCartPro).forEach((element)=>{
//     element.addEventListener("click" , (e)=>{
//         section = e.target.parentNode.parentNode.parentNode;
//         name = section.getElementsByTagName("input")[0].value;
//         sno = section.getElementsByTagName("input")[1].value;
//         cat = section.getElementsByTagName("input")[2].value;
//             $.ajax({
//                 url: "new.php",
//                 type: "POST",
//                 data: {proName: name,proSno: sno,proCat: cat},
//                 success: function(data){
//                     alert(data);
//                     add_cart_table();
//                 }
//             });
//     });
//   });
    </script>
        <script src="cartDelete.js"></script>
</body>
</html>

<?php

    require("connection.php");

    if(isset($_POST['cat']) && $_POST['cat'] == 'smartwatches'){
        $cat = "smartwatches";
    }
    else if(isset($_POST['cat']) && $_POST['cat'] == 'mobiles'){
        $cat = "mobiles";
    }
    else if(isset($_POST['cat']) && $_POST['cat'] == 'accessories'){
        $cat = "accessories";
    }



        $smwLoadsql = "SELECT * FROM `$cat`";
        $smwLoadresult = mysqli_query($connection,$smwLoadsql);
        $output = "";
        $i="";
    
        $smwLoadnum = mysqli_num_rows($smwLoadresult);
        if($smwLoadnum > 0){
            while($row = mysqli_fetch_assoc($smwLoadresult)){
                $smw_name = $row['item_name'];
                $smw_price = $row['item_price'];
                $img_no = $row['img_no'];
                $sno = $row['Sr.no'];
                $type = $cat;
                $qty = 1;
                $format_price = number_format($smw_price);
    
                $output = '<div class="smw-main">
                <div class="smw-img cycle-slideshow" data-cycle-paused="true" data-cycle-slides=".slide-smw" data-cycle-pause-on-hover="false">
        
                <span class="cycle-prev"><i class="fas fa-angle-left"></i></span>
                <span class="cycle-next"><i class="fas fa-angle-right"></i></span> 
                <span class="cycle-pager"></span>';
        
                for($i=1;$i<=$img_no;$i++){
                    $output .= '<div class="slide-smw">
                    <form action="order.php" method="POST">
                    <input type="hidden" name="smwsrno" value="'.$sno.'">                             
                    <input type="hidden" name="smwtype" value="'.$type.'">
                    <input type="hidden" class="name" name="smwname" value="'.$smw_name.'">
                    <button type="submit">
                    <img id="smwSliderImg" src="images/'.$cat.'/'.$smw_name.'/'.$smw_name.'-'.$i.'.jpg" alt="'.$smw_name.'">
                    </button>
                    </form>
                    </div>';
                }
                $output .= '</div>
                <div class="smw-det">
                    <form action="order.php" method="post">  
                        <input type="hidden" name="smwsrno" value="'.$sno.'">                             
                        <input type="hidden" name="smwtype" value="'.$type.'"> 
                        <p class="na">
                        <input type="submit" name="smwname" value="'.$smw_name.'">
                        </p>     
                    </form>
                    <p>'.$format_price.' PKR</p>
                        <input type="hidden" class="sno" name="smwsrnoCart" value="'.$sno.'">                             
                        <input type="hidden" class="qty" name="qty" value="'.$qty.'">
                        <input type="hidden" class="type" name="smwtypeCart" value="'.$cat.'"> 
                        <input type="hidden" class="name" name="smwnameCart" value="'.$smw_name.'">
                        <input type="hidden" class="price" name="smwpriceCart" value="'.$smw_price.'">
                        <button class="cartBtn">Add to Cart</button>
                </div>
            </div>';
            echo $output;
            }
        }





?>