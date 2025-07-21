<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Moox - CMS for Filament, Laravel and PHP</title>
    <link
      rel="icon"
      href="{{ Vite::asset('resources/images/moox-icon.png') }}"
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

    <div
    class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
    aria-hidden="true"
  >
    <div
      class="relative left-[calc(50%-11rem)] aspect-1155/678 w-255 -translate-x-1/2 rotate-30 bg-linear-to-tr from-pink-600 to-violet-600 opacity-20 sm:left-[calc(50%-30rem)] sm:w-288.75"
      style="
        clip-path: polygon(
          74.1% 44.1%,
          100% 61.6%,
          97.5% 26.9%,
          85.5% 0.1%,
          80.7% 2%,
          72.5% 32.5%,
          60.2% 62.4%,
          52.4% 68.1%,
          47.5% 58.3%,
          45.2% 34.5%,
          27.5% 76.7%,
          0.1% 64.9%,
          17.9% 100%,
          27.6% 76.8%,
          76.1% 97.7%,
          74.1% 44.1%
        );
      "
    ></div>
  </div>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
  </body>
</html>
