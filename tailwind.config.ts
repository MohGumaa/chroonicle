/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		'./pages/**/*.{js,ts,jsx,tsx,mdx}',
		'./components/**/*.{js,ts,jsx,tsx,mdx}',
		'./app/**/*.{js,ts,jsx,tsx,mdx}',
	],
	theme: {
		extend: {
			colors: {
				green: {
					50: '#30AF5B',
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
				},
				orange: {
					50: '#FF814C',
				},
				yellow: {
					50: '#FEC601',
					70: '#EFA640',
				},
			},
			backgroundImage: {
				'bg-img-1': "url('/img-1.png')",
				'bg-img-2': "url('/img-2.png')",
				'feature-bg': "url('/feature-bg.png')",
				pattern: "url('/pattern.png')",
				'pattern-2': "url('/hero-banner.webp')",
			},
			screens: {
				xs: '400px',
				'3xl': '1680px',
				'4xl': '2200px',
			},
			maxWidth: {
				'10xl': '1512px',
			},
			borderRadius: {
				'5xl': '40px',
			},
		},
	},
	plugins: [],
};
