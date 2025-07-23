<!DOCTYPE html>
<html lang="en">
<head>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
    .bg-banner-big { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
    .gradient-text-inverse { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    .bg-banner { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
  </style>
</head>
<body class="bg-black text-white">

  <div x-data="{
      name: '{{ $title ?? 'Package Name' }}',
      description: '{{ $description ?? 'Package description' }}',
      screenshotUrl: '{{ $screenshot ?? '/images/banner-fallback.jpg' }}',
      commercial: {{ $commercial ?? false ? 'true' : 'false' }},
      community: {{ $community ?? false ? 'true' : 'false' }},
      get currentScreenshotUrl() {
          return this.screenshotUrl || '/images/banner-fallback.jpg'
      }
  }">

    @yield('content')

  </div>
</body>
</html>
