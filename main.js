let category = document.getElementById("cat");
let items = document.getElementById("items");
let bottom = document.getElementById("bot");


category.onclick = function () {
	items.style.display = "block";

}
	bottom.onmouseup = function () {
		items.style.display = "none";
	}

	category.ondblclick= function () {
		items.style.display = "none";
}
