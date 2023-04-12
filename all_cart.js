//Add Cart
function add_cart(){
    var cartBtn = document.getElementsByClassName('cartBtn');
    Array.from(cartBtn).forEach((element)=>{
        element.addEventListener("click",(e)=>{
            pn = e.target.parentNode;
            pnsno = pn.getElementsByTagName("input")[3].value;    
            pncat = pn.getElementsByTagName("input")[5].value;
            $.ajax({
                url : "all_cart.php",
                type : "POST",
                data : {cartsno : pnsno , cartcat : pncat , action : "add"},
                success : function(cartdata){
                    add_cart_table();
                }
            });
        });
    });
}
add_cart();

//View Cart            
function view_cart_table(){
    $.ajax({
        url : "all_cart.php",
        type : "POST",
        data : {action : "view"},
        success : function(data){
            $("#cartData").html(data);
        }
    });
}
view_cart_table();

//Update Cart
function update_cart(){
    var cartClr = document.getElementsByClassName("cartClr");
    Array.from(cartClr).forEach((element)=>{
        element.addEventListener("change", (e)=>{
          var value = element.value;
          $.ajax({
              url : "all_cart.php",
              type: "POST",
              data: {value: value , action: "update"},
              success : function(data){
                  alert(data);
                  add_cart_table();
              }
          });
      });
    });
}

//Delete Cart
function deleteCart(){
    var deleteCartPro = document.getElementsByClassName("deleteCartPro");
    Array.from(deleteCartPro).forEach((element)=>{
        element.addEventListener("click" , (e)=>{
            console.log("Clicked");
            section = e.target.parentNode.parentNode.parentNode;
            name = section.getElementsByTagName("input")[0].value;
            sno = section.getElementsByTagName("input")[1].value;
            cat = section.getElementsByTagName("input")[2].value;
                $.ajax({
                    url: "all_cart.php",
                    type: "POST",
                    data: {proName: name,proSno: sno,proCat: cat , action : "delete"},
                    success: function(data){
                        alert(data);
                        add_cart_table();
                    }
                });
        });
      });
}
