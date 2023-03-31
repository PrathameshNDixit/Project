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

let addbtn2 = document.getElementById("addToList2");
let output=document.getElementById("output");
let total=0;
let count2=0;
addbtn2.addEventListener("click",()=> {
    const name = document.getElementById("FacilityName").value;
    const rate = document.getElementById("Rate").value;
    const tbody = document.getElementById("mytbody2");
    var td1 = document.createElement('td');
    td1.appendChild(document.createTextNode(name));
    var td2 = document.createElement('td');
    td2.appendChild(document.createTextNode(rate));
    var th = document.createElement('th');
    th.appendChild(document.createTextNode(count2++));
    var tr = document.createElement('tr');
    tr.appendChild(th);
    tr.appendChild(td1);
    tr.appendChild(td2);
    tbody.appendChild(tr);
    total+=Number(rate);
    output.value=total;
});

let addbtn3 = document.getElementById("addToList3");
let count3=0;
addbtn3.addEventListener("click",()=> {
    const PaymentType = document.getElementById("PaymentType").value;
    const MobileApp = document.getElementById("MobileApp").value;
    const TransactionId = document.getElementById("TransactionId").value;
    const ReservationDate = document.getElementById("ReservationDate").value;
    const ChequeNo = document.getElementById("ChequeNo").value;
    const PaymentDate = document.getElementById("PaymentDate").value;
    const PaidAmount = document.getElementById("PaidAmount").value;
    const tbody = document.getElementById("mytbody3");
    var td1 = document.createElement('td');
    td1.appendChild(document.createTextNode(PaymentType));
    var td2 = document.createElement('td');
    td2.appendChild(document.createTextNode(MobileApp));
    var td3 = document.createElement('td');
    td3.appendChild(document.createTextNode(TransactionId));
    var td4 = document.createElement('td');
    td4.appendChild(document.createTextNode(ReservationDate));
    var td5 = document.createElement('td');
    td5.appendChild(document.createTextNode(ChequeNo));
    var td6 = document.createElement('td');
    td6.appendChild(document.createTextNode(PaymentDate));
    var td7 = document.createElement('td');
    td7.appendChild(document.createTextNode(PaidAmount));
    var th = document.createElement('th');
    th.appendChild(document.createTextNode(count3++));
    var tr = document.createElement('tr');
    tr.appendChild(th);
    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    tr.appendChild(td4);
    tr.appendChild(td5);
    tr.appendChild(td6);
    tr.appendChild(td7);
    tbody.appendChild(tr);
});

let addbtn4 = document.getElementById("addToList4");
let count4=0;
addbtn4.addEventListener("click",()=> {
    const PaymentType = document.getElementById("MenuTypeName").value;
    const MobileApp = document.getElementById("MenuName").value;
    const TransactionId = document.getElementById("Quantity").value;
    const ReservationDate = document.getElementById("Rate2").value;
    const ChequeNo = document.getElementById("Processingtime").value;
    const PaymentDate = document.getElementById("DeliveryTime").value;
    const PaidAmount = document.getElementById("TotalAmount").value;
    const tbody = document.getElementById("mytbody4");
    var td1 = document.createElement('td');
    td1.appendChild(document.createTextNode(PaymentType));
    var td2 = document.createElement('td');
    td2.appendChild(document.createTextNode(MobileApp));
    var td3 = document.createElement('td');
    td3.appendChild(document.createTextNode(TransactionId));
    var td4 = document.createElement('td');
    td4.appendChild(document.createTextNode(ReservationDate));
    var td5 = document.createElement('td');
    td5.appendChild(document.createTextNode(ChequeNo));
    var td6 = document.createElement('td');
    td6.appendChild(document.createTextNode(PaymentDate));
    var td7 = document.createElement('td');
    td7.appendChild(document.createTextNode(PaidAmount));
    var th = document.createElement('th');
    th.appendChild(document.createTextNode(count4++));
    var tr = document.createElement('tr');
    tr.appendChild(th);
    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    tr.appendChild(td4);
    tr.appendChild(td5);
    tr.appendChild(td6);
    tr.appendChild(td7);
    tbody.appendChild(tr);
});