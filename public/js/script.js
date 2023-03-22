window.onscroll = function () {
	let header = document.querySelector("header#header");
	let headerPos = header.offsetTop + 100;
	if (scrollY > headerPos) {
		header.setAttribute("style", "--tw-bg-opacity: 1;");
	} else {
		header.setAttribute("style", "--tw-bg-opacity: 0;");
	}
}

function modal(message, display = "flex", isElement = false) {
	let elm = document.getElementById("modal");
	let viewport = document.getElementById("viewport_modal");
	let content = document.createElement("p");
	if (isElement) {
		content = message;
	} else {
		content.innerText = message;
		content.classList.add("text-lg");
	}
	for (let i = 0; i < viewport.childElementCount; i++) {
		viewport.removeChild(viewport.childNodes[i]);
	}
	viewport.appendChild(content);
	elm.style.display = display;
}