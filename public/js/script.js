window.onscroll = function () {
	let header = document.querySelector("header#header");
	let headerPos = header.offsetTop + 300;
	if (scrollY > headerPos) {
		header.setAttribute("style", "--tw-bg-opacity: 1;");
	} else {
		header.setAttribute("style", "--tw-bg-opacity: 0;");
	}
}