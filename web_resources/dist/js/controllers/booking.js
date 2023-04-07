const links = document.querySelectorAll(".mynav-link");
const divs = document.querySelectorAll(".mydiv");
links[0].classList.add("hover");
divs[0].classList.add("active");
divs[0].classList.remove("mydiv");
links.forEach((element) => {
	element.addEventListener("click", () => {
		links.forEach((t) => {
			t.classList.remove("hover");
		});
		element.classList.add("hover");
		divs.forEach((div) => {
			div.classList.add("mydiv");
		});
		const name = element.id;
		const id = name.split("-")[1];
		const myele = document.getElementById("div-" + id);
		myele.classList.add("active");
		myele.classList.remove("mydiv");
	});
});

let addbtn = document.getElementById("addToList");
let count = 1;
addbtn.addEventListener("click", () => {
	const barcode = document.getElementById("ItemBarCode").value;
	const ItemId = document.getElementById("ItemId").value;
	const ItemName = document.getElementById("ItemName").value;
	const Unit = document.getElementById("Unit").value;
	const ExpiryDate = document.getElementById("ExpiryDate").value;
	const Rate = document.getElementById("Rate").value;
	const Qty = document.getElementById("Qty").value;
	const FreeQty = document.getElementById("FreeQty").value;
	const Amount = document.getElementById("Amount").value;
	const TotalAmount = document.getElementById("TotalAmount").value;
	const HSN = document.getElementById("HSN").value;
	const GST = document.getElementById("GST").value;
	const GSTAmount = document.getElementById("GSTAmount").value;
	const Discount = document.getElementById("Discount").value;
	const DiscountAmount = document.getElementById("DiscountAmount").value;
	const tbody = document.getElementById("mytbody");
	var td1 = document.createElement("td");
	td1.appendChild(document.createTextNode(barcode));
	var td2 = document.createElement("td");
	td2.appendChild(document.createTextNode(ItemId));
	var td3 = document.createElement("td");
	td3.appendChild(document.createTextNode(ItemName));
	var td4 = document.createElement("td");
	td4.appendChild(document.createTextNode(Unit));
	var td5 = document.createElement("td");
	td5.appendChild(document.createTextNode(ExpiryDate));
	var td6 = document.createElement("td");
	td6.appendChild(document.createTextNode(Rate));
	var td7 = document.createElement("td");
	td7.appendChild(document.createTextNode(Qty));
	var td8 = document.createElement("td");
	td8.appendChild(document.createTextNode(FreeQty));
	var td9 = document.createElement("td");
	td9.appendChild(document.createTextNode(Amount));
	var td10 = document.createElement("td");
	td10.appendChild(document.createTextNode(TotalAmount));
	var td11 = document.createElement("td");
	td11.appendChild(document.createTextNode(HSN));
	var td12 = document.createElement("td");
	td12.appendChild(document.createTextNode(GST));
	var td13 = document.createElement("td");
	td13.appendChild(document.createTextNode(GSTAmount));
	var td14 = document.createElement("td");
	td14.appendChild(document.createTextNode(Discount));
	var td15 = document.createElement("td");
	td15.appendChild(document.createTextNode(DiscountAmount));
	var th = document.createElement("th");
	th.appendChild(document.createTextNode(count++));
	var tr = document.createElement("tr");
	tr.appendChild(th);
	tr.appendChild(td1);
	tr.appendChild(td2);
	tr.appendChild(td3);
	tr.appendChild(td4);
	tr.appendChild(td5);
	tr.appendChild(td6);
	tr.appendChild(td7);
	tr.appendChild(td8);
	tr.appendChild(td9);
	tr.appendChild(td10);
	tr.appendChild(td11);
	tr.appendChild(td12);
	tr.appendChild(td13);
	tr.appendChild(td14);
	tr.appendChild(td15);
	tbody.appendChild(tr);
});

let addbtn2 = document.getElementById("addToList2");
let output = document.getElementById("output");
let total = 0;
let a = 1;
let count2 = 1;
addbtn2.addEventListener("click", () => {
	// const PayTypeId = document.getElementById("PayTypeId").value;
	const PackageName = document.getElementById("PackageName").value;
    const rate = document.getElementById("rate").value;
	const tbody = document.getElementById("mytbody2");
    var td1 = document.createElement("td");
    td1.appendChild(document.createTextNode(a++));
	var td2 = document.createElement("td");
	td2.appendChild(document.createTextNode(PackageName));
    var td3 = document.createElement("td");
    td3.appendChild(document.createTextNode(rate));
	var th = document.createElement("th");
	th.appendChild(document.createTextNode(count2++));
	var tr = document.createElement("tr");
	tr.appendChild(th);
	tr.appendChild(td1);
	tr.appendChild(td2);
    tr.appendChild(td3);
	tbody.appendChild(tr);
	// total += Number(rate);
	// output.value = total;
});

let addbtn3 = document.getElementById("addToList3");
let count3 = 0;
addbtn3.addEventListener("click", () => {
	const PaymentType = document.getElementById("PaymentType").value;
	const MobileApp = document.getElementById("MobileApp").value;
	const TransactionId = document.getElementById("TransactionId").value;
	const ReservationDate = document.getElementById("ReservationDate").value;
	const ChequeNo = document.getElementById("ChequeNo").value;
	const PaymentDate = document.getElementById("PaymentDate").value;
	const PaidAmount = document.getElementById("PaidAmount").value;
	const tbody = document.getElementById("mytbody3");
	var td1 = document.createElement("td");
	td1.appendChild(document.createTextNode(PaymentType));
	var td2 = document.createElement("td");
	td2.appendChild(document.createTextNode(MobileApp));
	var td3 = document.createElement("td");
	td3.appendChild(document.createTextNode(TransactionId));
	var td4 = document.createElement("td");
	td4.appendChild(document.createTextNode(ReservationDate));
	var td5 = document.createElement("td");
	td5.appendChild(document.createTextNode(ChequeNo));
	var td6 = document.createElement("td");
	td6.appendChild(document.createTextNode(PaymentDate));
	var td7 = document.createElement("td");
	td7.appendChild(document.createTextNode(PaidAmount));
	var th = document.createElement("th");
	th.appendChild(document.createTextNode(count3++));
	var tr = document.createElement("tr");
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
let count4 = 0;
addbtn4.addEventListener("click", () => {
	const PaymentType = document.getElementById("MenuTypeName").value;
	const MobileApp = document.getElementById("MenuName").value;
	const TransactionId = document.getElementById("Quantity").value;
	const ReservationDate = document.getElementById("Rate2").value;
	const ChequeNo = document.getElementById("Processingtime").value;
	const PaymentDate = document.getElementById("DeliveryTime").value;
	const PaidAmount = document.getElementById("TotalAmount").value;
	const tbody = document.getElementById("mytbody4");
	var td1 = document.createElement("td");
	td1.appendChild(document.createTextNode(PaymentType));
	var td2 = document.createElement("td");
	td2.appendChild(document.createTextNode(MobileApp));
	var td3 = document.createElement("td");
	td3.appendChild(document.createTextNode(TransactionId));
	var td4 = document.createElement("td");
	td4.appendChild(document.createTextNode(ReservationDate));
	var td5 = document.createElement("td");
	td5.appendChild(document.createTextNode(ChequeNo));
	var td6 = document.createElement("td");
	td6.appendChild(document.createTextNode(PaymentDate));
	var td7 = document.createElement("td");
	td7.appendChild(document.createTextNode(PaidAmount));
	var th = document.createElement("th");
	th.appendChild(document.createTextNode(count4++));
	var tr = document.createElement("tr");
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
