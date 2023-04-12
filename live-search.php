<?php

    require('connection.php');
    $output = "";
    if(isset($_POST['value'])){
        $search_value = $_POST['value'];
    }

    $sql = "SELECT * FROM `mobiles` WHERE `item_name` LIKE '%{$search_value}%'";
    $result = mysqli_query($connection,$sql);
    $num = mysqli_num_rows($result);
    if($num>0){
        while($row = mysqli_fetch_assoc($result)){
            $mobile_id = $row['Sr.no'];
            $mobile_name = $row['item_name'];
            $clrno = $row['color_no'];
            $clr1 = $row['color-1'];
            $clr2 = $row['color-2'];
            $clr3 = $row['color-3'];
            $clr4 = $row['color-4'];
            $clr5 = $row['color-5'];
            $price = $row['item_price'];
            $format = number_format($price);
            $output = "<div class='haha' id='dataSearch'>
            <div class='left-desc'>
            <h3 class='item-name'>$row[item_name]</h3>
        <img src='images/Apple/$row[item_name].jpg' class='imgg'>
    </div>
    <div class='right-desc'>
        <h3>Specifications</h3>
            <div>RAM : $row[ram]</div>
            <div>Internal Storage : $row[internal_memory]</div>
            <div>Condition : $row[item_condition]</div>
            <div>Battery : $row[battery]</div>
            <div>Price : <strong>$format PKR</strong></div>
            <label>Color :
            <select name='color' id='color'>';
            if($clrno == 1){
                echo '<option value='$clr1'>$clr1</option>';
            }
            else if($clrno == 2){
                echo '
                <option value='$clr1'>$clr1</option>
                <option value='$clr2'>$clr2</option>';
            }
            else if($clrno == 3){
                echo '
                <option value='$clr1'>$clr1</option>
                <option value='$clr2'>$clr2</option>
                <option value='$clr3'>$clr3</option>';
            }
            else if($clrno == 4){
                echo '
                <option value='$clr1'>$clr1</option>
                <option value='$clr2'>$clr2</option>
                <option value='$clr3'>$clr3</option>
                <option value='$clr4'>$clr4</option>';
            }
            else if($clrno == 5){

                echo '
                <option value='$clr1'>$clr1</option>
                <option value='$clr2'>$clr2</option>
                <option value='$clr3'>$clr3</option>
                <option value='$clr4'>$clr4</option>
                <option value='$clr5'>$clr5</option>';
            }

            echo '</select>
                <br>

            <form action='order.php?XYSWAU='.$mobile_id.'&HFJDLD='.$mobile_name.'&cat=mobiles' method='post'>
                <button>Order Now</button>
            </form>
    </div>
</div>";
        }
        echo json_encode($output);
    }
    else{
        echo "No Result Found";
    }
        

?>