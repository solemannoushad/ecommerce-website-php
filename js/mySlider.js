$(document).ready(function(){



    var cslideLeft = $("#cslideLeft");
    var cslideLeftpn = $("#cslideLeft");
    var cslideCenter = $("#cslideCenter");
    var cslideRight = $("#cslideRight");
    var cslideNext1 = $("#cslideNext1");
    var cslidePrev1 = $("#cslidePrev1");
    
    var mainNode = document.getElementById("cslideLeft").parentNode;
    
    var cslideElementLeft = mainNode.getElementsByTagName("div")[1];
    var cslideElementCenter = mainNode.getElementsByTagName("div")[2];
    var cslideElementRight = mainNode.getElementsByTagName("div")[3];
    
    
    var ImgNum = cslideElementLeft.getElementsByTagName("img").length;
    
    function cslidevisibility(){
        cslideElementCenter.getElementsByTagName("img")[0].style.visibility = "visible";
        cslideElementLeft.getElementsByTagName("img")[ImgNum-1].style.visibility = "visible";
        cslideElementRight.getElementsByTagName("img")[1].style.visibility = "visible";
    }
    cslidevisibility();
    
    //Next Button Variables
    
    var imgNextcv = ImgNum - 1;
    var imgNextch = 0;
    
    var imgNextlv = ImgNum - 2;
    var imgNextlh = ImgNum - 1;
    
    var imgNextrv = 0;
    var imgNextrh = 1;
    
    //Previous Button Variables
    
    var imgPrevcv = 1;
    var imgPrevch = 0;
    
    var imgPrevlv = 0;
    var imgPrevlh = ImgNum - 1;
    
    var imgPrevrv = 2;
    var imgPrevrh = 1;
    
    // Slider Next Button
        for(nextLeft = 0;nextLeft < ImgNum;nextLeft++){
            cslideElementCenter.getElementsByTagName("img")[nextLeft].style.left = "-300px";
            cslideElementLeft.getElementsByTagName("img")[nextLeft].style.left = "-300px";
            cslideElementRight.getElementsByTagName("img")[nextLeft].style.left = "-300px";
            if(nextLeft == 0){
                cslideElementCenter.getElementsByTagName("img")[nextLeft].style.left = "0px";
            }
            if(nextLeft == ImgNum - 1){
                cslideElementLeft.getElementsByTagName("img")[nextLeft].style.left = "0px";
            }
            if(nextLeft == 1){
                cslideElementRight.getElementsByTagName("img")[nextLeft].style.left = "0px";
            }
        }
    $("#cslideNext1").on("click" , ()=>{
    
    
    console.log("Next");
        for(nch = 0;nch < ImgNum;nch++){
            // cslideElementCenter.getElementsByTagName("img")[nch].style.visibility = "hidden";
            cslideElementCenter.getElementsByTagName("img")[nch].style.left = "300px";
            if(nch == imgNextcv){
                cslideElementCenter.getElementsByTagName("img")[imgNextcv].style.visibility = "visible";
                cslideElementCenter.getElementsByTagName("img")[imgNextcv].style.left = "0px";
            }
        }
        imgNextcv--;
        imgNextch--;
        if(imgNextcv < 0){
            imgNextcv = ImgNum - 1;
        }
        if(imgNextch < 0){
            imgNextch = ImgNum - 1;
        }
    
    
        for(nlh = 0;nlh < ImgNum; nlh++){
            // cslideElementLeft.getElementsByTagName("img")[nlh].style.visibility = "hidden";
            cslideElementLeft.getElementsByTagName("img")[nlh].style.left = "300px";
            if(nlh == imgNextlv){
                cslideElementLeft.getElementsByTagName("img")[imgNextlv].style.visibility = "visible";
                cslideElementLeft.getElementsByTagName("img")[imgNextlv].style.left = "0px";
            }
        }
    
        imgNextlv--;
        imgNextlh--;
        if(imgNextlv < 0){
            imgNextlv = ImgNum - 1;
        }
        if(imgNextlh < 0){
            imgNextlh = ImgNum - 1;
        }
    
        for(nrh = 0;nrh < ImgNum;nrh++){
            // cslideElementRight.getElementsByTagName("img")[nrh].style.visibility = "hidden";
            cslideElementRight.getElementsByTagName("img")[nrh].style.left = "-300px";
            if(nrh == imgNextrv){
                cslideElementRight.getElementsByTagName("img")[imgNextrv].style.visibility = "visible";
                cslideElementRight.getElementsByTagName("img")[imgNextrv].style.left = "0px";
            }
        }
        imgNextrv--;
        imgNextrh--;
        if(imgNextrv < 0){
            imgNextrv = ImgNum - 1;
        }
        if(imgNextrh < 0){
            imgNextrh = ImgNum - 1;
        }
    
        imgPrevcv--;
        imgPrevch--;
        imgPrevlv--;
        imgPrevlh--;
        imgPrevrv--;
        imgPrevrh--;
    
        // console.log(imgPrevcv);
    
        if(imgPrevcv < 0){
            imgPrevcv = ImgNum - 1
        }
        if(imgPrevch < 0){
            imgPrevch = ImgNum - 1
        }
        if(imgPrevlv < 0){
            imgPrevlv = ImgNum - 1
        }
        if(imgPrevlh < 0){
            imgPrevlh = ImgNum - 1
        }
        if(imgPrevrv < 0){
            imgPrevrv = ImgNum - 1
        }
        if(imgPrevrh < 0){
            imgPrevrh = ImgNum - 1;
        }
        
    });
    
    
    // Slider Previous Button
    
    
    for(nextRight = 0;nextRight < ImgNum;nextRight++){
            cslideElementCenter.getElementsByTagName("img")[nextRight].style.left = "300px";
            cslideElementLeft.getElementsByTagName("img")[nextRight].style.left = "300px";
            cslideElementRight.getElementsByTagName("img")[nextRight].style.left = "300px";
            if(nextRight == 0){
                cslideElementCenter.getElementsByTagName("img")[nextRight].style.left = "0px";
            }
            if(nextRight == ImgNum - 1){
                cslideElementLeft.getElementsByTagName("img")[nextRight].style.left = "0px";
            }
            if(nextRight == 1){
                cslideElementRight.getElementsByTagName("img")[nextRight].style.left = "0px";
            }
        }
    $("#cslidePrev1").on("click" , ()=>{
        for(pch = 0;pch < ImgNum;pch++){
            // cslideElementCenter.getElementsByTagName("img")[pch].style.visibility = "hidden";
            cslideElementCenter.getElementsByTagName("img")[pch].style.left = "300px";
            if(pch == imgPrevcv){
                cslideElementCenter.getElementsByTagName("img")[imgPrevcv].style.visibility = "visible";
                cslideElementCenter.getElementsByTagName("img")[imgPrevcv].style.left = "0";
            }
        }
        imgPrevcv++;
        imgPrevch++;
        if(imgPrevcv == ImgNum){
            imgPrevcv = 0;
        }
        if(imgPrevch == ImgNum){
            imgPrevch = 0;
        }
    
        for(plh = 0;plh < ImgNum;plh++){
            // cslideElementLeft.getElementsByTagName("img")[plh].style.visibility = "hidden";
            cslideElementLeft.getElementsByTagName("img")[plh].style.left = "300px";
            if(plh == imgPrevlv){
                cslideElementLeft.getElementsByTagName("img")[imgPrevlv].style.visibility = "visible";
                cslideElementLeft.getElementsByTagName("img")[imgPrevlv].style.left = "0";
            }
        }
        imgPrevlv++;
        imgPrevlh++;
        if(imgPrevlv == ImgNum){
            imgPrevlv = 0;
        }
        if(imgPrevlh == ImgNum){
            imgPrevlh = 0;
        }
    
        for(prh = 0;prh < ImgNum;prh++){
            // cslideElementRight.getElementsByTagName("img")[prh].style.visibility = "hidden";
            cslideElementRight.getElementsByTagName("img")[prh].style.left = "300px";
            if(prh == imgPrevrv){
                cslideElementRight.getElementsByTagName("img")[imgPrevrv].style.visibility = "visible";
                cslideElementRight.getElementsByTagName("img")[imgPrevrv].style.left = "0";
            }
        }
        imgPrevrv++;
        imgPrevrh++;
        if(imgPrevrv == ImgNum){
            imgPrevrv = 0;
        }
        if(imgPrevrh == ImgNum){
            imgPrevrh = 0;
        }
        // console.log(imgPrevcv);
    
        imgNextcv++;
        imgNextch++;
        imgNextlv++;
        imgNextlh++;
        imgNextrv++;
        imgNextrh++;
    
        if(imgNextcv == ImgNum){
            imgNextcv = 0;
        }
        if(imgNextch == ImgNum){
            imgNextch = 0;
        }
        if(imgNextlv == ImgNum){
            imgNextlv = 0;
        }
        if(imgNextlh == ImgNum){
            imgNextlh = 0;
        }
        if(imgNextrv == ImgNum){
            imgNextrv = 0;
        }
        if(imgNextrh == ImgNum){
            imgNextrh = 0;
        }
    
    
    });
    });