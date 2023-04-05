const btn = document.getElementById("mynav-menu-btn");
const menu = document.getElementById("menu1");
btn.addEventListener("click", () => {
    menu.classList.toggle("active");
})