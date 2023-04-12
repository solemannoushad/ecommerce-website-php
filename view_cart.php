
<?php

    // session_start();

    // if(isset($_POST['action']) && $_POST['action'] == "update"){
    //     $upqty = $_POST['value'];
    //     $data = $upqty;
    //     echo $data;
    //     $_SESSION['shopping_cart'] = true;
    // }
    // else{
    //     $upqty = 1;
    //     $_SESSION['shopping_cart'] = true;
    // }

    
    // if(isset($_SESSION['shopping_cart'])&&$_SESSION['shopping_cart'] == true){
    // $output = "<tr>";

    //     $cat = $_SESSION['cate'];
    //     $name = $_SESSION['name'];
    //     $price = $_SESSION['price'];
    //     $qty = $_SESSION['qty'];
    //     $productName = $_SESSION['productName'];

    //     $nameArr = array_column($_SESSION,$_SESSION['name']);
    //     if(in_array($name,$nameArr)){
    //         echo '<script>
    //             alert("Item Already added")
    //         </script>';
    //         $qty++;
    //     }

        
    //     $output = "<tr>";
    //     foreach ($_SESSION as $product) {
    //         if(is_array($product)){
    //             foreach ($product as $key => $value){
    //                 if($key == 4){

    //                 }      
    //                 if($key == 3){

    //                 }      
    //                 if($key == 2){
    //                     $output .="<section><input type='hidden' name='pri' value='$value'>";
    //                     $value1 = $value*$upqty;
    //                     $output .= "<td>$value1</td>";
    //                     $output .= "<script>console.log($upqty)</script>";
    //                     $_SESSION['cartProPrice'] = $value;
    //                 }      
       
    //                 if($key == 1){
    //                     // $output .= "<td><input type='number' name='itemQty' class='itemQty' min='1' max='10' value='$value'></input></td>";
    //                     $output .="<td><select name='clr' class='cartClr' id='clr'>
    //                     <option value='1'>1</option>
    //                     <option value='2'>2</option>
    //                     <option value='3'>3</option>
    //                     <option value='4'>4</option>
    //                     <option value='5'>5</option>
    //                     <option value='6'>6</option>
    //                     <option value='7'>7</option>
    //                     <option value='8'>8</option>
    //                     <option value='9'>9</option>
    //                     <option value='10'>10</option>
    //                 </select></td>";
    //                     $_SESSION['cartProQty'] = $value;
    //                 }             
    //                 if($key == 0){
    //                     $_SESSION['cartProName'] = $value;
    //                     $output .= "<td>$value</td>";
    //                 }   

    //             }               
    //                         $output .= "<td>";
    //                         $output .="<section>";
    //                         $output .="<input type='hidden' name='CPname' value='$product[0]'>";
    //                         $output .="<input type='hidden' name='CPsno' value='$product[3]'>";
    //                         $output .="<input type='hidden' name='CPcat' value='$product[4]'>";
    //                         $output .="<button class='deleteCartPro' type='submit'><i class='fas fa-times '></i></button>";
    //                         $output .="</section>";
    //                         $output .="</td>";
    //                         $output .= "</tr>";    
    //         }
    //     }
    //     $output .= "</section>";    
    // }
    
    // else{
    //     $output = "<td colspan='4'>No Items Selected</td>";
    // }
    //     echo $output;

        // session_unset();
        // session_destroy();
        


?>

