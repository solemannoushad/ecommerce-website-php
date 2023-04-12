<?php

require('connection.php')




?>

<?php

    if(!isset($_GET['tabcomp']) || $_GET['tabcomp'] == 'ipad'){
        $gettabcompany = 'ipad';
    }
    else if(isset($_GET['tabcomp']) && $_GET['tabcomp'] == 'samsung'){
        $gettabcompany = 'samsung';
    }
    else if(isset($_GET['tabcomp']) && $_GET['tabcomp'] == 'qtab'){
        $gettabcompany = 'qtab';
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


    



        <section id="home-sec">
            <div id="left-home">
                <h1>mobi <span>men</span> </h1>
                <h3>We offer <span class="animate"></span></h3>
                <p>We are here to provide you brand new models of smartphones, smart watches, accessories and much more
                    on wholesale price at your doorstep with no delivery charges.</p>
                <h4>Follow us on :</h4>
                <div id="buttons">
                    <a href="https://web.facebook.com/the.Mobi.men12/" target="_blank">Facebook</a>
                    <a href="https://www.instagram.com/the.mobi.men/" target="_blank">Instagram</a>
                </div>
            </div>
            <div id="right-home">
                <img src="images/mobiman.jpg" alt="">
            </div>
        </section>
        <span id="span"></span>
    </header>



    <div id="search">
        <div id="left">
            <select name="Category" id="category" class="select sampleSelect">
                <option value="/Mobi Men/tab.php#span" >Tablets</option>
                <option value="/Mobi Men/mobi.php#span">Mobile Phones</option>
                <option value="/Mobi Men/smw.php#span">Smart Watches</option>
                <option value="/Mobi Men/acc.php#span">Accessories</option>
            </select>
        </div>
        <div id="center">
            <div class="s-btn">
                <form action="">
                <button type="submit">
                    <i class="fas fa-search"></i>
                </button>
                    <input type="search" name="" id="" placeholder="Search">
                </form>
            </div>
        </div>
        <div id="right">
        <?php
            
            if(!isset($_GET['tabcomp']) || $_GET['tabcomp'] == 'ipad'){

                echo '<select name="brandmobi" id="brandmobi" class="select mobileSelect">
                    <option value="/Mobi Men/tab.php?tabcomp=ipad#span">Ipad</option>
                    <option value="/Mobi Men/tab.php?tabcomp=samsung#span">Samsung</option>
                    <option value="/Mobi Men/tab.php?tabcomp=qtab#span">Qtab</option>
                </select>';
            }
            else if(isset($_GET['tabcomp']) && $_GET['tabcomp'] == 'samsung'){
                echo '<select name="brandmobi" id="brandmobi" class="select mobileSelect">
                <option value="/Mobi Men/tab.php?tabcomp=samsung#span">Samsung</option>
                <option value="/Mobi Men/tab.php?tabcomp=ipad#span">Ipad</option>
                    <option value="/Mobi Men/tab.php?tabcomp=qtab#span">Qtab</option>
                </select>';            
            }
            else if(isset($_GET['tabcomp']) && $_GET['tabcomp'] == 'qtab'){
                echo '<select name="brandmobi" id="brandmobi" class="select mobileSelect">
                <option value="/Mobi Men/tab.php?tabcomp=qtab#span">Qtab</option>
                <option value="/Mobi Men/tab.php?tabcomp=samsung#span">Samsung</option>
                <option value="/Mobi Men/tab.php?tabcomp=ipad#span">Ipad</option>
                </select>';            
            }
            
            
            ?>

        </div>
    </div>





    <section id="second">
        <?php

        if(!isset($_GET['tabcomp']) || $_GET['tabcomp'] == $gettabcompany){
            $selectsql = "SELECT * FROM `tablets` WHERE `item_company` = '$gettabcompany'";
            $selectquery = mysqli_query($connection,$selectsql);
            
            if(!$selectquery){
                echo "Failed" . mysqli_connect_error($connection);
            }
            $selectnum = mysqli_num_rows($selectquery);
            if($selectnum!=0){
                while($selectrow = mysqli_fetch_assoc($selectquery)){
                    $tablet_id = $selectrow['Sr.no'];
                    $tablet_name = $selectrow['item_name'];
                    $color_no = $selectrow['color_no'];
                    $price = $selectrow['item_price'];
                    $format = number_format($price);
                    echo '<div class="haha">
                    <div class="left-desc">
                            <h3 class="item-name">'.$selectrow['item_name'].'</h3>
                        <img src="images/Apple/'.$selectrow['item_name'].'.jpg" class="imgg" alt="">
                    </div>
                    <div class="right-desc">
                        <h3>Specifications</h3>
                            <div>RAM : '.$selectrow['ram'].'</div>
                            <div>Internal Storage : '.$selectrow['internal_memory'].'</div>
                            <div>Condition : '.$selectrow['item_condition'].'</div>
                            <div>Battery : '.$selectrow['battery'].'</div>
                            <div>Price : <strong>'.$format.' PKR</strong></div>
                            <label>Color :
                            <select name="color" id="color">';
                            if($color_no == 1){
                                echo '<option value="select">Color</option>
                                <option value="'.$selectrow['color-1'].'">'.$selectrow['color-1'].'</option>';
                            }
                            else if($color_no == 2){
                                echo '
                                <option value="'.$selectrow['color-1'].'">'.$selectrow['color-1'].'</option>
                                <option value="'.$selectrow['color-2'].'">'.$selectrow['color-2'].'</option>';
                            }
                            else if($color_no == 3){
                                echo '
                                <option value="'.$selectrow['color-1'].'">'.$selectrow['color-1'].'</option>
                                <option value="'.$selectrow['color-2'].'">'.$selectrow['color-2'].'</option>
                                <option value="'.$selectrow['color-3'].'">'.$selectrow['color-3'].'</option>';
                            }
                            else if($color_no == 4){
                                echo '
                                <option value="'.$selectrow['color-1'].'">'.$selectrow['color-1'].'</option>
                                <option value="'.$selectrow['color-2'].'">'.$selectrow['color-2'].'</option>
                                <option value="'.$selectrow['color-3'].'">'.$selectrow['color-3'].'</option>
                                <option value="'.$selectrow['color-4'].'">'.$selectrow['color-4'].'</option>';
                            }
                            else if($color_no == 5){
    
                                echo '
                                <option value="'.$selectrow['color-1'].'">'.$selectrow['color-1'].'</option>
                                <option value="'.$selectrow['color-2'].'">'.$selectrow['color-2'].'</option>
                                <option value="'.$selectrow['color-3'].'">'.$selectrow['color-3'].'</option>
                                <option value="'.$selectrow['color-4'].'">'.$selectrow['color-4'].'</option>
                                <option value="'.$selectrow['color-5'].'">'.$selectrow['color-5'].'</option>';
                            }
    
                            echo '</select>
                                <br>
    
                            <form action="order.php?XYSWAU='.$tablet_id.'&HFJDLD='.$tablet_name.'&cat=tablets" method="post">
                                <button>Order Now</button>
                            </form>
                    </div>
                </div>';
    
            }
        }
                else{
                echo 'No Results Yet';
                }
            
           
           
            }
        
        ?>



        <!-- <div class="haha">
            <div class="left-desc">
                    <h3 class="item-name">Iphone-11</h3>
                <img src="images/Apple/Iphone-11.jpg" class="imgg" alt="">
            </div>
            <div class="right-desc">
                <h3>Specifications</h3>
                    <div>RAM : 3GB</div>
                    <div>Internal Storage : 256GB</div>
                    <div>Condition : New</div>
                    <div>Battery : 4000mAh</div>
                    <div>Price : <strong>250,000 PKR</strong></div>
                    <label>Color :
                    <select name="color" id="color">
                        <option value="select">Color</option>
                        <option value="black">Black</option>
                        <option value="blue">Blue</option>
                        <option value="white">White</option>
                        <option value="grey">Grey</option>
                        <option value="pink">Pink</option>
                    </select>
                    <br>
                    <form action="order.php" method="post">
                        <button>Order Now</button>
                    </form>
            </div>
        </div> -->



        
        
    </section>

    <?php
    
            require("contact.php");
            require("footer.html");
    
    ?>








    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="jquery/typed.js"></script>
    <script src="js/mobi.js"></script>
    <script src="all.min.js"></script>
    <script>
                $(".sampleSelect").click(function() {
        var open = $(this).data("isopen");
        if(open) {
            window.location.href = $(this).val()
        }

        $(this).data("isopen", !open);
});
$(".mobileSelect").click(function() {
        var open1 = $(this).data("isopen1");
        if(open1) {
            window.location.href = $(this).val()
        }

        $(this).data("isopen1", !open1);
});
    </script>


</body>

</html>