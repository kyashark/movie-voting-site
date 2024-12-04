// Hamburger Menu
const menuItem = document.getElementById("menu-item");

menuItem.addEventListener("click", function () {
    document.getElementById("nav-bar").classList.toggle("show");

    document.querySelectorAll("span").forEach((bar, index) => {
        bar.classList.toggle("change");
    });
})



// Movie card label display

const cardItems = document.querySelectorAll(".card");
const labelItems = document.querySelectorAll(".card-label");

cardItems.forEach((cardItem, index) => {
    const labelItem = labelItems[index];
  
    labelItem.style.display = "none";
  
    cardItem.addEventListener("mouseenter", () => {
      labelItem.style.display = "flex"; 
    });
  
    cardItem.addEventListener("mouseleave", () => {
      labelItem.style.display = "none";
    });
  });



// Heart click 
const heartItems = document.querySelectorAll(".material-symbols-outlined");

heartItems.forEach((heartItem) => {
    heartItem.addEventListener("click", () => {
      const currentStyle = window.getComputedStyle(heartItem).fontVariationSettings;
  
      if (currentStyle.includes('"FILL" 0')) {
        heartItem.style.fontVariationSettings = '"FILL" 1, "wght" 400, "GRAD" 0, "opsz" 0';
      } else {
        heartItem.style.fontVariationSettings = '"FILL" 0, "wght" 400, "GRAD" 0, "opsz" 0';
      }
    });
  });



// Filter buttons behavior 
const filterButtons = document.querySelectorAll(".filter");

filterButtons.forEach(button =>{
    button.addEventListener("click",()=>{
        filterButtons.forEach(btn => btn.classList.remove("active"));
        button.classList.add("active");
    });
});


// Genre button behavior
const generButtons = document.querySelectorAll(".gener");


generButtons.forEach(button =>{
    button.addEventListener("click", () => {

       if(button.classList.contains("active")){
        button.classList.remove("active");
       }else{
        button.classList.add("active");
       }
    });    
});



