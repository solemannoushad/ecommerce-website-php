 <?php

require('connection.php');



?> 

<?php

if(isset($_POST['smwtype']) && $_POST['smwtype'] == "smartwatches"){
    $type = "smartwatches";
}
else if(isset($_POST['smwtype']) && $_POST['smwtype'] == "mobiles"){
    $type = "mobiles";    
}
else if(isset($_POST['smwtype']) && $_POST['smwtype'] == "accessories"){
    $type = "accessories";    
}


 $name = $_POST['smwname'];
 $srno = $_POST['smwsrno'];

                $selordersql = "SELECT * FROM `$type` WHERE `Sr.no` =  '$srno'";
                $selorderquery = mysqli_query($connection,$selordersql);
                if(!$selorderquery){
                    echo "Failed".mysqli_error($connection);
                }
                $selorderrow1 = mysqli_fetch_assoc($selorderquery);

                $smwprice = $selorderrow1['item_price'];
                $smw_img_no = $selorderrow1['img_no'];
                $format = number_format($smwprice);
                

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



<div id="imageModal">
    <div class="imgModalMain" id="MainMIng">
        <i class="fas fa-times" id="ExitModal"></i>
        <img src="" alt="" id="ModImg">
    </div>
</div>

    <?php
        include('loader.html');
        require("mobi_nav.php");


        ?>
    <?php
    
        if(isset($_POST['smwtype']) && $_POST['smwtype'] == "smartwatches"){
            echo '<section id="order-sec">
        <section id="circle-slider-sec">
            <div class="circle-slider-main">
                <div class="arrow-prev c-arrows"><i class="fas fa-chevron-circle-left" id="cslidePrev1"></i></div>
                <div class="sliderCircle sliderCircleLeft" id="cslideLeft">';
                    for($smwImg = 0;$smwImg < $smw_img_no;$smwImg++){
                        $un1 = $smwImg + 1;
                        echo '<img class="csImg" src="images/smartwatches/'.$name.'/'.$name.'-'.$un1.'.jpg" alt="">';
                    }
                echo '</div>
                <div class="sliderCircle sliderCircleCenter" id="cslideCenter">';
                    for($smwImg1 = 0;$smwImg1 < $smw_img_no;$smwImg1++){
                        $un2 = $smwImg1 + 1;
                        echo '<img class="csImg" src="images/smartwatches/'.$name.'/'.$name.'-'.$un2.'.jpg" alt="">';
                    }      
                echo '</div>
                <div class="sliderCircle sliderCircleRight" id="cslideRight">';
                    for($smwImg2 = 0;$smwImg2 < $smw_img_no;$smwImg2++){
                        $un3 = $smwImg2 + 1;
                        echo '<img class="csImg" src="images/smartwatches/'.$name.'/'.$name.'-'.$un3.'.jpg" alt="">';
                    } 
                echo '</div>
                <div class="arrow-next c-arrows"><i class="fas fa-chevron-circle-right" id="cslideNext1"></i></div>
            </div>
        </section>
        <div class="name_price">
            <div class="fnp">'.$name.'</div>
            <div class="snp">'.$format.' PKR</div>
        </div>
        <div id="order-right">
            <h2>Specifications</h2>';

                
                $num = mysqli_num_rows($selorderquery);
                if($num == 1){
                    $selordersql1 = "SELECT * FROM `smartwatches` WHERE `Sr.no` =  '$srno'";
                    $selorderquery1 = mysqli_query($connection,$selordersql1);
                    if(!$selorderquery1){
                        echo "Failed".mysqli_error($connection);
                    }
                    while($selorderrow = mysqli_fetch_assoc($selorderquery1)){
                        $price=$selorderrow['item_price'];
                        $item_desc=$selorderrow['item_desc'];
                        $color_no = $selorderrow['color_no'];
                        $smwClr = $selorderrow['color-2'];
                        echo "<div class='order-item-desc'>$item_desc</div>";
                    }
                }



                
            

            echo '<div id="order_right_desc">
                <div class="smw-clrs">';
                    for($csmw = 1;$csmw <= $color_no;$csmw++){
                        $selordersql2 = "SELECT * FROM `smartwatches` WHERE `Sr.no` =  '$srno'";
                        $selorderquery2 = mysqli_query($connection,$selordersql2);
                        $rowSql = mysqli_fetch_assoc($selorderquery2);
                        $smwClr = $rowSql['color-'.$csmw.''];
                        echo'<div class="smwClr">
                        <label for="smwClr'.$csmw.'" class="smwClrLabel" style="background-color:'.$smwClr.'"></label>
                        <input type="radio" name="smwClr" id="smwClr'.$csmw.'" class="clrInput">
                    </div>';
                    }
                    // <!-- <div class="smwClr">
                    //     <label for="smwClr1" class="smwClrLabel" style="background-color:black"></label>
                    //     <input type="radio" name="smwClr" id="smwClr1" class="clrInput">
                    // </div>
                    // <div class="smwClr">
                    //     <label for="smwClr2" class="smwClrLabel" style="background-color:red"></label>
                    //     <input type="radio" name="smwClr" id="smwClr2" class="clrInput">
                    // </div> -->
                echo '</div>
                <button>Buy</button>
                <button>Add to Cart</button>
            </div>



    </section>';
        }
        else if(isset($_POST['smwtype']) && $_POST['smwtype'] == "accessories"){
            echo '<section id="order-sec">
        <section id="circle-slider-sec">
            <div class="circle-slider-main">
                <div class="arrow-prev c-arrows"><i class="fas fa-chevron-circle-left" id="cslidePrev1"></i></div>
                <div class="sliderCircle sliderCircleLeft" id="cslideLeft">';
                    for($smwImg = 0;$smwImg < $smw_img_no;$smwImg++){
                        $un1 = $smwImg + 1;
                        echo '<img class="csImg" src="images/accessories/'.$name.'/'.$name.'-'.$un1.'.jpg" alt="">';
                    }
                echo '</div>
                <div class="sliderCircle sliderCircleCenter" id="cslideCenter">';
                    for($smwImg1 = 0;$smwImg1 < $smw_img_no;$smwImg1++){
                        $un2 = $smwImg1 + 1;
                        echo '<img class="csImg" src="images/accessories/'.$name.'/'.$name.'-'.$un2.'.jpg" alt="">';
                    }      
                echo '</div>
                <div class="sliderCircle sliderCircleRight" id="cslideRight">';
                    for($smwImg2 = 0;$smwImg2 < $smw_img_no;$smwImg2++){
                        $un3 = $smwImg2 + 1;
                        echo '<img class="csImg" src="images/accessories/'.$name.'/'.$name.'-'.$un3.'.jpg" alt="">';
                    } 
                echo '</div>
                <div class="arrow-next c-arrows"><i class="fas fa-chevron-circle-right" id="cslideNext1"></i></div>
            </div>
        </section>
        <div class="name_price">
            <div class="fnp">'.$name.'</div>
            <div class="snp">'.$format.' PKR</div>
        </div>
        <div id="order-right">
            <h2>Specifications</h2>';

            $num = mysqli_num_rows($selorderquery);
            if($num == 1){
                $selordersql1 = "SELECT * FROM `accessories` WHERE `Sr.no` =  '$srno'";
                $selorderquery1 = mysqli_query($connection,$selordersql1);
                if(!$selorderquery1){
                    echo "Failed".mysqli_error($connection);
                }
                while($selorderrow = mysqli_fetch_assoc($selorderquery1)){
                    $price=$selorderrow['item_price'];
                    $color_no = $selorderrow['color-no'];
                    $smwClr = $selorderrow['color-2'];
                    $col_no = $selorderrow['col_no'];
                    echo "<div class='order-item-desc'>
                        <div class='desc-ul'>
                            <ul>";
                            for($collv = 1;$collv<=$col_no;$collv++){
                                $col = $selorderrow['col-'.$collv.''];
                                echo "<li>$col</li>";
                            }
                            "</ul>
                        </div>
                    </div>";
                }
            }



                
            

            echo '<div id="order_right_desc">
                <div class="smw-clrs">';
                    for($csmw = 1;$csmw <= $color_no;$csmw++){
                        $selordersql2 = "SELECT * FROM `accessories` WHERE `Sr.no` =  '$srno'";
                        $selorderquery2 = mysqli_query($connection,$selordersql2);
                        $rowSql = mysqli_fetch_assoc($selorderquery2);
                        $smwClr = $rowSql['color-'.$csmw.''];
                        echo'<div class="smwClr">
                        <label for="smwClr'.$csmw.'" class="smwClrLabel" style="background-color:'.$smwClr.'"></label>
                        <input type="radio" name="smwClr" id="smwClr'.$csmw.'" class="clrInput">
                    </div>';
                    }
                    // <!-- <div class="smwClr">
                    //     <label for="smwClr1" class="smwClrLabel" style="background-color:black"></label>
                    //     <input type="radio" name="smwClr" id="smwClr1" class="clrInput">
                    // </div>
                    // <div class="smwClr">
                    //     <label for="smwClr2" class="smwClrLabel" style="background-color:red"></label>
                    //     <input type="radio" name="smwClr" id="smwClr2" class="clrInput">
                    // </div> -->
                echo '</div>
                <button>Buy</button>
                <button>Add to Cart</button>
            </div>



    </section>';
        }

        else if(isset($_POST['smwtype']) && $_POST['smwtype'] == 'mobiles'){
            echo '<section id="order-sec">
            <section id="circle-slider-sec">
                <div class="circle-slider-main">
                    <div class="arrow-prev c-arrows"><i class="fas fa-chevron-circle-left" id="cslidePrev1"></i></div>
                    <div class="sliderCircle sliderCircleLeft" id="cslideLeft">';
                        for($smwImg = 0;$smwImg < $smw_img_no;$smwImg++){
                            $un1 = $smwImg + 1;
                            echo '<img class="csImg" src="images/mobiles/'.$name.'/'.$name.'-'.$un1.'.jpg" alt="">';
                        }
                    echo '</div>
                    <div class="sliderCircle sliderCircleCenter" id="cslideCenter">';
                        for($smwImg1 = 0;$smwImg1 < $smw_img_no;$smwImg1++){
                            $un2 = $smwImg1 + 1;
                            echo '<img class="csImg" src="images/mobiles/'.$name.'/'.$name.'-'.$un2.'.jpg" alt="">';
                        }      
                    echo '</div>
                    <div class="sliderCircle sliderCircleRight" id="cslideRight">';
                        for($smwImg2 = 0;$smwImg2 < $smw_img_no;$smwImg2++){
                            $un3 = $smwImg2 + 1;
                            echo '<img class="csImg" src="images/mobiles/'.$name.'/'.$name.'-'.$un3.'.jpg" alt="">';
                        } 
                    echo '</div>
                    <div class="arrow-next c-arrows"><i class="fas fa-chevron-circle-right" id="cslideNext1"></i></div>
                </div>
            </section>
            <div class="name_price">
                <div class="fnp">'.$name.'</div>
                <div class="snp">'.$format.' PKR</div>
            </div>
            <div id="order-right">
                <h2>Specifications</h2>';
    
                    
                    $num = mysqli_num_rows($selorderquery);
                    if($num == 1){
                        $selordersql1 = "SELECT * FROM `mobiles` WHERE `Sr.no` =  '$srno'";
                        $selorderquery1 = mysqli_query($connection,$selordersql1);
                        if(!$selorderquery1){
                            echo "Failed".mysqli_error($connection);
                        }
                        while($selorderrow = mysqli_fetch_assoc($selorderquery1)){
                            $price=$selorderrow['item_price'];
                            $color_no = $selorderrow['color_no'];
                            $smwClr = $selorderrow['color-2'];
                            $col_no = $selorderrow['col_no'];
                            echo "<div class='order-item-desc'>
                                <div class='desc-ul'>
                                    <ul>";
                                    for($collv = 1;$collv<=$col_no;$collv++){
                                        $col = $selorderrow['col-'.$collv.''];
                                        echo "<li>$col</li>";
                                    }
                                    "</ul>
                                </div>
                            </div>";
                        }
                    }
    
    
    
                    
                
    
                echo '<div id="order_right_desc">
                    <div class="smw-clrs">';
                        for($csmw = 1;$csmw <= $color_no;$csmw++){
                            $selordersql2 = "SELECT * FROM `mobiles` WHERE `Sr.no` =  '$srno'";
                            $selorderquery2 = mysqli_query($connection,$selordersql2);
                            $rowSql = mysqli_fetch_assoc($selorderquery2);
                            $smwClr = $rowSql['color-'.$csmw.''];
                            echo'<div class="smwClr">
                            <label for="smwClr'.$csmw.'" class="smwClrLabel" style="background-color:'.$smwClr.'"></label>
                            <input type="radio" name="smwClr" id="smwClr'.$csmw.'" class="clrInput">
                        </div>';
                        }
                        // <!-- <div class="smwClr">
                        //     <label for="smwClr1" class="smwClrLabel" style="background-color:black"></label>
                        //     <input type="radio" name="smwClr" id="smwClr1" class="clrInput">
                        // </div>
                        // <div class="smwClr">
                        //     <label for="smwClr2" class="smwClrLabel" style="background-color:red"></label>
                        //     <input type="radio" name="smwClr" id="smwClr2" class="clrInput">
                        // </div> -->
                    echo '</div>
                    <button>Buy</button>
                    <button>Add to Cart</button>
                </div>
    
    
    
        </section>';
        }
    

    ?>

    

    <?php
        
            require("footer.html");
    
    ?>



    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="js/mySlider.js"></script>
    <script src="js/mobi.js"></script>
    <script src="all.min.js"></script>
    <script src="js/loader.js"></script>
    <script>
                    function add_cart_table(){
                $.ajax({
                    url : "view_cart.php",
                    type : "POST",
                    success : function(data){
                        $("#cartData").html(data);
                    }
                });
            }
            add_cart_table();
    </script>



</body>

</html>