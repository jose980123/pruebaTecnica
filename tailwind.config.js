/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
    safelist: [
        "bg-pink-600",
        "bg-blue-600",
        "bg-orange-600",
        "bg-purple-600",
        "bg-violet-600",
        "bg-red-600",
        "bg-red-100",
        "bg-green-600",
        "bg-yellow-600",
        "bg-slate-600",
        "bg-zinc-600",
        "bg-neutral-600",
        "bg-stone-600",
        "bg-amber-600",
        "bg-line-600",
        "bg-emerald-600",
        "bg-teal-600",
    ],
};

