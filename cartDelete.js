// function deleteCart(){
//     var deleteCartPro = document.getElementsByClassName("deleteCartPro");
//     Array.from(deleteCartPro).forEach((element)=>{
//         element.addEventListener("click" , (e)=>{
//             console.log("Clicked");
//             section = e.target.parentNode.parentNode.parentNode;
//             name = section.getElementsByTagName("input")[0].value;
//             sno = section.getElementsByTagName("input")[1].value;
//             cat = section.getElementsByTagName("input")[2].value;
//                 $.ajax({
//                     url: "new.php",
//                     type: "POST",
//                     data: {proName: name,proSno: sno,proCat: cat},
//                     success: function(data){
//                         alert(data);
//                         add_cart_table();
//                     }
//                 });
//         });
//       });
// }
// deleteCart();

//   var cartClr = document.getElementsByClassName("cartClr");
//   Array.from(cartClr).forEach((element)=>{
//       element.addEventListener("change", (e)=>{
//         var value = element.value;
//         console.log(value)
//         $.ajax({
//             url : "view_cart.php",
//             type: "POST",
//             data: {value: value , action: "update"},
//             success : function(data){
//                 alert(data);
//                 add_cart_table();
//             }
//         });
//     });
//   });
