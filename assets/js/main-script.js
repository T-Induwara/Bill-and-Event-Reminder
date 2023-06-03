console.log("Script loaded");

var navMenu = document.getElementById("nav-list");
var mOpenBtn = document.getElementById("op-btn");
var mCloseBtn = document.getElementById("co-btn");

mOpenBtn.addEventListener("click",function(){
    navMenu.style.display = "flex";
    mOpenBtn.style.display = "none";
    mCloseBtn.style.display = "block";
});
mCloseBtn.addEventListener("click",function(){
    navMenu.style.display = "none";
    mOpenBtn.style.display = "block";
    mCloseBtn.style.display = "none";
});

