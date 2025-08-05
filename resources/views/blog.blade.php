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
              Moox Blog
            </h2>
            <br />
            <p class="text-gray-300 text-lg/8 text-pretty">
              The Moox support is currently limited to GitHub issues.<br />
              Please use GitHub issues of the Moox Monorepo<br />
              to report bugs or request features.<br />
              <br />
            </p>

              <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <article class="bg-gradient-to-br from-mooxdark to-mooxblue flex flex-col items-start justify-between">
                  <div class="relative w-full">
                    <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" alt="" class="aspect-video w-full rounded-2xl bg-gray-100 object-cover sm:aspect-2/1 lg:aspect-3/2" />
                    <div class="absolute inset-0 rounded-2xl inset-ring inset-ring-gray-900/10"></div>
                  </div>
                  <div class="flex max-w-xl grow flex-col justify-between">
                    <div class="mt-8 flex items-center gap-x-4 text-xs">
                      <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                      <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="group relative grow">
                      <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Boost your conversion rate
                        </a>
                      </h3>
                      <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                      <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-gray-100" />
                      <div class="text-sm/6">
                        <p class="font-semibold text-gray-900">
                          <a href="#">
                            <span class="absolute inset-0"></span>
                            Michael Foster
                          </a>
                        </p>
                        <p class="text-gray-600">Co-Founder / CTO</p>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="flex flex-col items-start justify-between">
                  <div class="relative w-full">
                    <img src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3270&q=80" alt="" class="aspect-video w-full rounded-2xl bg-gray-100 object-cover sm:aspect-2/1 lg:aspect-3/2" />
                    <div class="absolute inset-0 rounded-2xl inset-ring inset-ring-gray-900/10"></div>
                  </div>
                  <div class="flex max-w-xl grow flex-col justify-between">
                    <div class="mt-8 flex items-center gap-x-4 text-xs">
                      <time datetime="2020-03-10" class="text-gray-500">Mar 10, 2020</time>
                      <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Sales</a>
                    </div>
                    <div class="group relative grow">
                      <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          How to use search engine optimization to drive sales
                        </a>
                      </h3>
                      <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Optio cum necessitatibus dolor voluptatum provident commodi et. Qui aperiam fugiat nemo cumque.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                      <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-gray-100" />
                      <div class="text-sm/6">
                        <p class="font-semibold text-gray-900">
                          <a href="#">
                            <span class="absolute inset-0"></span>
                            Lindsay Walton
                          </a>
                        </p>
                        <p class="text-gray-600">Front-end Developer</p>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="flex flex-col items-start justify-between">
                  <div class="relative w-full">
                    <img src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3270&q=80" alt="" class="aspect-video w-full rounded-2xl bg-gray-100 object-cover sm:aspect-2/1 lg:aspect-3/2" />
                    <div class="absolute inset-0 rounded-2xl inset-ring inset-ring-gray-900/10"></div>
                  </div>
                  <div class="flex max-w-xl grow flex-col justify-between">
                    <div class="mt-8 flex items-center gap-x-4 text-xs">
                      <time datetime="2020-02-12" class="text-gray-500">Feb 12, 2020</time>
                      <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Business</a>
                    </div>
                    <div class="group relative grow">
                      <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Improve your customer experience
                        </a>
                      </h3>
                      <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Cupiditate maiores ullam eveniet adipisci in doloribus nulla minus. Voluptas iusto libero adipisci rem et corporis. Nostrud sint anim sunt aliqua. Nulla eu labore irure incididunt velit cillum quis magna dolore.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                      <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-gray-100" />
                      <div class="text-sm/6">
                        <p class="font-semibold text-gray-900">
                          <a href="#">
                            <span class="absolute inset-0"></span>
                            Tom Cook
                          </a>
                        </p>
                        <p class="text-gray-600">Director of Product</p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>

        </div>
    </div>
</div>

@endsection
