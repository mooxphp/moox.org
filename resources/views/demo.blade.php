@extends('layout')

@section('content')

<div class="py-24 sm:py-32">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
      <h2 class="text-base/7 font-semibold gradient-text-default">Deploy faster</h2>
      <p class="mt-2 max-w-lg text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">Everything you need to deploy your app</p>
      <div class="mt-10 grid grid-cols-1 gap-4 sm:mt-16 lg:grid-cols-6 lg:grid-rows-2">
        <div class="flex p-px lg:col-span-4">
          <div class="w-full overflow-hidden rounded-2xl bg-white/5 backdrop-blur-sm outline outline-white/15 max-lg:rounded-t-2xl lg:rounded-tl-2xl lg:rounded-tr-none lg:rounded-bl-none lg:rounded-br-none">
            <img src="https://tailwindcss.com/plus-assets/img/component-images/dark-bento-02-releases.png" alt="" class="h-80 object-cover object-left" />
            <div class="p-10">
              <h3 class="text-sm/4 font-semibold text-gray-400">Releases</h3>
              <p class="mt-2 text-lg font-medium tracking-tight text-white">Push to deploy</p>
              <p class="mt-2 max-w-lg text-sm/6 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida justo et nulla efficitur, maximus egestas sem pellentesque.</p>
            </div>
          </div>
        </div>
        <div class="flex p-px lg:col-span-2">
          <div class="w-full overflow-hidden rounded-2xl bg-white/5 backdrop-blur-sm outline outline-white/15 max-lg:rounded-t-2xl lg:rounded-tl-none lg:rounded-tr-2xl lg:rounded-bl-none lg:rounded-br-none">
            <img src="https://tailwindcss.com/plus-assets/img/component-images/dark-bento-02-integrations.png" alt="" class="h-80 object-cover" />
            <div class="p-10">
              <h3 class="text-sm/4 font-semibold text-gray-400">Integrations</h3>
              <p class="mt-2 text-lg font-medium tracking-tight text-white">Connect your favorite tools</p>
              <p class="mt-2 max-w-lg text-sm/6 text-gray-400">Curabitur auctor, ex quis auctor venenatis, eros arcu rhoncus massa.</p>
            </div>
          </div>
        </div>
        <div class="flex p-px lg:col-span-2">
          <div class="w-full overflow-hidden rounded-4xl bg-white/5 backdrop-blur-sm outline outline-white/15 max-lg:rounded-b-2xl lg:rounded-tl-none lg:rounded-tr-none lg:rounded-bl-2xl lg:rounded-br-none">
            <img src="https://tailwindcss.com/plus-assets/img/component-images/dark-bento-02-security.png" alt="" class="h-80 object-cover" />
            <div class="p-10">
              <h3 class="text-sm/4 font-semibold text-gray-400">Security</h3>
              <p class="mt-2 text-lg font-medium tracking-tight text-white">Advanced access control</p>
              <p class="mt-2 max-w-lg text-sm/6 text-gray-400">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
            </div>
          </div>
        </div>
        <div class="flex p-px lg:col-span-4">
          <div class="w-full overflow-hidden rounded-4xl bg-white/5 backdrop-blur-sm outline outline-white/15 max-lg:rounded-b-2xl lg:rounded-tl-none lg:rounded-tr-none lg:rounded-bl-none lg:rounded-br-2xl">
            <img src="https://tailwindcss.com/plus-assets/img/component-images/dark-bento-02-performance.png" alt="" class="h-80 object-cover object-left" />
            <div class="p-10">
              <h3 class="text-sm/4 font-semibold text-gray-400">Performance</h3>
              <p class="mt-2 text-lg font-medium tracking-tight text-white">Lightning-fast builds</p>
              <p class="mt-2 max-w-lg text-sm/6 text-gray-400">Sed congue eros non finibus molestie. Vestibulum euismod augue vel commodo vulputate. Maecenas at augue sed elit dictum vulputate.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
