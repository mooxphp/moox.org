
@extends('layouts.web')

@section('content')

<div class="py-18 sm:py-24">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">

        <div id="packages" class="max-w-7xl mx-auto text-center">
            <h2
              class="pb-2 font-semibold tracking-tight text-balance gradient-text-default sm:text-5xl text-3xl"
            >
              Moox Core
            </h2>
            <br />
            <p class="text-gray-300 text-lg/8 text-pretty">
              <a href="{{ route('welcome') }}" class="text-pink-500">Moox</a> > <a href="{{ route('docs') }}" class="text-pink-500">Documentation</a> > <a href="{{ route('docs-package') }}" class="text-pink-500">Core packages</a> > Moox Core
            </p>
          </div>

    </div>
</div>

<main class="max-w-7xl mx-auto px-10">
    <div class="max-w-7xl mx-auto my-10">
        <div class="flex">
            <div class="w-1/4">
                <div class="mr-20 mb-5">
                    <div class="relative flex items-center gap-2">
                        <span class="material-symbols-rounded text-gray-200">search</span>
                        <input type="text" placeholder="Search docs..." class="w-full py-2 bg-transparent border-b border-pink-500/20 text-gray-200 placeholder-gray-400 focus:outline-none focus:border-pink-500/40">
                    </div>
                </div>

                <div x-data="{ active: 'packages' }">
                    <ul class="mb-10">
                        <li class="mb-4">
                            <a href="#" class="text-gray-200 flex items-center gap-2" @click.prevent="active = active === 'getting-started' ? null : 'getting-started'">
                                <span class="material-symbols-rounded">rocket_launch</span>
                                Getting Started
                                <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20 ml-auto mr-20">
                                    <span class="material-symbols-rounded text-sm" x-text="active === 'getting-started' ? 'expand_less' : 'expand_more'">expand_less</span>
                                </span>
                            </a>
                            <ul class="ml-8 mt-5 mb-7" x-show="active === 'getting-started'" x-collapse="">
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">Introduction</a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">Installation</a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">Updates</a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">Configuration</a>
                                </li>
                            </ul>
                        </li>

                        <li class="mb-4">
                            <a href="#" class="text-gray-200 flex items-center gap-2" @click.prevent="active = active === 'bundles' ? null : 'bundles'">
                                <span class="material-symbols-rounded">stacks</span>
                                Bundles
                                <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20 ml-auto mr-20">
                                    <span class="material-symbols-rounded text-sm" x-text="active === 'bundles' ? 'expand_less' : 'expand_more'">expand_less</span>
                                </span>
                            </a>
                            <ul class="ml-8 mt-5 mb-7" x-show="active === 'bundles'" x-collapse="">
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">Moox Content</a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">Moox Commerce</a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">Moox DevOps</a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">Moox Press</a>
                                </li>
                            </ul>
                        </li>

                        <li class="mb-4">
                            <a href="#" class="text-gray-200 flex items-center gap-2" @click.prevent="active = active === 'packages' ? null : 'packages'">
                                <span class="material-symbols-rounded">deployed_code</span>
                                Packages
                                <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20 ml-auto mr-20">
                                    <span class="material-symbols-rounded text-sm" x-text="active === 'packages' ? 'expand_less' : 'expand_more'">expand_more</span>
                                </span>
                            </a>
                            <ul class="ml-8 mt-5 mb-7" x-show="active === 'packages'" x-collapse="">
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 hover:text-pink-500 flex items-center gap-2">
                                        Overview
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="hover:text-gray-400 flex items-center gap-2 text-pink-500">
                                        Core packages
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Content
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Media
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Entity
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Taxonomy
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Commerce
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Theme
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Module
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        System
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        User
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Tools
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Press
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        DevOps
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Builder
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Coding
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Icons
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="mb-4">
                            <a href="#" class="text-gray-200 flex items-center gap-2" @click.prevent="active = active === 'core-concepts' ? null : 'core-concepts'">
                                <span class="material-symbols-rounded">api</span>
                                Core concepts
                                <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20 ml-auto mr-20">
                                    <span class="material-symbols-rounded text-sm" x-text="active === 'core-concepts' ? 'expand_less' : 'expand_more'">expand_less</span>
                                </span>
                            </a>
                            <ul class="ml-8 mt-5 mb-7" x-show="active === 'core-concepts'" x-collapse="">
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">Moox Core</a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">Entities</a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">Taxonomies</a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">Relations</a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">Modules</a>
                                </li>
                            </ul>
                        </li>

                        <li class="mb-4">
                            <a href="#" class="text-gray-200 flex items-center gap-2" @click.prevent="active = active === 'development' ? null : 'development'">
                                <span class="material-symbols-rounded">code</span>
                                Development
                                <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20 ml-auto mr-20">
                                    <span class="material-symbols-rounded text-sm" x-text="active === 'development' ? 'expand_less' : 'expand_more'">expand_more</span>
                                </span>
                            </a>
                            <ul class="ml-8 mt-5 mb-7" x-show="active === 'development'" x-collapse="">
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Contributing
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Repository
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Translation
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="mb-4">
                            <a href="#" class="text-gray-200 flex items-center gap-2" @click.prevent="active = active === 'licensing' ? null : 'licensing'">
                                <span class="material-symbols-rounded">license</span>
                                Licensing
                                <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20 ml-auto mr-20">
                                    <span class="material-symbols-rounded text-sm" x-text="active === 'licensing' ? 'expand_less' : 'expand_more'">expand_more</span>
                                </span>
                            </a>
                            <ul class="ml-8 mt-5 mb-7" x-show="active === 'licensing'" x-collapse="">
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Contributing
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Repository
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Translation
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="mb-4">
                            <a href="#" class="text-gray-200 flex items-center gap-2" @click.prevent="active = active === 'pro' ? null : 'pro'">
                                <span class="material-symbols-rounded">stars</span>
                                Moox Pro
                                <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20 ml-auto mr-20">
                                    <span class="material-symbols-rounded text-sm" x-text="active === 'pro' ? 'expand_less' : 'expand_more'">expand_more</span>
                                </span>
                            </a>
                            <ul class="ml-8 mt-5 mb-7" x-show="active === 'pro'" x-collapse="">
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Contributing
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Repository
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Translation
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="mb-4">
                            <a href="#" class="text-gray-200 flex items-center gap-2" @click.prevent="active = active === 'support' ? null : 'support'">
                                <span class="material-symbols-rounded">help</span>
                                Support
                                <span class="bg-pink-500/20 text-pink-200 text-xs px-2 py-0.5 rounded-full border border-pink-500/20 ml-auto mr-20">
                                    <span class="material-symbols-rounded text-sm" x-text="active === 'support' ? 'expand_less' : 'expand_more'">expand_more</span>
                                </span>
                            </a>
                            <ul class="ml-8 mt-5 mb-7" x-show="active === 'support'" x-collapse="">
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        Troubleshooting
                                    </a>
                                </li>
                                <li class="my-3">
                                    <a href="#" class="text-gray-400 flex items-center gap-2">
                                        FAQ
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-3/4">
                <div class="bg-mooxdark rounded-3xl mb-6 hover:shadow-[0px_-4px_15px_-5px_rgba(139,92,246,0.5),0px_4px_15px_-5px_rgba(236,72,153,0.5)]">
                    <a href="https://moox.heco.si/docsingle?package=job-monitor">
                        <img src="https://mooxweb.test/bannergenerator?title=Core&description=Common%20features%0Afor%20Laravel%20and%0AFilament.&screenshot=https://raw.githubusercontent.com/mooxphp/core/main/screenshot/main.jpg&community=0&commercial=0" alt="Moox Jobs" class="w-full rounded-t-3xl">
                    </a>

                    <div class="p-10">
                        <h2 class="text-slate-300 text-2xl font-bold mb-5">Moox Jobs</h2>
                        <p class="text-slate-300 mb-10">
                            Moox Jobs is a job board package for Moox. It allows you to create a job board and manage your jobs.
                        </p>
                        <p class="text-slate-300 mb-10">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    <img src="https://github.com/mooxphp/moox/raw/main/art/screenshot/jobs-jobs.jpg" alt="Moox Jobs" class="w-full mb-10">

                    <h2 class="text-slate-300 text-2xl font-bold mb-5">Installation</h2>
                    <p class="text-slate-300 mb-10">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>

                    <h2 class="text-slate-300 text-2xl font-bold mb-5">Configuration</h2>
                    <p class="text-slate-300 mb-10">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>

                    <h2 class="text-slate-300 text-2xl font-bold mb-5">Usage</h2>
                    <p class="text-slate-300 mb-10">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>

            </div>
        </div>
    </div>
</main>

@endsection
