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
    <style>
        header{
            height:2.5rem;
        }
        .head{
            text-align:center;
            margin:1rem auto;
        }
    </style>
</head>

<body>
    <header>

    <?php
    
        include('mobi_nav.php');

    ?>
    </header>

    <h3 class="head">Search Result for '<?php  echo $_POST['search'];   ?>'</h3>

<?php

    if(isset($_POST['search'])){
        require('connection.php');
        $searchVal = $_POST['search'];
        $sql = "SELECT * FROM `mobiles` WHERE `item_name` LIKE '%{$searchVal}%'";
        $result = mysqli_query($connection , $sql);
        $num = mysqli_num_rows($result);
        echo '<section id="second">';
        if($num>0){
            while($row = mysqli_fetch_assoc($result)){
                $mobile_id = $row['Sr.no'];
                $mobile_name = $row['item_name'];
                $color_no = $row['color_no'];
                $price = $row['item_price'];
                $company = $row['item_company'];
                $format = number_format($price);
                echo '<div class="haha" id="dataSearch">
                <div class="left-desc">
                        <h3 class="item-name">'.$row['item_name'].'</h3>
                    <img src="images/'.$company.'/'.$row['item_name'].'.jpg" class="imgg" alt="">
                </div>
                <div class="right-desc">
                    <h3>Specifications</h3>
                        <div>RAM : '.$row['ram'].'GB</div>
                        <div>Internal Storage : '.$row['internal_memory'].'GB</div>
                        <div>Condition : '.$row['item_condition'].'</div>
                        <div>Battery : '.$row['battery'].'mAh</div>
                        <div>Price : <strong>'.$format.' PKR</strong></div>
                        <label>Color :
                        <select name="color" id="color">';
                        if($color_no == 1){
                            echo '<option value="'.$row['color-1'].'">'.$row['color-1'].'</option>';
                        }
                        else if($color_no == 2){
                            echo '
                            <option value="'.$row['color-1'].'">'.$row['color-1'].'</option>
                            <option value="'.$row['color-2'].'">'.$row['color-2'].'</option>';
                        }
                        else if($color_no == 3){
                            echo '
                            <option value="'.$row['color-1'].'">'.$row['color-1'].'</option>
                            <option value="'.$row['color-2'].'">'.$row['color-2'].'</option>
                            <option value="'.$row['color-3'].'">'.$row['color-3'].'</option>';
                        }
                        else if($color_no == 4){
                            echo '
                            <option value="'.$row['color-1'].'">'.$row['color-1'].'</option>
                            <option value="'.$row['color-2'].'">'.$row['color-2'].'</option>
                            <option value="'.$row['color-3'].'">'.$row['color-3'].'</option>
                            <option value="'.$row['color-4'].'">'.$row['color-4'].'</option>';
                        }
                        else if($color_no == 5){
    
                            echo '
                            <option value="'.$row['color-1'].'">'.$row['color-1'].'</option>
                            <option value="'.$row['color-2'].'">'.$row['color-2'].'</option>
                            <option value="'.$row['color-3'].'">'.$row['color-3'].'</option>
                            <option value="'.$row['color-4'].'">'.$row['color-4'].'</option>
                            <option value="'.$row['color-5'].'">'.$row['color-5'].'</option>';
                        }
    
                        echo '</select>
                            <br>
    
                        <form action="order.php?XYSWAU='.$mobile_id.'&HFJDLD='.$mobile_name.'&cat=mobiles" method="post">
                            <button>Order Now</button>
                        </form>
                </div>
            </div>';
            }
        }

        else{
            echo "No results for " . $searchVal;
        }

        echo '</section>';
    }

?>            

    <?php
    
            require("contact.php");
            // echo "<hr>";
            require("footer.html");
    ?>









    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="jquery/typed.js"></script>
    <script src="js/mobi.js"></script>
    <script src="all.min.js"></script>




</body>

</html>






