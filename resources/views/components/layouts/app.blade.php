<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-gray-100 text-gray-800">
  {{-- when we use  a compnent we use x- --}}
  @auth
  <div class="flex">`
    <x-layouts.sidebar/>
    <div class="flex-1">
        <x-messages />
        {{ $slot }}
    </div>

  </div>
@endauth
@guest
    <x-layouts.menu/>
    <x-messages />
    {{ $slot }}
@endguest
  
  <x-layouts.footer/>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  @stack('scripts')
</body>
</html>
