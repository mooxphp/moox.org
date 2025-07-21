@extends('layouts.web')

@section('content')

<img
src="{{ Vite::asset('resources/images/polygon.png') }}"
alt=""
class="hidden lg:block floating-polygon absolute top-[25vh] right-[25%] w-32 h-32 pointer-events-none -z-50"
style="object-fit: contain"
/>

<img
src="{{ Vite::asset('resources/images/polygon.png') }}"
alt=""
class="hidden lg:block floating-polygon absolute top-[65vh] left-[25%] w-40 h-40 pointer-events-none -z-50"
style="object-fit: contain"
/>

<div class="pt-18 sm:pt-24">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">

        <div id="packages" class="max-w-7xl mx-auto text-center">
            <h2
              class="pb-2 font-semibold tracking-tight text-balance gradient-text-default sm:text-5xl text-3xl"
            >
              Moox Pro
            </h2>
            <br />
            <p class="text-gray-300 text-lg/8 text-pretty">
                Please login to manage your Moox Pro account.
            </p>
          </div>

    </div>
</div>

<div class="flex min-h-full flex-col justify-center py-6 sm:px-3 lg:px-4">

    <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-[480px]">
      <div class="bg-gradient-to-br from-mooxblue to-mooxdark px-6 py-12 shadow-sm sm:rounded-lg sm:px-12">
        <form action="#" method="POST" class="space-y-6">
          <div>
            <label for="email" class="block text-sm/6 font-medium text-gray-200">Email address</label>
            <div class="mt-2">
              <input id="email" type="email" name="email" required autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
          </div>

          <div>
            <label for="password" class="block text-sm/6 font-medium text-gray-200">Password</label>
            <div class="mt-2">
              <input id="password" type="password" name="password" required autocomplete="current-password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
          </div>

          <div class="flex items-center justify-between">
            <div class="flex gap-3">
              <div class="flex h-6 shrink-0 items-center">
                <div class="group grid size-4 grid-cols-1">
                  <input id="remember-me" type="checkbox" name="remember-me" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto" />
                  <svg viewBox="0 0 14 14" fill="none" class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25">
                    <path d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-0 group-has-checked:opacity-100" />
                    <path d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-0 group-has-indeterminate:opacity-100" />
                  </svg>
                </div>
              </div>
              <label for="remember-me" class="block text-sm/6 text-gray-200">Remember me</label>
            </div>

            <div class="text-sm/6">
              <a href="#" class="font-semibold text-violet-500 hover:text-violet-400">Forgot password?</a>
            </div>
          </div>

          <div class="animated-gradient-border rounded-md">
            <button type="submit" class="flex w-full justify-center rounded-md px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
          </div>

        </form>

        <div>
          <div class="relative mt-10">
            <div class="relative flex justify-center text-sm/6 font-medium">
              <span class="px-6 text-gray-200">Or continue with</span>
            </div>
          </div>

          <div class="mt-6 grid grid-cols-2 gap-4">
            <span class="animated-gradient-border rounded-md">
                <a href="#" class="flex w-full items-center justify-center gap-3 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus-visible:ring-transparent">
                <svg viewBox="0 0 24 24" aria-hidden="true" class="h-5 w-5">
                    <path d="M12.0003 4.75C13.7703 4.75 15.3553 5.36002 16.6053 6.54998L20.0303 3.125C17.9502 1.19 15.2353 0 12.0003 0C7.31028 0 3.25527 2.69 1.28027 6.60998L5.27028 9.70498C6.21525 6.86002 8.87028 4.75 12.0003 4.75Z" fill="#EA4335" />
                    <path d="M23.49 12.275C23.49 11.49 23.415 10.73 23.3 10H12V14.51H18.47C18.18 15.99 17.34 17.25 16.08 18.1L19.945 21.1C22.2 19.01 23.49 15.92 23.49 12.275Z" fill="#4285F4" />
                    <path d="M5.26498 14.2949C5.02498 13.5699 4.88501 12.7999 4.88501 11.9999C4.88501 11.1999 5.01998 10.4299 5.26498 9.7049L1.275 6.60986C0.46 8.22986 0 10.0599 0 11.9999C0 13.9399 0.46 15.7699 1.28 17.3899L5.26498 14.2949Z" fill="#FBBC05" />
                    <path d="M12.0004 24.0001C15.2404 24.0001 17.9654 22.935 19.9454 21.095L16.0804 18.095C15.0054 18.82 13.6204 19.245 12.0004 19.245C8.8704 19.245 6.21537 17.135 5.2654 14.29L1.27539 17.385C3.25539 21.31 7.3104 24.0001 12.0004 24.0001Z" fill="#34A853" />
                </svg>
                <span class="text-sm/6 font-semibold">Google</span>
                </a>
            </span>

            <span class="animated-gradient-border rounded-md">
                <a href="#" class="flex w-full items-center justify-center gap-3 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus-visible:ring-transparent">
                <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-5 fill-[#24292F]">
                    <path d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd" fill-rule="evenodd" />
                </svg>
                <span class="text-sm/6 font-semibold">GitHub</span>
                </a>
            </span>
          </div>
        </div>
      </div>

      <p class="mt-10 text-center text-gray-200">
        Not a member yet?<br />
        <a href="#" class="font-semibold text-pink-500 hover:text-pink-400">
            Get a Moox Pro package and support our work!</a>
      </p>
    </div>
  </div>

@endsection
