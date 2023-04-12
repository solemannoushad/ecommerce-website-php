<?php

    require('connection.php');

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

<?php

    include('loader.html');
    include('mobi_nav.php');

?>

<section id="smw-sec">

<!-- <?php

    $smwSql = "SELECT * FROM `mobiles`";
    $smwquery = mysqli_query($connection,$smwSql);

    while($row = mysqli_fetch_assoc($smwquery)){
        $smp_name = $row['item_name'];
        $smp_price = $row['item_price'];
        $img_no = $row['img_no'];
        $sno = $row['Sr.no'];
        $type = "smartphones";
        $qty = 1;

        echo '<div class="smw-main">
        <div class="smw-img cycle-slideshow" data-cycle-paused="true" data-cycle-slides=".slide-smw" data-cycle-pause-on-hover="false">
        <span class="cycle-prev"><i class="fas fa-angle-left"></i></span>
        <span class="cycle-next"><i class="fas fa-angle-right"></i></span> 
        <span class="cycle-pager"></span>';          

            for($i=1;$i<=$img_no;$i++){
                echo '<div class="slide-smw">
                <form action="order.php" method="POST">
                <input type="hidden" name="smwsrno" value="'.$sno.'">                             
                <input type="hidden" name="smwtype" value="'.$type.'">
                <input type="hidden" class="name" name="smwname" value="'.$smp_name.'">
                <button type="submit">
                <img id="smwSliderImg" src="images/smart phones/'.$smp_name.'/'.$smp_name.'-'.$i.'.jpg" alt="">
                </button>
                </form>
                </div>';
            }    
            $format = number_format($smp_price);       
        echo '</div>
        <div class="smw-det">
            <form action="order.php" method="post">  
                <input type="hidden" name="smwsrno" value="'.$sno.'">                             
                <input type="hidden" name="smwtype" value="'.$type.'"> 
                <input type="submit" name="smwname" value="'.$smp_name.'">     
            </form>
            
            <p>'.$format.' PKR</p>
                <input type="hidden" class="sno" name="smwsrnoCart" value="'.$sno.'">                             
                <input type="hidden" class="qty" name="qty" value="'.$qty.'">
                <input type="hidden" class="type" name="smwtypeCart" value="'.$type.'"> 
                <input type="hidden" class="name" name="smwnameCart" value="'.$smp_name.'">
                <input type="hidden" class="price" name="smwpriceCart" value="'.$smp_price.'">
                <button class="cartBtn">Add to Cart</button>
        </div>
    </div>';
    }

?> -->

<!-- <div class="smw-main">
        <div class="smw-img cycle-slideshow" data-cycle-slides=".slide-smw" data-cycle-pause-on-hover="false">

        <span class="cycle-prev"><i class="fas fa-angle-left"></i></span>
        <span class="cycle-next"><i class="fas fa-angle-right"></i></span> 
        <span class="cycle-pager"></span>
            <div class="slide-smw">
            <img src="images/smart watches/W3-1.jpg" alt="">
            </div>
            <div class="slide-smw">
            <img src="images/smart watches/W3-2.jpg" alt="">
            </div>
            <div class="slide-smw">
            <img src="images/smart watches/W3-3.jpg" alt="">
            </div>
        </div>
        <div class="smw-det">
            <form action="order.php" method="post">  
                <input type="submit" value="W26">     
            </form>
            <p>Price : 2500 PKR</p>
            <button>Add to Cart</button>
        </div>
    </div> -->

</section>

 







    <?php
    
            require("footer.html");
    
    ?>








    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="jquery/typed.js"></script>
    <script src="js/mobi.js"></script>
    <script src="all.min.js"></script>
    <script src="cycle/cycle2.js"></script>

    <script>
                $(".sampleSelect").click(function() {
        var open = $(this).data("isopen");
        if(open) {
            window.location.href = $(this).val()
        }

        $(this).data("isopen", !open);
});



    </script>


    <script>
        $(document).ready(function(){ 


            function loadSmwData(){
                $.ajax({
                    url : "Load.php",
                    type : "POST",
                    data : {load:true , cat:"mobiles"},
                    success : function(smwData){
                        $("#smw-sec").html(smwData);
                    }
                });
            }
            loadSmwData();

            $("#navSearchBar").on("keyup" , function(){
                var smwSearchVal = $("#navSearchBar").val();

                load = false;
                $.ajax({
                    url : "SearchLive.php",
                    type : "POST",
                    data : {smwSearchValue : smwSearchVal , scat:"mobiles"},
                    success : function(smwSearch){
                        $("#smw-sec").html(smwSearch);
                    }
                });

            });

            // var smwSliderImg = document.getElementById("smwSliderImg");
            // smwSliderImg.style.visibility = "visible";

            // var cartBtn = document.getElementsByClassName('cartBtn');
            // Array.from(cartBtn).forEach((element)=>{
            //     element.addEventListener("click",(e)=>{
            //         pn = e.target.parentNode;
            //         pnsno = pn.getElementsByTagName("input")[3].value;    
            //         pncat = pn.getElementsByTagName("input")[5].value;
            //         pnqty = pn.getElementsByTagName("input")[4].value;
            //         pnname = pn.getElementsByTagName("input")[6].value;
            //         pnprice = pn.getElementsByTagName("input")[7].value;
            //         $.ajax({
            //             url : "cart_add.php",
            //             type : "POST",
            //             data : {cartsno : pnsno , cartcat : pncat , cartname : pnname , cartqty : pnqty , cartprice : pnprice},
            //             success : function(cartdata){
            //                 add_cart_table();
            //             }
            //         });
            //     });
            // });

            // function add_cart_table(){
            //     $.ajax({
            //         url : "view_cart.php",
            //         type : "POST",
            //         success : function(data){
            //             $("#cartData").html(data);
            //         }
            //     });
            // }

            // $("#navSearchBar").on("keyup" , function(){
            //     var smwSearchVal = $("#navSearchBar").val();

            //     load = false;
            //     $.ajax({
            //         url : "smwSearch.php",
            //         type : "POST",
            //         data : {smwSearchValue : smwSearchVal},
            //         success : function(smwSearch){
            //             $("#smw-sec").html(smwSearch);
            //         }
            //     });

            // });
        });


    </script>




</body>

</html>