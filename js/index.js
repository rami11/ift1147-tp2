function updateView() {
	let cartItem = document.getElementById("nav-item-cart");
	let emailItem = document.getElementById("nav-item-email");

	let registerItem = document.getElementById("nav-item-register");
	let loginItem = document.getElementById("nav-item-login");
	let logoutItem = document.getElementById("nav-item-logout");

	cartItem.style.display = "block";
	emailItem.style.display = "block";

	registerItem.style.display = "none";
	loginItem.style.display = "none";
	logoutItem.style.display = "block";

}