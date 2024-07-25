/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./src/**/*.{html,htm,js}'],
	theme: {
		container: {
			padding: 'var(--container-gap)',
			center: true,
			screens: {
				sm: '100%',
				md: '100%',
				lg: '100%',
				xl: '100%',
			},
		},
		fontFamily: {
			body: 'Roboto',
			header: 'Oswald',
		},
		spacing: {
			0: '0',
			4: '.04rem',
			6: '.06rem',
			8: '.08rem',
			10: '.1rem',
			12: '.12rem',
			14: '.14rem',
			16: '.16rem',
			20: '.2rem',
			24: '.24rem',
			26: '.26rem',
			32: '.32rem',
			36: '.36rem',
			40: '.4rem',
			50: '.5rem',
			100: '1rem',
		},
		borderWidth: {
			DEFAULT: '1px',
			1: '1px',
		},
		extend: {
			fontSize: {
				s: 'var(--txt-s)',
				m: 'var(--txt-m)',
				l: 'var(--txt-l)',
			},
			lineHeight: {},
			colors: {
				black: 'var(--black)',
				white: 'var(--white)',
				red: 'var(--red)',
				'dark-grey': 'var(--dark-grey)',
				grey: 'var(--grey)',
				'soft-grey': 'var(--soft-grey)',
			},

			borderRadius: {
				DEFAULT: '50%',
			},
		},
	},
	plugins: [],
}
