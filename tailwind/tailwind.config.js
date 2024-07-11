// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		extend: {
			colors: {
				green: {
					50: '#30AF5B',
					70: '#39B660',
					80: '#257C52',
					90: '#0a3215',
				},
				gray: {
					10: '#EEEEEE',
					20: '#A2A2A2',
					30: '#fefbf5',
					40: '#f0f2f0',
					50: '#585858',
					90: '#0a3215',
				},
				neutral: {
					10: '#333333',
					20: '#021b1f7f',
					30: '#000000',
				},
				orange: {
					50: '#FF814C',
				},
				yellow: {
					50: '#FEC601',
					70: '#EFA640',
				},
			},
		},
		container: {
			center: true,
			screens: {
				sm: '640px',
				md: '768px',
				lg: '1024px',
				xl: '1280px',
				'2xl': '1280px',
				
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
