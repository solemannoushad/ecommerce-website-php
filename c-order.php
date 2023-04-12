<?php

require('connection.php');


?>

<?php

 if(isset($_GET['cate']) && $_GET['cate'] == 'mobiles'){
     $category1 = 'mobiles';
 }
 else if(isset($_GET['cate']) && $_GET['cate'] == 'tablets'){
     $category1 = 'tablets';
 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/mobi.css">
<link rel="stylesheet" href="all.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
    }
</style>
<title>Mobi Men</title>
</head>

<body>

    <?php

    
        $color = $_POST['colour'];
        $qty = $_POST['quantity'];
        $mobile_number1 = $_GET['ALPSJ'];
        $mobi_name = $_GET['KJGGC'];


    ?>

    



<section id="mainModal">
    <div id="modalContent">
        <?php
        echo '<div id="closeBtn" onclick="closeModal()"><a href="order.php?XYSWAU='.$mobile_number1.'&HFJDLD='.$mobi_name.'&cat='.$category1.'">&times;</a></div>';
            $mobile_number1 = $_GET['ALPSJ'];
            $modalsql = "SELECT * FROM `$category1` WHERE `Sr.no` = '$mobile_number1'";
            $modalquery = mysqli_query($connection,$modalsql);
            $modalrow = mysqli_fetch_assoc($modalquery);
            $mobi_name = $modalrow['item_name'];
            $ram = $modalrow['ram'];
            $internal_memory = $modalrow['internal_memory'];
            $mobile_price = $modalrow['item_price'];
            $format = number_format($mobile_price);
            $total = $modalrow['item_price']* $qty;
            $total_format = number_format($total);
            echo '<table>
            <thead>
                <th width="60%">Item Name</th>
                <th width="20%">Quantity</th>
                <th width="20%">Item Price</th>
            </thead>
            <tbody>
                <tr>
                    <td>'.$modalrow['item_name'].' ('.$modalrow['ram'].'GB/'.$modalrow['internal_memory'].'GB)/'.$color.'</td>
                    <td>'.$qty.'</td>
                    <td>'.$total_format.' PKR   </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Delivery Charges</td>
                    <td>0 PKR</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Total Price</td>
                    <td>'.$total_format.' PKR</td>
                </tr>
            </tbody>
        </table>';

        
        ?>


        <h4>Provide Details to Place Your Order</h4>
        <form action="cong.php" method="post" id="form"  onsubmit="valid()"> 
            <div>
                <label for="fullName">Full Name :</label>
                <input type="text"  id="fullName" name="fullName" autocomplete="off" required>
            </div>
            <div>
                <label for="Email">Email Adress :</label>
                <input type="email" id="Email" name="Email" autocomplete="off" required>
            </div>
            <div>
                <label for="Phone">Phone No. :</label>
                <input type="number" id="Phone" name="Phone" placeholder="03XXXXXXXXX" maxlength="11"  minlength="11"
                    autocomplete="off" required>
            </div>
                    <span id="spanphone"></span>
            <div>
                <label for="Address">Address :</label>
                <input type="text" id="Address" name="Address" autocomplete="off" required>
            </div>
            <div>
                <label for="City">City :</label>
                <input type="text" id="City" name="City" autocomplete="off" required>
            </div>
            <div>
                <label for="Comments">Comment/Any Suggessions(Optional) :</label>
                <textarea name="Comments" id="Comments" cols="6 0" rows="10"></textarea>
            </div>
            <input type="hidden" name="quantity" value="<?php echo $qty ?>">
            <input type="hidden" name="clr" value="<?php echo $color ?>">
            <input type="hidden" name="mobname" value="<?php echo $mobi_name ?>">
            <input type="hidden" name="mobram" value="<?php echo $ram ?>">
            <input type="hidden" name="mobmem" value="<?php echo $internal_memory ?>">
            <input type="hidden" name="mobprice" value="<?php echo $mobile_price ?>">
            <button type="submit" class="alert">Confirm Order</button>
        </form>
    </div>
</section>

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
        $ordersql = "INSERT INTO `userdetail` (`Name`, `Email`, `Address`, `Phone-no`, `City`, `Comment`, `Order_mobile_name`, `Order_mobile_ram`, `Order_mobile_memory`, `Order_mobile_color`, `Order_mobile_quantity`, `Order_mobile_price`, `Date and Time`) VALUES ('$fullName', '$Email', '$Address', '$Phone', '$City', '$Comments', '$mobi_name', '$ram', '$internal_memory', '$clr', '$quant', '$mobile_price', current_timestamp())";
        $orderquery = mysqli_query($connection,$ordersql);
        if(!$orderquery){
            echo 'Failed'. mysqli_error($connection);
        }

    }

?>

<header id="header">
<?php
    
    include('mobi_nav.php');

?>
</header>

<?php

    $mobiname = $_GET['KJGGC'];

?>


<section id="order-sec">
    <div id="order-left">
        <img src="images/Apple/<?php    echo $mobiname    ?>.jpg" alt="">
    </div>
    <div id="order-right">
        <h2>Order Details</h2>
        <?php

            $mobile_no = $_GET['ALPSJ'];
            $selordersql = "SELECT * FROM `$category1` WHERE `Sr.no` =  '$mobile_no'";
            $selorderquery = mysqli_query($connection,$selordersql);
            if(!$selorderquery){
                echo "Failed".mysqli_error($connection);
            }
            $num = mysqli_num_rows($selorderquery);
            if($num == 1){
               
                while($selorderrow = mysqli_fetch_assoc($selorderquery)){
                    echo '<div class=row>
                    <div>Item Name : <span class="bold">'.$selorderrow['item_name'].'</span></div>
                    <div>RAM : <span class="bold"> '.$selorderrow['ram'].'GB</span></div>
                </div>
                <div class=row>
                    <div>Internam Storage : <span class="bold">'.$selorderrow['internal_memory'].'GB </span></div>
                    <div>Availability : <span class="bold"> In Stock</span></div>
                </div>
                <div class=row>
                    <div>Battery : <span class="bold">'.$selorderrow['battery'].'mAh </span></div>
                    <div>Condition : <span class="bold">'.$selorderrow['item_condition'].' </span></div>
                </div>
                <div class=row>
                    <div>Delivery Time : <span class="bold">2-7 Days</span></div>

                    <div>Quantity<input type="number" name="quantity" min="1" max="10" minlength="1"  value="1" pattern="[0-9]{2}"></div>
                    </div>
                    <div class=row>
                        <div>
                        <select name="colour">';
                        $total_color = $selorderrow['color_no'];
                        if($total_color == 1){
                            echo '
                            <option value="'.$selorderrow['color-1'].'">'.$selorderrow['color-1'].'</option>';
                        }
                        else if($total_color == 2){
                            echo '
                            <option value="'.$selorderrow['color-1'].'">'.$selorderrow['color-1'].'</option>
                            <option value="'.$selorderrow['color-2'].'">'.$selorderrow['color-2'].'</option>';
                        }
                        else if($total_color == 3){
                            echo '
                            <option value="'.$selorderrow['color-1'].'">'.$selorderrow['color-1'].'</option>
                            <option value="'.$selorderrow['color-2'].'">'.$selorderrow['color-2'].'</option>
                            <option value="'.$selorderrow['color-3'].'">'.$selorderrow['color-3'].'</option>';
                        }
                        else if($total_color == 4){
                            echo '
                            <option value="'.$selorderrow['color-1'].'">'.$selorderrow['color-1'].'</option>
                            <option value="'.$selorderrow['color-2'].'">'.$selorderrow['color-2'].'</option>
                            <option value="'.$selorderrow['color-3'].'">'.$selorderrow['color-3'].'</option>
                            <option value="'.$selorderrow['color-4'].'">'.$selorderrow['color-4'].'</option>';
                        }
                        else if($total_color == 5){

                            echo '
                            <option value="'.$selorderrow['color-1'].'">'.$selorderrow['color-1'].'</option>
                            <option value="'.$selorderrow['color-2'].'">'.$selorderrow['color-2'].'</option>
                            <option value="'.$selorderrow['color-3'].'">'.$selorderrow['color-3'].'</option>
                            <option value="'.$selorderrow['color-4'].'">'.$selorderrow['color-4'].'</option>
                            <option value="'.$selorderrow['color-5'].'">'.$selorderrow['color-5'].'</option>
                            ';
                        }
                        echo '</select></div>       
                     <div>Price : <span class="bold" style="color:purple;">'.$format.' PKR</span>
                     </div>
                     </div>
                        <button id="modalBtn" onclick="openModal()">Confirm Order</button>
                    </div>';
                }
            }



            
        
        ?>

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
        function valid(){
            let phoneno = document.getElementById("Phone").value;
            let spanphone = document.getElementById("spanphone");
            if(phonenno.len != 11){
                spanphone.innerHTML="Invalid Phone Number";
                // console.log("Invalid Phone no");
            }
        }
</script>
</body>

</html>