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
        src="{{ Vite::asset('resources/images/moox-logo.png') }}"
        alt="Moox Logo"
      />
    </a>
  </div>
  <div class="flex lg:hidden">
    <button
      type="button"
      class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white"
      @click="mobileMenu = true"
    >
      <span class="sr-only">Open main menu</span>
      <svg
        class="size-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        aria-hidden="true"
        data-slot="icon"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
        />
      </svg>
    </button>
  </div>
  <div class="hidden lg:flex lg:gap-x-12">
    <a
      href="{{ route('packages') }}"
      class="text-lg font-semibold text-white hover:text-pink-500"
      >Packages</a
    >
    <a
      href="{{ route('docs') }}"
      class="text-lg font-semibold text-white hover:text-pink-500"
      >Documentation</a
    >
    <a
      href="{{ route('pricing') }}"
      class="text-lg font-semibold text-white hover:text-pink-500"
      >Pricing</a
    >
    <a
      href="{{ route('support') }}"
      class="text-lg font-semibold text-white hover:text-pink-500"
      >Support</a
    >
    <a
      href="{{ route('demo') }}"
      class="text-lg font-semibold text-white hover:text-pink-500"
      >Demo</a
    >
  </div>

  <div class="hidden lg:flex lg:flex-1 lg:justify-end">
    <a
      href="{{ route('pro') }}"
      class="animated-gradient-border text-gray-200 rounded-full hover:text-pink-500 mr-5 mt-0.5 font-bold"
    >
      <div class="bg-indigo-950/90 rounded-full px-4 py-1">Pro</div>
    </a>
    <a
      href="https://github.com/mooxphp/"
      class="si si-github text-3xl text-gray-300 hover:text-violet-700"
      target="_blank"
    >
    </a>
  </div>
</nav>

<div class="lg:hidden" role="dialog" aria-modal="true">
  <div
    class="fixed inset-0 z-50"
    x-show="mobileMenu"
    x-transition.opacity
    @click="mobileMenu = false"
  ></div>
  <div
    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
    x-show="mobileMenu"
    x-transition:enter="transition ease-in-out duration-300"
    x-transition:enter-start="translate-x-full opacity-0"
    x-transition:enter-end="translate-x-0 opacity-100"
    x-transition:leave="transition ease-in-out duration-200"
    x-transition:leave-start="translate-x-0 opacity-100"
    x-transition:leave-end="translate-x-full opacity-0"
  >
    <div class="fixed inset-0 z-50" @click="mobileMenu = false"></div>
    <div
      class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-mooxdark p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
    >
      <div class="flex items-center justify-between mt-6">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only"
            >Moox - CMS for Filament, Laravel and PHP</span
          >
          <img
            class="h-10 w-auto"
            src="{{ Vite::asset('resources/images/moox-logo.png') }}"
            alt="Moox Logo"
          />
        </a>
        <button
          type="button"
          class="-m-2.5 rounded-md p-2.5 pr-4 text-white"
          @click="mobileMenu = false"
        >
          <span class="sr-only">Close menu</span>
          <svg
            class="size-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            aria-hidden="true"
            data-slot="icon"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18 18 6M6 6l12 12"
            />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6">
            <a
              href="{{ route('welcome') }}"
              class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-50"
              >Home</a
            >
            <a
              href="{{ route('packages') }}"
              class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-50"
              >Packages</a
            >
            <a
              href="{{ route('docs') }}"
              class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-50"
              >Documentation</a
            >
            <a
              href="{{ route('pricing') }}"
              class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white hover:bg-gray-50"
              >Pricing</a
            >
            <a
              href="{{ route('support') }}"
              class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white hover:bg-gray-50"
              >Support</a
            >
            <a
              href="{{ route('demo') }}"
              class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white hover:bg-gray-50"
              >Demo</a
            >
            <a
              href="{{ route('pro') }}"
              class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white hover:bg-gray-50"
              >Pro</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</header>
