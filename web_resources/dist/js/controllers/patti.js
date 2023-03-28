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


let addbtn = document.getElementById("addToList");
let count=0;
addbtn.addEventListener("click",()=> {
    const room = document.getElementById("Room").value;
    const roomno = document.getElementById("RoomNo").value;
    const tbody = document.getElementById("mytbody");
    var td1 = document.createElement('td');
    td1.appendChild(document.createTextNode(room));
    var td2 = document.createElement('td');
    td2.appendChild(document.createTextNode(roomno));
    var th = document.createElement('th');
    th.appendChild(document.createTextNode(count++));
    var tr = document.createElement('tr');
    tr.appendChild(th);
    tr.appendChild(td1);
    tr.appendChild(td2);
    tbody.appendChild(tr);
});
