const links = document.querySelectorAll(".mynav-link");
const divs = document.querySelectorAll(".mydiv");
links[0].classList.add("hover");
divs[0].classList.add("active");
divs[0].classList.remove("mydiv");
links.forEach(element => {
    element.addEventListener("click", () => {
        links.forEach(t => {
            t.classList.remove("hover");
        })
        element.classList.add("hover");
        divs.forEach(div => {
            div.classList.add("mydiv");
        })
        const name = element.id;
        const id = name.split('-')[1];
        const myele = document.getElementById('div-' + id);
        myele.classList.add('active');
        myele.classList.remove('mydiv');
    });
});