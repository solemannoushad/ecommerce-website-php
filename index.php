

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar-footer.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <title>Mobi Men</title>

    <style>
        #navbar{
            border-bottom:none;
        }
    </style>

</head>

<body>







    <?php
        include('loader.html');
        include('mobi_nav.php');

    ?>

    



    <section id="sec-nav">

        <div id="second-nav">
            <ul>
                <li><a href="smartphones.php" class="nav-a nav-aa">Smart Phones</a></li>
                <li><a href="smartwatches.php" class="nav-a nav-aa">Smart Watches</a></li>
                <li><a href="" class="nav-a nav-aa">Tablets</a></li>
                <li><a href="accessories.php" class="nav-a nav-aa">Accessories</a></li>
    
            </ul>
        </div>
    </section>
    <header>

    <i class="fas fa-angle-right" id="sideNavOpen" onclick="openSideNav()"></i>
        <div id="list-nav">
            <div class="list-side list-mob">
                <div class="side-heading">       
                    <p id="smartHead">Smart Phones</p>
                    <i class="fas fa-angle-down"></i>
                </div>
                
                <ul class="side-nav-items hideList" id="smartList">
                    <li class="side-nav-li"><a href="#">Apple</a></li>
                    <li class="side-nav-li"><a href="#">Samsung</a></li>
                    <li class="side-nav-li"><a href="#">Huawei</a></li>
                    <li class="side-nav-li"><a href="">Q Mobile</a></li>
                    <li class="side-nav-li"><a href="">Techno</a></li>
                    <li class="side-nav-li"><a href="">Infinix</a></li>
                    <li class="side-nav-li"><a href="">Nokia</a></li>
                    <li class="side-nav-li"><a href="">Realme</a></li>
                    <li class="side-nav-li"><a href="">MI</a></li>
                    <li class="side-nav-li"><a href="">Oppo</a></li>
                    <li class="side-nav-li"><a href="">Itel</a></li>
                    <li class="side-nav-li"><a href="">Vivo</a></li>
                    <li class="side-nav-li"><a href="">Alcatel</a></li>
                    <li class="side-nav-li"><a href="">Low Price Phones</a></li>

                </ul>
            </div>
            <div class="list-side list-smw">
                <div class="side-heading">       
                    <p id="watchHead">Smart Watches</p>
                    <i class="fas fa-angle-down"></i>
                </div>
                <ul class="side-nav-items hideList" id="watchList">
                    <li class="side-nav-li"><a href="">W26</a></li>
                    <li class="side-nav-li"><a href="">W26 Plus</a></li>
                    <li class="side-nav-li"><a href="">T500</a></li>
                    <li class="side-nav-li"><a href="">HW12</a></li>
                    <li class="side-nav-li"><a href="">K8</a></li>
                    <li class="side-nav-li"><a href="">FK88</a></li>
                    <li class="side-nav-li"><a href="">FK78</a></li>
                    <li class="side-nav-li"><a href="">FK98</a></li>
                    <li class="side-nav-li"><a href="">MC72</a></li>
                    <li class="side-nav-li"><a href="">Apple Series</a></li>

                </ul>
            </div>
            <div class="list-side list-acc">
                <div class="side-heading">       
                    <p id="accHead">Accessories</p>
                    <i class="fas fa-angle-down"></i>
                </div>
                <ul class="side-nav-items hideList" id="accList">
                    <li class="side-nav-li"><a href="">Air Pods</a></li>
                    <li class="side-nav-li"><a href="">Bands</a></li>
                    <li class="side-nav-li"><a href="">Head Phones</a></li>
                    <li class="side-nav-li"><a href="">Power Bank</a></li>
                    <li class="side-nav-li"><a href="">Speaker</a></li>
                    <li class="side-nav-li"><a href="">Game Controller</a></li>
                    <li class="side-nav-li"><a href="">LED Ring Light</a></li>
                    <li class="side-nav-li"><a href="">Hand Free</a></li>
                    <li class="side-nav-li"><a href="">Chargers</a></li>
                    <li class="side-nav-li"><a href="">Covers</a></li>
                    <li class="side-nav-li"><a href="">Smart Watch Straps</a></li>


                </ul>
            </div>
            <div class="list-side list-tab">
                <div class="side-heading">       
                    <p id="tabHead">Tablets</p>
                    <i class="fas fa-angle-down"></i>
                </div>
                <ul class="side-nav-items hideList" id="tabList">
                    <li class="side-nav-li"><a href="">Apple</a></li>
                    <li class="side-nav-li"><a href="">Samsung</a></li>
                    <li class="side-nav-li"><a href="">Qtab</a></li>
                    <li class="side-nav-li"><a href="">Lenovo</a></li>



                </ul>
            </div>
        </div>
        <div id="slider" class="cycle-slideshow" data-cycle-slides=".slide" data-cycle-pause-on-hover="false">

        <span class="cycle-prev"><i class="fas fa-chevron-left"></i></span>
        <span class="cycle-next"><i class="fas fa-chevron-right"></i></span> 
        <span class="cycle-pager"></span>

            <slide class="slide slide-1">
                <img src="./images/IMG_1090.png" alt="">
                <div class="slider-content">
                    <p class="white-ani">We Offer <span class="animate-mob ani white-ani"></span></p>
            </slide>
            <slide class="slide slide-2">
                <img src="./images/IMG_0973.jpg" alt="">
                <div class="slider-content">
                    <p>We Offer <span class="animate-smw ani black-ani"></span></p>
                </div>
            </slide>
            <slide class="slide slide-3">
                <img src="./images/slide-acc-2.jpg" alt="">
                <div class="slider-content">
                    <p>We Offer <span class="animate-acc ani white-ani"></span></p>
                </div>
            </slide>
            <slide class="slide slide-4">
                <img src="./images/slide-tab.jpg" alt="">
                <div class="slider-content">
                    <p>We Offer <span class="animate-tab ani white-ani"></span></p>
                </div>
            </slide>
        </div>
        <span id="span"></span>
    </header>

    <section id="desc-main">
        <div class="desc-content">
            <h5>Who We Are</h5>
            <p>We are here to provide you brand new models of smartphones, smart watches, accessories and much more
                on wholesale price at your doorstep.</p>
        </div>
        <div class="desc-image">
            <img src="images/IMG_0988.jpg" alt="">
        </div>
    </section>


    <section id="center-main">
        <div class="center-div-top">
          <div class="center-box cen-mt">
              <div class="cen-txt-dem top-txt">
                  <p>Smart Phones</p> 
              </div>
              <div class="cen-txt">
                  <a href="smartphones.php" class="center-img-txt ctr-txt-1">Smart Phones</a>
              </div>
              <a href="smartphones.php">
                  <img src="images/IMG_1089.jpg" alt="" class="ctr-img ctr-img-1">
              </a>
            </div>
            <div class="center-box img "> 
            <div class="cen-txt-dem bot-txt">
                  <p>Accessories</p> 
              </div> 
                <div class="cen-txt">
                    <a href="#" class="center-img-txt">Accessories</a>
                </div> 
                <a href="#">
               <img src="images/IMG_0989.jpg" alt="" class="ctr-img c-img-1">
                </a>
               </div>
        </div>
        <div class="center-div-top">
            <div class="center-box cen-mt">
            <div class="cen-txt-dem top-txt">
                  <p>Tablets</p> 
              </div>
                <div class="cen-txt">
                    <a href="#" class="center-img-txt">Tablets</a>
                </div>
                <a href="#">
                    <img src="images/IMG_0987.jpg" alt="" class="ctr-img">
                </a>
            </div>
    
            <div class="center-box">
            <div class="cen-txt-dem bot-txt">
                  <p>Smart Watches</p> 
              </div>
                <div class="cen-txt smw-af">
                    <a href="smartwatches.php" class="center-img-txt smw-txt-1">Smart Watches</a>
                </div>
                <a href="smartwatches.php">
                    <img src="images/IMG_1095.jpg" alt="" class="ctr-img brightness-img">
                </a>
            </div>
        </div>
    </section>       

    <?php
    
            require("footer.html");
    ?>

    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="jquery/typed.js"></script>
    <script src="js/sideNav.js"></script>
    <script src="js/mobi.js"></script>
    <script src="all.min.js"></script>
    <script src="cycle/cycle2.js"></script>
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
    <script>
        // $("#sideNavOpen").on("click", ()=>{
        //     // $("#list-nav").css("");
        //     console.log("open");
        // });
        // var sideNavOpen = document.getElementById("sideNavOpen");
        // sideNavOpen.addEventListener("click", ()=>{
        //     console.log("oopenn");
        // });
    </script>
</body>
</html>