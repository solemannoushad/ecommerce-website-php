

var sideNavOpen = document.getElementById("sideNavOpen");
sideNavOpen.addEventListener("click", openSideNav());
function openSideNav(){
    var listnav = document.getElementById("list-nav");
    listnav.style.width="100% !important";
}
// var sideNavOpen = document.getElementById("sideNavOpen");
// sideNavOpen.addEventListener("click", ()=>{
//     var listnav = document.getElementById("list-nav");
//     listnav.style.width="100% !important";
// });