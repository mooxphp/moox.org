@extends('layouts.web')

@section('content')

<img
src="{{ asset('/images/polygon.png') }}"
alt=""
class="hidden lg:block floating-polygon absolute top-[25vh] left-[15%] w-32 h-32 pointer-events-none -z-50"
style="object-fit: contain"
/>

<div class="py-18 sm:py-24">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">

        <div id="packages" class="max-w-7xl mx-auto text-center">
            <h2
              class="pb-2 font-semibold tracking-tight text-balance gradient-text-default sm:text-5xl text-3xl"
            >
              Moox Demos
            </h2>
            <br />
            <p class="text-gray-300 text-lg/8 text-pretty">
              These are the demos for Moox. Currently three demos are available.
            </p>
        </div>
    </div>
</div>

<main class="max-w-6xl mx-auto">
    <div class="mt-10 grid grid-cols-1 gap-4 sm:mt-16 lg:grid-cols-4 lg:grid-rows-2">
        <div class="relative lg:col-span-2">
            <div class="absolute inset-0 rounded-lg bg-gradient-to-b from-mooxblue to-mooxdark max-lg:rounded-t-4xl lg:rounded-tl-4xl"></div>
            <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)] lg:rounded-tl-[calc(2rem+1px)]">
            <div class="p-10 pt-4 mt-10">
                <h2 class="text-center text-3xl font-semibold tracking-tight text-balance text-white">
                    Moox Content</h2>
                <p class="mt-6 text-lg/8 text-pretty text-gray-300">
                    Check out our online demos for Moox CMS, our multilingual CMS for Laravel.
                    <br />
                    The demo includes the Moox Frontend, all available CMS and Shop packages and some of our commonly used plugins like Moox Jobs, Moox User, Session, Device and more.
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
                    <span class="material-symbols-rounded text-md">preview</span>
                    Frontend
                    </div>
                </a>
                <a
                href="/"
                class="animated-gradient-border flex rounded items-center gap-2 group text-gray-200 hover:text-pink-500 mb-10"
                >
                <div
                    class="bg-indigo-950/90 rounded px-4 py-2 flex items-center gap-2"
                >
                    <span class="material-symbols-rounded text-md">fingerprint</span>
                    Admin UI
                </div>
                </a>
                </div>
            </div>
        </div>

        <div class="pointer-events-none absolute inset-0 rounded-lg shadow-sm outline outline-black/5"></div>
        </div>
        <div class="relative lg:col-span-2">
            <div class="absolute inset-0 rounded-lg bg-gradient-to-b from-mooxblue to-mooxdark max-lg:rounded-t-4xl lg:rounded-tr-4xl"></div>
            <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)] lg:rounded-tl-[calc(2rem+1px)]">
            <div class="p-10 pt-4 mt-10">
                <h2 class="text-center text-3xl font-semibold tracking-tight text-balance text-white">
                    Moox Commerce</h2>
                <p class="mt-6 text-lg/8 text-pretty text-gray-300">
                    Check out our online demos for Moox CMS, our multilingual CMS for Laravel.
                    <br />
                    The demo includes the Moox Frontend, all available CMS and Shop packages and some of our commonly used plugins like Moox Jobs, Moox User, Session, Device and more.
                </p>
                <div
                class="mt-10 flex items-center justify-center gap-x-6"
                >
                <a
                    href="/"
                    class="animated-gradient-border flex rounded items-center gap-2 group text-gray-200 hover:text-pink-500 mb-10"
                >
                    <div
                    class="bg-indigo-950/90 rounded px-4 py-2 flex items-center gap-2"
                    >
                    <span class="material-symbols-rounded text-md">preview</span>
                    Frontend
                    </div>
                </a>
                <a
                href="/"
                class="animated-gradient-border flex rounded items-center gap-2 group text-gray-200 hover:text-pink-500 mb-10"
                >
                <div
                    class="bg-indigo-950/90 rounded px-4 py-2 flex items-center gap-2"
                >
                    <span class="material-symbols-rounded text-md">fingerprint</span>
                    Admin UI
                </div>
                </a>
                </div>
            </div>
        </div>

            <div class="pointer-events-none absolute inset-0 rounded-lg shadow-sm outline outline-black/5 max-lg:rounded-t-4xl lg:rounded-tr-4xl"></div>
        </div>
        <div class="relative lg:col-span-2">
            <div class="absolute inset-0 rounded-lg bg-mooxdark lg:rounded-bl-4xl"></div>
            <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-bl-[calc(2rem+1px)]">
            <img src="https://tailwindcss.com/plus-assets/img/component-images/bento-01-integrations.png" alt="" class="h-80 object-cover" />

            <div class="p-10 pt-4">
                <h3 class="text-sm/4 font-semibold text-indigo-600">Integrations</h3>
                <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">Connect your favorite tools</p>
                <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Maecenas at augue sed elit dictum vulputate, in nisi aliquam maximus arcu.</p>
            </div>
            </div>
            <div class="pointer-events-none absolute inset-0 rounded-lg shadow-sm outline outline-black/5 lg:rounded-bl-4xl"></div>
        </div>
        <div class="relative lg:col-span-2">
            <div class="absolute inset-0 rounded-lg bg-mooxdark max-lg:rounded-b-4xl lg:rounded-br-4xl"></div>
            <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-br-[calc(2rem+1px)]">
            <img src="https://tailwindcss.com/plus-assets/img/component-images/bento-01-network.png" alt="" class="h-80 object-cover" />

            <div class="p-10 pt-4">
                <h3 class="text-sm/4 font-semibold text-indigo-600">Network</h3>
                <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">Globally distributed CDN</p>
                <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Aenean vulputate justo commodo auctor vehicula in malesuada semper.</p>
            </div>
            </div>
            <div class="pointer-events-none absolute inset-0 rounded-lg shadow-sm outline outline-black/5 max-lg:rounded-b-4xl lg:rounded-br-4xl"></div>
        </div>
    </div>
</main>

@endsection
