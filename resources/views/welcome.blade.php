@extends('layouts.web')

@section('content')
    <img
      src="{{ asset('/images/polygon.png') }}"
      alt=""
      class="hidden lg:block floating-polygon absolute top-[70vh] left-[10%] w-64 h-64 pointer-events-none -z-50"
      style="object-fit: contain"
    />
    <img
      src="{{ asset('/images/polygon.png') }}"
      alt=""
      class="hidden lg:block floating-polygon absolute top-[55vh] right-[15%] w-32 h-32 pointer-events-none -z-50"
      style="object-fit: contain"
    />
    <img
      src="{{ asset('/images/polygon.png') }}"
      alt=""
      class="hidden lg:block floating-polygon absolute top-[155vh] right-[10%] w-40 h-40 pointer-events-none -z-50"
      style="object-fit: contain"
    />
    <img
      src="{{ asset('/images/polygon.png') }}"
      alt=""
      class="hidden lg:block floating-polygon absolute top-[235vh] left-[15%] w-40 h-40 pointer-events-none -z-50"
      style="object-fit: contain"
    />
    <img
      src="{{ asset('/images/polygon.png') }}"
      alt=""
      class="hidden lg:block floating-polygon absolute bottom-[75vh] left-[15%] w-40 h-40 pointer-events-none -z-50"
      style="object-fit: contain"
    />

    <div class="pt-16 sm:pt-20">
      <div class="mx-auto max-w-7xl">
        <div class="mx-auto">
          <div class="relative isolate lg:pt-14">
            <div class="flex justify-center gap-10">
              <div class="ml-10 -mt-10 mr-5 pb-5 w-2/5 hidden lg:block">
                <div class="relative">
                  <img
                    id="rocket-bot"
                    src="{{ asset('/images/robot.png') }}"
                    alt="Moox Bot"
                    class="w-auto mt-3"
                    style="transform: rotate(15deg)"
                  />
                </div>
              </div>
              <div class="w-3/5 -mt-10 lg:mr-20 lg:pr-20">
                <div class="mt-24 sm:mt-32 lg:mt-16 mb-10">
                    <span class="rounded-full bg-indigo-500/10 px-3 py-1 text-sm/6 font-semibold text-indigo-400 ring-1 ring-indigo-500/25 ring-inset">News</span>
                    <span class="ml-3 inline-flex items-center space-x-2 text-sm/6 font-medium text-gray-300 hover:text-pink-500">
                        <span>Tailwind 4.0 compatible now!</span>
                    </span>
                </div>
                <h1 id="typewriter-heading" class="font-semibold tracking-tight text-balance gradient-text-default sm:text-6xl text-4xl pb-2">
                  The new Laravel Ecosystem
                </h1>
                <p class="mt-8 text-lg font-medium text-pretty text-gray-300 sm:text-xl/8">
                  We are about to build a collection of powerful<br />
                  Laravel and Filament packages, designed<br />
                  for the modern Web & App Developer.
                </p>
                <div class="mt-10 flex items-center gap-x-6">
                  <a
                    href="#installation"
                    class="animated-gradient-border rounded flex items-center gap-2 group text-gray-200 hover:text-pink-500"
                  >
                    <div class="bg-indigo-950/90 rounded px-4 py-2 flex items-center gap-2">
                      <x-gmdi-rocket-launch class="w-6 h-6" />
                      Get started
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="relative mt-16 flow-root sm:mt-24">
            @foreach ([
                ['src' => 'images/flickering3.gif', 'duration' => 1000],
                ['src' => 'images/blackpixel.gif', 'duration' => 600],
                ['src' => 'screenshots/jobs-main.jpg', 'duration' => 7000],
                ['src' => 'screenshots/jobs-failed.jpg', 'duration' => 3500],
                ['src' => 'screenshots/jobs-retry.jpg', 'duration' => 3500],
                ['src' => 'screenshots/jobs-detail.jpg', 'duration' => 3500],
                ['src' => 'screenshots/jobs-batches.jpg', 'duration' => 7000],
                ['src' => 'screenshots/localization.jpg', 'duration' => 7000],
                ['src' => 'screenshots/devices.jpg', 'duration' => 7000],
                ['src' => 'screenshots/build.jpg', 'duration' => 7000],
            ] as $i => $slide)
              <img
                src="{{ asset($slide['src']) }}"
                alt="Screenshot"
                class="mac-screenshot absolute object-cover rounded-3xl"
                data-duration="{{ $slide['duration'] }}"
                style="
                  opacity: {{ $i === 0 ? '1' : '0' }};
                  z-index: {{ $i === 0 ? '2' : '1' }};
                "
              />
            @endforeach
            <img
            src="{{ asset('/images/mac-screen.png') }}"
            alt="Mac Screen"
          />
          <img
            src="{{ asset('/images/mac-keys.png') }}"
            alt="Mac Keyboard"
          />


            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="installation" class="max-w-7xl mx-auto text-center mb-20">
      <h2
        class="pb-2 font-semibold tracking-tight text-balance gradient-text-default sm:text-5xl text-3xl"
      >
        Get started
      </h2>
      <br />
      <p class="text-gray-300 text-lg/8 text-pretty">
        Installation is simple. Just install the wanted package using Composer
        and run the Moox installer.<br />
        The installer will guide you through the process of installing one or
        more packages.<br />
        Finally it will ask you to create one or more Admin Panels.
      </p>
    </div>
    <div class="max-w-7xl mx-auto m-10 p-10">
      <div
        class="-px-10 -my-10 rounded-3xl flex justify-between bg-banner mx-auto overflow-hidden hover:shadow-[0px_-4px_15px_-5px_rgba(139,92,246,0.5),0px_4px_15px_-5px_rgba(236,72,153,0.5)]"
      >
        <div class="lg:m-10">
          <div class="grid lg:grid-cols-2 gap-10">
            <div>
              <div
                class="p-6 bg-slate-950/40 rounded-lg border border-pink-500/10"
              >
                <h3
                  class="text-xl font-bold text-gray-200 flex items-center gap-3 mr-10 mb-7"
                >
                  <x-gmdi-tips-and-updates class="text-pink-500 w-6 h-6" />
                  Requirements
                </h3>
                <div class="mt-6 ml-4 lg:flex gap-11 mb-2">
                  <div class="flex items-center gap-3 group">
                    <x-gmdi-check-circle class="text-pink-500 w-6 h-6" />
                    <div
                      class="text-gray-300 group-hover:text-gray-200 transition-colors duration-200"
                    >
                      PHP 8.3+
                    </div>
                  </div>
                  <div class="flex items-center gap-3 group">
                    <x-gmdi-check-circle class="text-pink-500 w-6 h-6" />
                    <div
                      class="text-gray-300 group-hover:text-gray-200 transition-colors duration-200"
                    >
                      Laravel 11+
                    </div>
                  </div>
                  <div class="flex items-center gap-3 group">
                    <x-gmdi-check-circle class="text-pink-500 w-6 h-6" />
                    <div
                      class="text-gray-300 group-hover:text-gray-200 transition-colors duration-200"
                    >
                      Filament 4.0
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="bg-slate-950/40 rounded-lg p-6 border border-pink-500/10 mt-5"
              >
                <h3
                  class="text-xl font-bold text-gray-200 mb-8 flex items-center gap-3"
                >
                  <x-gmdi-terminal class="text-pink-500 w-6 h-6" />
                  1. Install via Composer
                </h3>
                <div
                  class="bg-slate-950/60 mt-6 p-2 rounded-md font-mono text-gray-300 relative group"
                >
                  <code id="composer-command">composer require moox/core</code>
                  <button
                    onclick="copyToClipboard('composer-command')"
                    data-copy-target="composer-command"
                    class="absolute right-2 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-200"
                  >
                    <x-gmdi-content-copy class="text-gray-400 hover:text-pink-500" />
                  </button>
                </div>
              </div>
              <div
                class="bg-slate-950/40 rounded-lg p-6 border border-pink-500/10 mt-5"
              >
                <h3
                  class="text-xl font-bold text-gray-200 mb-8 flex items-center gap-3"
                >
                <x-gmdi-rocket-launch class="text-pink-500 w-6 h-6" />
                  2. Run the Installer
                </h3>
                <div
                  class="bg-slate-950/60 mt-6 p-2 rounded-md font-mono text-gray-300 relative group"
                >
                  <code id="artisan-command">php artisan moox:install</code>
                  <button
                    onclick="copyToClipboard('artisan-command')"
                    data-copy-target="artisan-command"
                    class="absolute right-2 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-200"
                  >
                    <span
                      class="material-symbols-rounded text-gray-400 hover:text-pink-500"
                      >content_copy</span
                    >
                  </button>
                </div>
              </div>
            </div>

            <div class="hidden lg:block">
              <div
                class="bg-slate-950/40 rounded-lg p-6 border border-pink-500/10"
              >
                <h3
                  class="text-xl font-bold text-gray-200 mb-8 flex items-center gap-3"
                >
                  <x-gmdi-check-circle class="text-pink-500 w-6 h-6" />
                  3. Install Moox
                </h3>
                <img
                  src="{{ asset('/screenshots/devlink.jpg') }}"
                  alt="Installer"
                  class="w-full rounded"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Packages -->
    <div id="packages" class="max-w-7xl mx-auto text-center my-20">
        <h2
          class="pt-20 pb-2 font-semibold tracking-tight text-balance gradient-text-default sm:text-5xl text-3xl"
        >
          Laravel Packages
        </h2>
        <br />
        <p class="text-gray-300 text-lg/8 text-pretty">
          Moox is a collection of packages for Laravel and Filament.<br />
          These are the packages, we already released:<br />
          <a href="https://github.com/orgs/mooxphp/repositories" class="underline hover:text-pink-500"
            >More wip packages on GitHub</a
          >
        </p>
      </div>

    <div class="max-w-7xl mx-auto flex flex-row gap-10">
      <div class="w-full lg:w-3/4">
        <div class="mx-auto m-10 p-10">
          <div
            class="-px-10 -my-10 rounded-3xl flex justify-between bg-banner mx-auto overflow-hidden hover:shadow-[0px_-4px_15px_-5px_rgba(139,92,246,0.5),0px_4px_15px_-5px_rgba(236,72,153,0.5)]"
          >
            <div class="lg:py-12 flex flex-col mt-10 ml-10">
              <div class="flex flex-row items-center gap-3 w-full">
                <h2
                  class="text-3xl font-semibold tracking-tight text-balance gradient-text-default flex-shrink-0"
                >
                  Core
                </h2>
              </div>
              <p class="mt-6 text-lg/8 text-pretty text-gray-300">
                Moox Core is the base<br />
                for all other Moox<br />
                packages.
              </p>
              <div
                class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start"
              >
                <a
                  href="https://github.com/mooxphp/core"
                  class="animated-gradient-border flex rounded items-center gap-2 group text-gray-200 hover:text-pink-500 mb-10"
                >
                  <div
                    class="bg-indigo-950/90 rounded px-4 py-2 flex items-center gap-2"
                  >
                    <x-gmdi-token class="w-6 h-6" />
                    Learn more
                  </div>
                </a>
              </div>
            </div>
            <img
              src="{{ asset('/screenshots/localization.jpg') }}"
              alt="Screenshot"
              class="transform shadow-2xl animated-screenshot w-2/3 hidden lg:block ml-auto -mr-3"
              style="transform: perspective(1000px) rotateY(-30deg)"
            />
          </div>
        </div>

        <div class="mx-auto m-10 p-10">
          <div
            class="-px-10 -my-10 rounded-3xl flex justify-between bg-banner mx-auto overflow-hidden hover:shadow-[0px_-4px_15px_-5px_rgba(139,92,246,0.5),0px_4px_15px_-5px_rgba(236,72,153,0.5)]"
          >
            <div class="lg:py-12 flex flex-col mt-10 ml-10">
              <div class="flex flex-row items-center gap-3 w-full">
                <h2
                  class="text-3xl font-semibold tracking-tight text-balance gradient-text-default flex-shrink-0"
                >
                  Jobs
                </h2>
              </div>
              <p class="mt-6 text-lg/8 text-pretty text-gray-300">
                Manage your Laravel<br />
                Job Queues in<br />
                Filament.
              </p>
              <div
                class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start"
              >
                <a
                  href="https://github.com/mooxphp/jobs"
                  class="animated-gradient-border flex rounded items-center gap-2 group text-gray-200 hover:text-pink-500 mb-10"
                >
                  <div
                    class="bg-indigo-950/90 rounded px-4 py-2 flex items-center gap-2"
                  >
                    <x-gmdi-token class="w-6 h-6" />
                    Learn more
                  </div>
                </a>
              </div>
            </div>
            <img
              src="{{ asset('/screenshots/jobs-main.jpg') }}"
              alt="Screenshot"
              class="transform shadow-2xl animated-screenshot w-2/3 hidden lg:block ml-auto -mr-3"
              style="transform: perspective(1000px) rotateY(-30deg)"
            />
          </div>
        </div>

        <div class="mx-auto m-10 p-10">
          <div
            class="-px-10 -my-10 rounded-3xl flex justify-between bg-banner mx-auto overflow-hidden hover:shadow-[0px_-4px_15px_-5px_rgba(139,92,246,0.5),0px_4px_15px_-5px_rgba(236,72,153,0.5)]"
          >
            <div class="lg:py-12 flex flex-col mt-10 ml-10">
              <div class="flex flex-row items-center gap-3 w-full">
                <h2
                  class="text-3xl font-semibold tracking-tight text-balance gradient-text-default flex-shrink-0"
                >
                  Skeleton
                </h2>
              </div>
              <p class="mt-6 text-lg/8 text-pretty text-gray-300">
                Build your Laravel<br />
                Packages with<br />
                Moox.
              </p>
              <div
                class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start"
              >
                <a
                  href="https://github.com/mooxphp/skeleton"
                  class="animated-gradient-border flex rounded items-center gap-2 group text-gray-200 hover:text-pink-500 mb-10"
                >
                  <div
                    class="bg-indigo-950/90 rounded px-4 py-2 flex items-center gap-2"
                  >
                    <x-gmdi-token class="w-6 h-6" />
                    Learn more
                  </div>
                </a>
              </div>
            </div>
            <img
              src="{{ asset('/screenshots/build.jpg') }}"
              alt="Screenshot"
              class="transform shadow-2xl animated-screenshot w-2/3 hidden lg:block ml-auto -mr-3"
              style="transform: perspective(1000px) rotateY(-30deg)"
            />
          </div>
        </div>

        <div class="mx-auto m-10 p-10">
          <div
            class="-px-10 -my-10 rounded-3xl flex justify-between bg-banner mx-auto overflow-hidden hover:shadow-[0px_-4px_15px_-5px_rgba(139,92,246,0.5),0px_4px_15px_-5px_rgba(236,72,153,0.5)]"
          >
            <div class="lg:py-12 flex flex-col mt-10 ml-10">
              <div class="flex flex-row items-center gap-3 w-full">
                <h2
                  class="text-3xl font-semibold tracking-tight text-balance gradient-text-default flex-shrink-0"
                >
                  Progress
                </h2>
              </div>
              <p class="mt-6 text-lg/8 text-pretty text-gray-300">
                A simple progress<br />
                bar for Filament<br />
                and Moox.
              </p>
              <div
                class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start"
              >
                <a
                  href="/"
                  class="animated-gradient-border flex rounded items-center gap-2 group text-gray-200 hover:text-pink-500 mb-10"
                >
                  <div
                    class="bg-indigo-950/90 rounded px-4 py-2 flex items-center gap-2"
                  >
                    <x-gmdi-token class="w-6 h-6" />
                    Learn more
                  </div>
                </a>
              </div>
            </div>
            <img
              src="{{ asset('/screenshots/jobs-main.jpg') }}"
              alt="Screenshot"
              class="transform shadow-2xl animated-screenshot w-2/3 hidden lg:block ml-auto -mr-3"
              style="transform: perspective(1000px) rotateY(-30deg)"
            />
          </div>
        </div>


        <br />
      </div>
      <div class="w-1/4 hidden lg:block">
        <div class="sticky top-10 -m-5 -mt-20">
          <img
            src="{{ asset('/images/boxbot.png') }}"
            alt="Delivery Robot"
            class="w-full"
          />
        </div>
      </div>
    </div>

    <div id="packages" class="max-w-7xl mx-auto text-center my-20">
      <h2
        class="pt-15 pb-2 font-semibold tracking-tight text-balance gradient-text-default sm:text-5xl text-3xl"
      >
        Sponsors
      </h2>
      <br />
      <p class="text-gray-300 text-lg/8 text-pretty">
        This project is made possible by our sponsors.<br />
        If you are interested in sponsoring Moox,
        <a
          class="underline hover:text-pink-500"
          href="mailto:hello@moox.org?subject=Sponsorship"
          >please contact us</a
        >.
      </p>
    </div>

    <div>
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
          class="-mx-6 grid grid-cols-2 gap-0.5 overflow-hidden sm:mx-0 sm:rounded-2xl md:grid-cols-3"
        >
          <div class="bg-white/75 p-8 sm:p-10">
            <a href="https://heco.de" target="_blank">
              <img
                src="{{ asset('/sponsors/heco.png') }}"
                alt="heco gmbh"
                class="max-h-12 w-full object-contain"
              />
            </a>
          </div>
          <div class="bg-white/75 p-4 sm:p-8">
            <a href="https://heltec-online.de" target="_blank">
              <img
                src="{{ asset('/sponsors/heltec.png') }}"
                alt="Heltec GmbH"
                class="max-h-16 w-full object-contain"
              />
            </a>
          </div>
          <div class="bg-white/75 p-6 sm:p-10">
            <a href="https://hecoform.de" target="_blank">
              <img
                src="{{ asset('/sponsors/hecoform.svg') }}"
                alt="Hecoform GmbH"
                class="max-h-14 w-full object-contain"
              />
            </a>
          </div>
          <div class="bg-white/75 p-6 sm:p-10">
            <a href="https://alf-drollinger.de" target="_blank">
              <img
                src="{{ asset('/sponsors/alf-drollinger.png') }}"
                alt="Alf Drollinger"
                class="max-h-12 w-full object-contain"
              />
            </a>
          </div>
          <div class="bg-white/75 p-6 sm:p-10">
            <a href="https://meinsolarstrom.de" target="_blank">
              <img
                src="{{ asset('/sponsors/meinsolarstrom.png') }}"
                alt="Mein Solarstrom"
                class="max-h-14 w-full object-contain"
              />
            </a>
          </div>
          <div class="bg-white/75 p-6 sm:p-10 text-center">
            <a href="mailto:hello@moox.org?subject=Sponsorship">
              <p
                class="mt-2 font-semibold tracking-tight text-balance gradient-text-default sm:text-xl text-3xl"
              >
                Your company here?
              </p>
            </a>
          </div>
        </div>
      </div>
    </div>
@endsection
