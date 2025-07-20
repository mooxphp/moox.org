<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Moox - CMS for Filament, Laravel and PHP</title>
    <link
      rel="icon"
      href="https://moox.heco.si/img/moox-icon.png"
      type="image/png"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/simple-icons-font@v15/font/simple-icons.min.css"
      type="text/css"
    />

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
    <script src="https://unpkg.com/motion@10.16.2/dist/motion.min.js"></script>
  </head>
  <body
    class="font-sans bg-gradient-to-br from-mooxdark to-mooxblue min-h-screen text-white relative"
  >
    <canvas
      id="starfield"
      class="fixed inset-0 w-full h-full pointer-events-none -z-10"
    ></canvas>

    @include('header')

    @yield('content')

    @include('footer')
  </body>
</html>
