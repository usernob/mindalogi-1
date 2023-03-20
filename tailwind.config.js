/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"app/views/**/*.php",
		// "./node_modules/tw-elements/dist/js/**/*.js",
		"public/**/*.{php,js}"
	],
	theme: {
		container: {
			center: true,
			padding: {
				md: "2rem",
				lg: "6rem"
			}
		},
		fontFamily: {
			main: ["Poppins", "Open\\ Sans", "Segoe\\ UI", "ui-sans-serif", "system-ui", "sans-serif", "Apple\\ Color\\ Emoji", "Segoe\\ UI\\ Emoji", "Segoe\\ UI\\ Symbol", "Noto\\ Color\\ Emoji"]
		},
		extend: {
			colors: {
				primer1: "#3206F9",
				primer2: "#FF1D61",
				primer3: "#1CADFF",
				primer4: "#1FA3A3",
				primer5: "#E0DEDE",
				dark: "#000000",
				white: "#FFFFFF"
			},
		},
	},
	// plugins: [
	//     require('tw-elements/dist/plugin'),
	//     require("@tailwindcss/forms")({
	//         strategy: 'class', // only generate classes
	//     }),
	// ],
}
