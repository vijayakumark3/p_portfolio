var tglIcn = document.querySelector("#menuicon");
var menubr = document.querySelector("#ulcont");

tglIcn.onclick = function () {
	var attrVal = tglIcn.getAttribute("class");
	// alert("The value is : " + attrVal);

	if (attrVal === "fa-solid fa-bars") {
		tglIcn.setAttribute("class", "fa-solid fa-xmark");
		menubr.setAttribute("class", "active");
	}
	else {
		tglIcn.setAttribute("class", "fa-solid fa-bars");
		menubr.setAttribute("class", "");
	}
}



// tglIcn.addEventListener("click", function() {
// 	menubr.style.display = (menubr.style.display === "block") ? "none" : "block";
// });

