module.exports = {
	content: [
		"./resources/**/*.blade.php",
		"./resources/**/*.js",
		"./resources/**/*.vue",
		"./node_modules/flowbite/**/*.js"
	],
	future: {
		// removeDeprecatedGapUtilities: true,
		// purgeLayersByDefault: true,
	},
	purge: [],
	theme: {
		extend: {},
	},
	variants: {},
	plugins: [
		require('flowbite/plugin'),
	],
}
