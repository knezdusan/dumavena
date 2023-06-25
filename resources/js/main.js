const navMobile = document.getElementById("nav-mobile");
const mobileMenuButtons = document.getElementById("mobile-menu-buttons");
const menuOpen = document.getElementById("mobile-menu-open");
const menuClose = document.getElementById("mobile-menu-close");

mobileMenuButtons.addEventListener("click", function(){

	if (navMobile.style.display === "block") {
		navMobile.style.display = "none";
		menuOpen.style.display = "inline";
		menuClose.style.display = "none";
	} else {
		navMobile.style.display = "block";
		menuOpen.style.display = "none";
		menuClose.style.display = "inline";
	}
});

navMobile.addEventListener("click", function(){
	navMobile.style.display = "none";
	menuOpen.style.display = "inline";
	menuClose.style.display = "none";
});

