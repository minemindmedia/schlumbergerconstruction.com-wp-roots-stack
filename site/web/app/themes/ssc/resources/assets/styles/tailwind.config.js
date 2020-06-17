/*
|-------------------------------------------------------------------------------
| Tailwind – The Utility-First CSS Framework
|-------------------------------------------------------------------------------
|
| Documentation at https://tailwindcss.com
|
*/

/**
 * Global Styles Plugin
 *
 * This plugin modifies Tailwind’s base styles using values from the theme.
 * https://tailwindcss.com/docs/adding-base-styles#using-a-plugin
 */
const globalStyles = ({ addBase, config }) => {
  addBase({
    a: {
      color: config('theme.textColor.primary'),
      textDecoration: 'none',
      borderBottom: '1px solid transparent',
      transition: '0.2s ease',
    },
    'a:hover': {
      borderColor: config('theme.borderColor.primary'),
    },
    p: {
      marginBottom: config('theme.margin.3'),
      lineHeight: config('theme.lineHeight.normal'),
    },
    'h1, h2, h3, h4, h5': {
      marginBottom: config('theme.margin.2'),
      lineHeight: config('theme.lineHeight.tight'),
    },
    h1: { fontSize: config('theme.fontSize.5xl') },
    h2: { fontSize: config('theme.fontSize.4xl') },
    h3: { fontSize: config('theme.fontSize.3xl') },
    h4: { fontSize: config('theme.fontSize.2xl') },
    h5: { fontSize: config('theme.fontSize.xl') },
    'ol, ul': { paddingLeft: config('theme.padding.4') },
    ol: { listStyleType: 'decimal' },
    ul: { listStyleType: 'disc' },
  });
}

/**
 * Configuration
 */
module.exports = {
  theme: {
    colors: {
      primary: 'rgba(122,122,117, 0.85)',
      secondary: 'rgba(122,122,117, 0.65)',
      white: '#fff',
      gray: {
        100: '#f7fafc',
        200: '#edf2f7',
        300: '#e2e8f0',
        400: '#cbd5e0',
        500: '#a0aec0',
        600: '#718096',
        700: '#4a5568',
        800: '#2d3748',
        900: '#1a202c',
      },
      transparent: 'transparent',
    },
    shadows: {
      outline: '0 0 0 3px rgba(82,93,220,0.3)',
    },
    container: {
      center: true,
      padding: '1rem',
    },
    inset: {
      '0': 0,
      auto: 'auto',
      '1/2': '50%',
    },
    extend: {
      screens: theme => ({
        'xxl': '1600px',
      }),
      height: theme => ({
        "110px": "110px",
        "52": "120px",
        "screen/2": "50vh",
        "screen/3": "calc(100vh / 3)",
        "screen/4": "calc(100vh / 4)",
        "screen/5": "calc(100vh / 5)",
      }),
      width: theme => ({
        "menu": "518px",
        "90": "90%",
        "max-w-screen-md": "768px",
      }),
      maxWidth: theme => ({
        "100": "1600px",
      }),
      margin: theme => ({
        "7": "1.75em",
      }),
      padding: theme => ({
        "2rem": "2rem",
        "8": "32px",
        "20": "48px",
        "52": "120px",
      }),
      backgroundOpacity: theme => ({
        '10': '0.1',
        '20': '0.2',
        '75': '0.75',
      }),
      fontSize: theme => ({
        'sm': '12px',
        'md': '16px',
        'lg': '18px',
        '2xl': '20px',
        '22px': '22px',
        '2.5xl': '23px',
        '24px': '24px',
        '3xl': '27px',
        '4xl': '33px',
      }),
      textColor: theme => ({
        primary: 'rgba(122,122,117, 0.85)',
        secondary: 'rgba(122,122,117, 0.65)',
      }),
      order: theme => ({
        first: '-9999',
        last: '9999',
        none: '0',
        normal: '0',
        '1': '1',
        '2': '2',
        '3': '3',
        '4': '4',
        '5': '5',
        '6': '6',
        '7': '7',
        '8': '8',
        '9': '9',
        '10': '10',
        '11': '11',
        '12': '12',
      }),
    },
  },
  variants: {
    // Define variants
  },
  plugins: [
    globalStyles,
  ],
}
