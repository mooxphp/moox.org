<header
x-data="{ mobileMenu: false, desktopProduct: false, desktopCompany: false, mobileProduct: false, mobileCompany: false }"
>
<nav
  class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8 pt-12"
  aria-label="Global"
>
  <div class="flex lg:flex-1">
    <a href="{{ route('welcome') }}" class="-m-1.5 p-1.5">
      <span class="sr-only"
        >Moox - CMS for Filament, Laravel and PHP</span
      >
      <img
        class="h-10 w-auto"
        src="{{ asset('/images/moox-logo.png') }}"
        alt="Moox Logo"
      />
    </a>
  </div>

  <div class="lg:flex lg:flex-1 lg:justify-end">
    <a href="https://github.com/mooxphp/" target="_blank">
        <x-si-github class="mt-1 h-7 w-7 text-gray-300 hover:text-violet-700" />
    </a>
  </div>
</nav>

</header>
