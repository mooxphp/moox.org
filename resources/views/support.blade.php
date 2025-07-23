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
              Moox Support
            </h2>
            <br />
            <p class="text-gray-300 text-lg/8 text-pretty">
              The Moox support is currently limited to GitHub issues.<br />
              Please use GitHub issues of the Moox Monorepo<br />
              to report bugs or request features.<br />
              <br />
              <a href="https://github.com/mooxphp/moox/issues" target="_blank" class="text-pink-500 hover:text-pink-400">
                Go to GitHub issues
              </a>
              <br />
              <br />
              <br />
              <br />
              <br />
              <br />
            </p>
        </div>
    </div>
</div>

@endsection
