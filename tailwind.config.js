/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme:   {
        extend: {
            fontFamily: {
                sans: ['Poppins', 'sans-serif']
            },

            textColor: {
                'bootstrap':  '#7952b3',
                'cloudflare': '#f48120',
                'git':        '#f1502f',
                'gitlab':     '#FC6D27',
                'laravel':    '#fb503b',
                'linux':      '#ffcc00',
                'nodejs':     '#68a063',
                'npm':        '#cc3534',
                'trello':     '#008fe4',
                'vuejs':      '#42b883',
                'discord':    '#5865F2',
            }
        },
    },
    plugins: [],
}
