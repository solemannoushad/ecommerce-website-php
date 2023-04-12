<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mobi.css">
    <title>Document</title>

</head>
<body>
    

<script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="jquery/typed.js"></script>
    <script src="js/mobi.js"></script>
    <script src="all.min.js"></script>
    <script src="cycle/cycle2.js"></script>
    <script>

var cartBtn = document.getElementsByClassName('cartBtn');
    Array.from(cartBtn).forEach((element)=>{
        element.addEventListener("click",(e)=>{
            pn = e.target.parentNode;
            pnsno = pn.getElementsByTagName("input")[3].value;    
            pncat = pn.getElementsByTagName("input")[5].value;
            pnqty = pn.getElementsByTagName("input")[4].value;
            pnname = pn.getElementsByTagName("input")[6].value;
            pnprice = pn.getElementsByTagName("input")[7].value;
            $.ajax({
                url : "cart_add.php",
                type : "POST",
                data : {cartsno : pnsno , cartcat : pncat , cartname : pnname , cartqty : pnqty , cartprice : pnprice},
                success : function(cartdata){
                    add_cart_table();
                }
            });
        });
    });
    add_cart_table();
    function add_cart_table(){
    $.ajax({ 
        url : "view_cart.php",
        type : "POST",
        success : function(data){
            $("#cartData").html(data);
        }
    });
}
</script>
</body>
</html>

<?php

require("connection.php");

if(isset($_POST['scat']) && $_POST['scat'] == 'smartwatches'){
    $cat = "smartwatches";
}
else if(isset($_POST['scat']) && $_POST['scat'] == 'mobiles'){
    $cat = "mobiles";
}
else if(isset($_POST['scat']) && $_POST['scat'] == 'accessories'){
    $cat = "accessories";
}

if(isset($_POST['smwSearchValue'])){
        
        $smwSearchVal = $_POST['smwSearchValue'];
        $smwSearchsql = "SELECT * FROM `$cat` WHERE `item_name` LIKE '%{$smwSearchVal}%'";
        $smwSearchresult = mysqli_query($connection,$smwSearchsql);
        $smwSearchoutput = "";
        $img = "";
        $qty = 1;
    
        $smwSearchnum = mysqli_num_rows($smwSearchresult);
        if($smwSearchnum > 0){
            while($smwSearchrow = mysqli_fetch_assoc($smwSearchresult)){
                $smw_name = $smwSearchrow['item_name'];
                $smw_price = $smwSearchrow['item_price'];
                $sno = $smwSearchrow['Sr.no'];
                $img_no = $smwSearchrow['img_no'];
                $type = $cat;
        
                $smwSearchoutput = '<div class="smw-main">
                <div class="smw-img cycle-slideshow" data-cycle-paused="true" data-cycle-slides=".slide-smw" data-cycle-pause-on-hover="false">
        
                <span class="cycle-prev"><i class="fas fa-angle-left"></i></span>
                <span class="cycle-next"><i class="fas fa-angle-right"></i></span> 
                <span class="cycle-pager"></span>';
        
                for($i=1;$i<=$img_no;$i++){
                    $smwSearchoutput .= '<div class="slide-smw">
                    <form action="order.php" method="POST">
                    <input type="hidden" name="smwsrno" value="'.$sno.'">                             
                    <input type="hidden" name="smwtype" value="'.$type.'">
                    <input type="hidden" class="name" name="smwname" value="'.$smw_name.'">
                    <button type="submit">
                    <img id="smwSliderImg" src="images/'.$cat.'/'.$smw_name.'/'.$smw_name.'-'.$i.'.jpg" alt="">
                    </button>
                    </form>
                    </div>';
                } 
                $smwSearchoutput .= '</div>
                <div class="smw-det">
                    <form action="order.php" method="post">  
                        <input type="hidden" name="smwsrno" value="'.$sno.'">                             
                        <input type="hidden" name="smwtype" value="'.$type.'"> 
                        <input type="submit" name="smwname" value="'.$smw_name.'">     
                    </form>
                    <p>'.$smw_price.' PKR</p>
                        <input type="hidden" class="sno" name="smwsrnoCart" value="'.$sno.'">                             
                        <input type="hidden" class="qty" name="qty" value="'.$qty.'">
                        <input type="hidden" class="type" name="smwtypeCart" value="'.$cat.'"> 
                        <input type="hidden" class="name" name="smwnameCart" value="'.$smw_name.'">
                        <input type="hidden" class="price" name="smwpriceCart" value="'.$smw_price.'">
                        <button class="cartBtn">Add to Cart</button>
                </div>
            </div>';
            echo $smwSearchoutput;
            }
        }
    
        else{
            echo "No Result Found";
        }
    }
?>