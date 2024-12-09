
  // Hamburger Menu
  const menuItem = document.getElementById("menu-item");
  if (menuItem) {
    menuItem.addEventListener("click", function () {
      document.getElementById("nav-bar").classList.toggle("show");
      document.querySelectorAll("span").forEach((bar) => {
        bar.classList.toggle("change");
      });
    });
  }
