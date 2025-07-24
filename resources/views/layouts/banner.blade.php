<!DOCTYPE html>
<html lang="en">
<head>
    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        $cssFile = $manifest['resources/css/app.css']['file'] ?? 'assets/app.css';
        $cssUrl = request()->getSchemeAndHttpHost() . '/build/' . $cssFile;
    @endphp
    <link rel="stylesheet" href="{{ $cssUrl }}">
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
