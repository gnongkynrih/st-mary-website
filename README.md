USE FLOWBITE

https://flowbite.com/docs/getting-started/laravel/
npm install flowbite --save
Import the default theme variables from Flowbite inside your main app.css CSS file: resources/css/app.css
@import "flowbite/src/themes/default";
@plugin "flowbite/plugin";

in the app.blade.php add this at the end of the body tag

<body>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

ADD ANIMATION
https://animate.style/
npm install animate.css --save
in the resources/css/app.css add this
@import "animate.css";
