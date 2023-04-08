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
let output1=document.getElementById("output");
let count=0;
let total=0;
addbtn.addEventListener("click",()=> {
    //const FacilityId = document.getElementById("FacilityId").value;
    const FacilityName = document.getElementById("FacilityName").value;
    const FacilityRate = document.getElementById("FacilityRate").value;
    const tbody = document.getElementById("mytbody");
    var td1 = document.createElement('td');
    td1.appendChild(document.createTextNode(FacilityName));
    var td2 = document.createElement('td');
    td2.appendChild(document.createTextNode(FacilityRate));
    //td3.appendChild(document.createTextNode(rate));
    var th = document.createElement('th');
    th.appendChild(document.createTextNode(count++));
    var td3 = document.createElement('td');
    td3.appendChild(document.createTextNode(count));
    var tr = document.createElement('tr');
    tr.appendChild(th);
    tr.appendChild(td3);
    tr.appendChild(td1);
    tr.appendChild(td2);
    tbody.appendChild(tr);
    total+=Number(FacilityRate);
    output1.value=total;
});

let addbtn2 = document.getElementById("addToList2");
let output=document.getElementById("output1");
let total1=0;
let count2=0;
addbtn2.addEventListener("click",()=> {
    const Plan = document.getElementById("Plan").value;
    const rate = document.getElementById("PlanRate").value;
    const tbody = document.getElementById("mytbody1");
    var td1 = document.createElement('td');
    td1.appendChild(document.createTextNode(Plan));
    var td2 = document.createElement('td');
    td2.appendChild(document.createTextNode(rate));
    var th = document.createElement('th');
    th.appendChild(document.createTextNode(count2++));
    var td3 = document.createElement('td3');
    td3.appendChild(document.createTextNode(count2));
    var tr = document.createElement('tr');
    tr.appendChild(th);
    tr.appendChild(td3);
    tr.appendChild(td1);
    tr.appendChild(td2);
    tbody.appendChild(tr);
    total1+=Number(rate);
    output.value=total1;
});

let addbtn3 = document.getElementById("addToList3");
let output2=document.getElementById("output2");
let total2=0;
let count3=0;
addbtn3.addEventListener("click",()=> {
    const MenuName = document.getElementById("Menu").value;
    const MenuRate = document.getElementById("MenuRate").value;
    const tbody = document.getElementById("mytbody2");
    var td1 = document.createElement('td');
    td1.appendChild(document.createTextNode(MenuName));
    var td2 = document.createElement('td');
    td2.appendChild(document.createTextNode(MenuRate));
    var th = document.createElement('th');
    th.appendChild(document.createTextNode(count3++));
    var td3 = document.createElement('td3');
    td3.appendChild(document.createTextNode(count3));
    var tr = document.createElement('tr');
    tr.appendChild(th);
    tr.appendChild(td3);
    tr.appendChild(td1);
    tr.appendChild(td2);
    tbody.appendChild(tr);
    total2+=Number(MenuRate);
    output2.value=total2;
});

/*let addbtn4 = document.getElementById("addToList4");
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
});*/