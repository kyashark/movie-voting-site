// Hamburger Menu
const menuItem = document.getElementById("menu-item");

menuItem.addEventListener("click",function(){
    document.getElementById("nav-bar").classList.toggle("show");

    document.querySelectorAll("span").forEach((bar,index) =>{
        bar.classList.toggle("change");
    });
})