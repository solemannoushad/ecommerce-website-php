

$(document).ready(function(){

  // var body = document.getElementsByTagName("body");
  // var loader = $("#preloader")
  // body.addEventListener("load", ()=>{
  //   loader.style.display="none";
  // });

  
// function preloader(){
//   var body = document.getElementsByTagName("body");
//   var loader = document.getElementById("#preloader");
//   body.addEventListener("load", ()=>{
//     loader.style.display="none";
//   });
// }
// function preloader(){
//   var body = document.getElementsByTagName("body");
//   var loader = document.getElementById("#preloader");
//     loader.style.display="none";
// }

  // var bodyLoad = document.getElementsByTagName("body");
  // var loaderr = document.getElementById("preloader");
  // console.log(loaderr);
  // Array.from(bodyLoad).forEach((element)=>{
  //   element.addEventListener("load",(e)=>{
  //     loaderr.style.display="none";   
  //   });
  // });
  var searchBarIcon = document.getElementsByClassName('search-span');
  var searchBar = document.getElementById("navSearch");
  
  Array.from(searchBarIcon).forEach((element)=>{
    element.addEventListener("click",(e)=>{
      searchBar.classList.toggle("shas");
      searchBar.classList.toggle("shas1");
    });
  });

 
  var slideCircle = document.getElementsByClassName("csImg");
  var imageModal = document.getElementById("imageModal");
  var ModImg = document.getElementById("ModImg");
  Array.from(slideCircle).forEach((element)=>{
    element.addEventListener("click" , (e)=>{
      $("#imageModal").show("slow");
      var src = e.target.src;
      ModImg.src = src;
      imageModal.style.display = "flex";
    });
  });
  var ExitModal = document.getElementById("ExitModal");
  ExitModal.addEventListener("click" , ()=>{
    $("#imageModal").hide("fast");
  });

  window.onclick = function(event) {
    if (event.target == imageModal) {
       $("#imageModal").hide("fast");
    }
 }

 var clrInput = document.getElementsByClassName("clrInput");
 var smwClrLabel = document.getElementsByClassName("smwClrLabel");
 var smwClr = document.getElementsByClassName("smwClr");
 Array.from(clrInput).forEach((element)=>{
   element.addEventListener("click" , (e)=>{
     bcolorpn = e.target.parentNode;
     var label = bcolorpn.getElementsByTagName("label")[0];
     var input = bcolorpn.getElementsByTagName("input")[0];
     var labelBcolor = label.style.backgroundColor;
     if($(input).is(":checked")){
       label.style.boxShadow = "0 0 5px rgba(0,0,0, .65)";
      }else{
        bcolorpn.style.boxShadow  = "0 0 2px rgba(0,0,0, .65)";
     
     }
   });
 });



});


//Typing Effect
var typed = new Typed('.animate-mob', {
  strings: ["Smart Phones of all Brands ."],
  typeSpeed: 70,
  backSpeed: 70,
  backDelay: 1000,
  loop: true
  });
var typed1 = new Typed('.animate-smw', {
  strings: ["Smart Watches of all Kinds ."],
  typeSpeed: 70,
  backSpeed: 70,
  backDelay: 1000,
  loop: true
  });
var typed2 = new Typed('.animate-acc', {
  strings: ["Accessories ."],
  typeSpeed: 70,
  backSpeed: 70,
  backDelay: 1000,
  loop: true
  });
  var typed3 = new Typed('.animate-tab', {
    strings: ["Tablets ."],
    typeSpeed: 70,
    backSpeed: 70,
    backDelay: 1000,
    loop: true
    });

  let mobit = document.getElementsByClassName("mobi");
  let tablett = document.getElementsByClassName("tablet");
  let acct = document.getElementsByClassName("acc");
  let smwt = document.getElementsByClassName("smw");
  let category = document.getElementById("category");
  let brandmobi = document.getElementById("brandmobi");
  let brandtab = document.getElementById("brandtab");
  let brandacc = document.getElementById("brandacc");
  let brandsmw = document.getElementById("brandsmw");
  let cross = document.getElementById("cross");
  let c1 = document.getElementById("card-1");
  let all = document.getElementsByClassName("all");
  let card = document.getElementsByClassName("card");
  let cancel = document.getElementsByClassName("cancel");
  let front = document.getElementsByClassName("front");
  let back = document.getElementsByClassName("back");
  let modalBtn = document.getElementById("modalBtn");
  let mainModal = document.getElementById("mainModal");
  let closeBtn = document.getElementById("closeBtn");
  let shabaz = -1;
  let demo = document.getElementsByClassName('demo');
  let test = document.querySelectorAll(".test");



var navHeading = document.getElementById('smartHead');
var smartList = document.getElementById('smartList');

var watchHead = document.getElementById('watchHead');
var wathList = document.getElementById('wathList');

var accHead = document.getElementById('accHead');
var accList = document.getElementById('accList');

var tabHead = document.getElementById('tabHead');
var tabList = document.getElementById('tabList');

navHeading.addEventListener("click" , function(){
    smartList.classList.toggle('viewList');
    watchList.classList.remove('viewList');
    accList.classList.remove('viewList');
    tabList.classList.remove('viewList');
});


watchHead.addEventListener("click" , function(){
    watchList.classList.toggle('viewList');
    accList.classList.remove('viewList');
    tabList.classList.remove('viewList');
    smartList.classList.remove('viewList');
});

accHead.addEventListener("click" , function(){
    accList.classList.toggle('viewList');
    tabList.classList.remove('viewList');
    smartList.classList.remove('viewList');
    watchList.classList.remove('viewList');

});

tabHead.addEventListener("click" , function(){
    tabList.classList.toggle('viewList');
    smartList.classList.remove('viewList');
    watchList.classList.remove('viewList');
    accList.classList.remove('viewList');

});





function valid(){
  let phoneno = document.getElementById("Phone").value;
  let spanphone = document.getElementById("spanphone");
  if(phonenno.len != 11){
    spanphone.innerHTML="Invalid Phone Number";
  }
}



var navHeading = document.getElementById('smartHead');
var smartList = document.getElementById('smartList');

var watchHead = document.getElementById('watchHead');
var wathList = document.getElementById('wathList');

var accHead = document.getElementById('accHead');
var accList = document.getElementById('accList');

var tabHead = document.getElementById('tabHead');
var tabList = document.getElementById('tabList');

navHeading.addEventListener("click" , function(){
    smartList.classList.toggle('viewList');
    smartList.classList.toggle('hideList');
    watchList.classList.add('hideList');
    accList.classList.add('hideList');
    tabList.classList.add('hideList');
});


watchHead.addEventListener("click" , function(){
    watchList.classList.toggle('viewList');
    watchList.classList.toggle('hideList');
    accList.classList.add('hideList');
    tabList.classList.add('hideList');
    smartList.classList.add('hideList');
});

accHead.addEventListener("click" , function(){
    accList.classList.toggle('viewList');
    accList.classList.toggle('hideList');
    tabList.classList.add('hideList');
    smartList.classList.add('hideList');
    watchList.classList.add('hideList');

});

tabHead.addEventListener("click" , function(){
    tabList.classList.toggle('viewList');
    tabList.classList.toggle('hideList');
    smartList.classList.add('hideList');
    watchList.classList.add('hideList');
    accList.classList.add('hideList');

});

            add_cart_table();






var searchBarIcon = document.getElementsByClassName('search-span');
var searchBar = document.getElementById("navSearch");

Array.from(searchBarIcon).forEach((element)=>{
  element.addEventListener("click",(e)=>{
    searchBar.classList.toggle("shas");
    searchBar.classList.toggle("shas1");
  })
});

var cartMain = document.getElementById("cartMain");
// cartMain.addEventListener("click" , cartVis());

function cartVis(){
  var cartMaino = document.getElementById("cartMain1");
  cartMaino.classList.toggle("cartVisi");
  cartMaino.classList.toggle("cartHide");
}

window.onclick = function(event) {
  var cartMaino = document.getElementById("cartMain1");
  if (event.target == cartMaino) {
    cartMaino.classList.toggle("cartHide");
    console.log("Hide Modal");
  }
}




