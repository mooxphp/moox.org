<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <style>
    .bg-banner-big { background-image: url("{{ request()->getSchemeAndHttpHost() }}/images/banner-bg-big.jpg"); background-size: cover; background-position: center; background-repeat: no-repeat; }
    .gradient-text-inverse { background: linear-gradient(135deg, #7700ff, #ff0080); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .bg-banner { background-image: url("{{ request()->getSchemeAndHttpHost() }}/images/banner-bg.jpg"); background-size: cover; background-position: center; background-repeat: no-repeat; }
  </style>
</head>
<body class="bg-black text-white">

  @yield('content')

</body>
</html>
