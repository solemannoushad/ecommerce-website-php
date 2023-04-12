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
    var loader = document.getElementById("preloader");
    function preloader(){
    loader.style.display="none";
}
</script>
    <script>
        $(document).ready(function(){


            function loadSmwData(){
                $.ajax({
                    url : "Load.php",
                    type : "POST",
                    data : {load:true , cat:"accessories"},
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
                    data : {smwSearchValue : smwSearchVal , scat:"accessories"},
                    success : function(smwSearch){
                        $("#smw-sec").html(smwSearch);
                    }
                });

            });

            var smwSliderImg = document.getElementById("smwSliderImg");
            smwSliderImg.style.visibility = "visible";

        //     var cartBtn = document.getElementsByClassName('cartBtn');
        //     Array.from(cartBtn).forEach((element)=>{
        //         element.addEventListener("click",(e)=>{
        //             console.log("c-clicked");
        //             pn = e.target.parentNode;
        //             pnsno = pn.getElementsByTagName("input")[3].value;    
        //             pncat = pn.getElementsByTagName("input")[5].value;
        //             $.ajax({
        //                 url : "cart_add.php",
        //                 type : "POST",
        //                 data : {cartsno : pnsno , cartcat : pncat},
        //                 success : function(cartdata){
        //                     add_cart_table();
        //                 }
        //             });
        //         });
        //     });

        //     function add_cart_table(){
        //         $.ajax({
        //             url : "view_cart.php",
        //             type : "POST",
        //             success : function(data){
        //                 $("#cartData").html(data);
        //             }
        //         });
        //     }
        });


    </script>




</body>

</html>