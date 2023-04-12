<?php

require('connection.php');
session_start();

if(isset($_POST['action']) && $_POST['action'] == "add"){
    add_to_cart();
}
elseif(isset($_POST['action']) && $_POST['action'] == "view"){
    view_cart();
}

//Cart Update
function update_cart(){
    if(isset($_POST['action']) && $_POST['action'] == "update"){
        $upqty = $_POST['value'];
        $data = $upqty;
        echo $data;
    }
    else{
        $upqty = 1;
    }
}

//Delete Cart
function delete_cart(){
    $sno = $_POST['proSno'];
    $name = $_POST['proName'];
    $cat = $_POST['proCat'];
    
    $product = $name.$sno;
    $output= $product;
    unset($_SESSION[$product]);
    echo($output);
}


//View Cart
function view_cart(){
    if(isset($_SESSION['shopping_cart'])&&$_SESSION['shopping_cart'] == true){
        $output = "<tr>";
    
            $cat = $_SESSION['cate'];
            $name = $_SESSION['name'];
            $price = $_SESSION['price'];
            $qty = $_SESSION['qty'];
            $productName = $_SESSION['productName'];
    
            $nameArr = array_column($_SESSION,$_SESSION['name']);
            if(in_array($name,$nameArr)){
                echo '<script>
                    alert("Item Already added")
                </script>';
                $qty++;
            }
    
            
            $output = "<tr>";
            foreach ($_SESSION as $product) {
                if(is_array($product)){
                    foreach ($product as $key => $value){
                        if($key == 4){
    
                        }      
                        if($key == 3){
    
                        }      
                        if($key == 2){
                            $output .="<section><input type='hidden' name='pri' value='$value'>";
                            // $value1 = $value*$upqty;
                            $output .= "<td>$value</td>";
                            // $output .= "<script>console.log($upqty)</script>";
                            $_SESSION['cartProPrice'] = $value;
                        }      
           
                        if($key == 1){
                            $output .="<td><select name='clr' class='cartClr' id='clr'>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                            <option value='6'>6</option>
                            <option value='7'>7</option>
                            <option value='8'>8</option>
                            <option value='9'>9</option>
                            <option value='10'>10</option>
                        </select></td>";
                            $_SESSION['cartProQty'] = $value;
                        }             
                        if($key == 0){
                            $_SESSION['cartProName'] = $value;
                            $output .= "<td>$value</td>";
                        }   
    
                    }               
                                $output .= "<td>";
                                $output .="<section>";
                                $output .="<input type='hidden' name='CPname' value='$product[0]'>";
                                $output .="<input type='hidden' name='CPsno' value='$product[3]'>";
                                $output .="<input type='hidden' name='CPcat' value='$product[4]'>";
                                $output .="<button class='deleteCartPro' type='submit'><i class='fas fa-times '></i></button>";
                                $output .="</section>";
                                $output .="</td>";
                                $output .= "</tr>";    
                }
            }
            $output .= "</section>";    
        }
        
        else{
            $output = "<td colspan='4'>No Items Selected</td>";
        }
            echo $output;
}

//Add Cart

function add_to_cart(){
    if(isset($_POST['cartsno'])){
    
    
        $_SESSION['shopping_cart'] = true;
        $smw_sno = $_POST['cartsno'];
        $cat = $_POST['cartcat'];
        $_SESSION['cate'] = $cat;
        $_SESSION['cpsno'] = $smw_sno;
        $qty = 1;
    
        echo $cat;
    
        $sql = "SELECT * FROM `$cat` WHERE `Sr.no` = '$smw_sno'";
        $result = mysqli_query($connection , $sql);
    
        $num = mysqli_num_rows($result);
        if($num>0){
            $row = mysqli_fetch_assoc($result);
            $smw_name = $row['item_name'];
            $smw_price = $row['item_price'];
            $sno = $row['Sr.no'];
    
            $_SESSION['name'] = $smw_name;
            $_SESSION['price'] = $smw_price;
            $_SESSION['qty'] = $qty;
    
            $productcart = array($_SESSION['name'],$_SESSION['qty'],$_SESSION['price'],$sno,$cat);
            $productName = $_SESSION['name'].$smw_sno;
            $_SESSION['productName'] = $productName;
            $_SESSION[$productName] = $productcart;
    
        }
    
        if(!$result){
            echo "Failed". mysqli_error($connection);
        }
        else{
            echo "Success";
        }
    }
    else{
        $_SESSION['shopping_cart'] = false;
    }
}

?>