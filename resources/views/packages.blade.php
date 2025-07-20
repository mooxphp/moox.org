@extends('layout')

@section('content')

<div class="max-w-7xl mx-auto flex flex-row gap-10">
    <div class="w-1/4 hidden lg:block m-10">
        <ul class="mb-10">
            <li class="mb-4">
                <a href="#" class="text-gray-200 flex items-center gap-2">
                    <span class="material-symbols-rounded">article</span>
                    Content
                    <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20">11</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-gray-200 flex items-center gap-2">
                    <span class="material-symbols-rounded">perm_media</span>
                    Media
                    <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20">1</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-gray-200 flex items-center gap-2">
                    <span class="material-symbols-rounded">tag</span>
                    Taxonomy
                    <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20">3</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-gray-200 flex items-center gap-2">
                    <span class="material-symbols-rounded">shopping_cart</span>
                    Shop
                    <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20">8</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-gray-200 flex items-center gap-2">
                    <span class="material-symbols-rounded">palette</span>
                    Theme
                    <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20">3</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-gray-200 flex items-center gap-2">
                    <span class="material-symbols-rounded">extension</span>
                    Module
                    <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20">3</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-gray-200 flex items-center gap-2">
                    <span class="material-symbols-rounded">settings</span>
                    System
                    <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20">7</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-gray-200 flex items-center gap-2">
                    <span class="material-symbols-rounded">person</span>
                    User
                    <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20">6</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-gray-200 flex items-center gap-2">
                    <span class="material-symbols-rounded">build</span>
                    Tools
                    <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20">6</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-gray-200 flex items-center gap-2">
                    <span class="material-symbols-rounded">newspaper</span>
                    Press
                    <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20">2</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-gray-200 flex items-center gap-2">
                    <span class="material-symbols-rounded">terminal</span>
                    DevOps
                    <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20">4</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-gray-200 flex items-center gap-2">
                    <span class="material-symbols-rounded">rocket_launch</span>
                    Builder
                    <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20">7</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-gray-200 flex items-center gap-2">
                    <span class="material-symbols-rounded">code</span>
                    Coding
                    <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20">4</span>
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-gray-200 flex items-center gap-2">
                    <span class="material-symbols-rounded">category</span>
                    Icons
                    <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20">2</span>
                </a>
            </li>
        </ul>

        <div class="max-w-6xl mx-auto my-10 mr-20">
            <img src="https://moox.heco.si/web/73-delivery-2.png" alt="Moox Logo" class="w-full">
        </div>
    </div>

    <div class="w-full lg:w-3/4">
      <div class="mx-auto m-10 p-10">
        <div class="-px-10 -my-10 rounded-3xl flex justify-center bg-banner mx-auto overflow-hidden">
          <div class="lg:py-12 flex flex-col ml-5 mt-10">
            <div class="flex flex-row">
              <div></div>
              <h2 class="text-3xl font-semibold tracking-tight text-balance text-white">
                Backup Server
              </h2>
              <div class="ml-2 h-6 bg-gray-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/50">
                Pro
              </div>
            </div>
            <p class="mt-6 text-lg/8 text-pretty text-gray-300">
              Manage your Laravel<br>
              Job Queues in<br>
              Filament.
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
              <a href="/" class="animated-gradient-border flex rounded items-center gap-2 group text-gray-200 hover:text-pink-500 mb-10">
                <div class="bg-indigo-950/90 rounded px-4 py-2 flex items-center gap-2">
                  <span class="material-symbols-rounded text-md">box</span>
                  Learn more
                </div>
              </a>
            </div>
          </div>
          <img src="screenshots/jobs.jpg" alt="Screenshot" class="transform shadow-2xl -mr-10 animated-screenshot w-2/3 hidden lg:block" style="transform: perspective(1000px) rotateY(-17.1094deg) translateX(32.8906px);">
        </div>
      </div>

      <div class="mx-auto m-10 p-10">
        <div class="-px-10 -my-10 rounded-3xl flex justify-center bg-banner mx-auto overflow-hidden">
          <div class="lg:py-12 flex flex-col ml-5 mt-10">
            <div class="flex flex-row">
              <div></div>
              <h2 class="text-3xl font-semibold tracking-tight text-balance text-white">
                Backup Server
              </h2>
              <div class="ml-2 h-6 bg-gray-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/50">
                Pro
              </div>
            </div>
            <p class="mt-6 text-lg/8 text-pretty text-gray-300">
              Manage your Laravel<br>
              Job Queues in<br>
              Filament.
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
              <a href="/" class="animated-gradient-border flex rounded items-center gap-2 group text-gray-200 hover:text-pink-500 mb-10">
                <div class="bg-indigo-950/90 rounded px-4 py-2 flex items-center gap-2">
                  <span class="material-symbols-rounded text-md">box</span>
                  Learn more
                </div>
              </a>
            </div>
          </div>
          <img src="screenshots/jobs.jpg" alt="Screenshot" class="transform shadow-2xl -mr-10 animated-screenshot w-2/3 hidden lg:block" style="transform: perspective(1000px) rotateY(-31.3385deg) translateX(18.6615px);">
        </div>
      </div>

      <div class="mx-auto m-10 p-10">
        <div class="-px-10 -my-10 rounded-3xl flex justify-center bg-banner mx-auto overflow-hidden">
          <div class="lg:py-12 flex flex-col ml-5 mt-10">
            <div class="flex flex-row">
              <div></div>
              <h2 class="text-3xl font-semibold tracking-tight text-balance text-white">
                Backup Server
              </h2>
              <div class="ml-2 h-6 bg-gray-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/50">
                Pro
              </div>
            </div>
            <p class="mt-6 text-lg/8 text-pretty text-gray-300">
              Manage your Laravel<br>
              Job Queues in<br>
              Filament.
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
              <a href="/" class="animated-gradient-border flex rounded items-center gap-2 group text-gray-200 hover:text-pink-500 mb-10">
                <div class="bg-indigo-950/90 rounded px-4 py-2 flex items-center gap-2">
                  <span class="material-symbols-rounded text-md">box</span>
                  Learn more
                </div>
              </a>
            </div>
          </div>
          <img src="screenshots/jobs.jpg" alt="Screenshot" class="transform shadow-2xl -mr-10 animated-screenshot w-2/3 hidden lg:block" style="transform: perspective(1000px) rotateY(-43.6639deg) translateX(6.33611px);">
        </div>
      </div>

      <div class="mx-auto m-10 p-10">
        <div class="-px-10 -my-10 rounded-3xl flex justify-center bg-banner mx-auto overflow-hidden">
          <div class="lg:py-12 flex flex-col ml-5 mt-10">
            <div class="flex flex-row">
              <div></div>
              <h2 class="text-3xl font-semibold tracking-tight text-balance text-white">
                Backup Server
              </h2>
              <div class="ml-2 h-6 bg-gray-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/50">
                Pro
              </div>
            </div>
            <p class="mt-6 text-lg/8 text-pretty text-gray-300">
              Manage your Laravel<br>
              Job Queues in<br>
              Filament.
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
              <a href="/" class="animated-gradient-border flex rounded items-center gap-2 group text-gray-200 hover:text-pink-500 mb-10">
                <div class="bg-indigo-950/90 rounded px-4 py-2 flex items-center gap-2">
                  <span class="material-symbols-rounded text-md">box</span>
                  Learn more
                </div>
              </a>
            </div>
          </div>
          <img src="screenshots/jobs.jpg" alt="Screenshot" class="transform shadow-2xl -mr-10 animated-screenshot w-2/3 hidden lg:block" style="transform: perspective(1000px) rotateY(-43.9223deg) translateX(6.0777px);">
        </div>
      </div>

      <br>
    </div>
  </div>

@endsection
