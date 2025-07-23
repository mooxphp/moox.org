<div class="flex bg-banner overflow-hidden" style="width: 2560px; height: 1440px;">

    <div class="flex flex-col w-2/5">

        <h2 class="mt-30 ml-30 text-9xl gradient-text-inverse font-semibold text-white leading-tight" x-text="name"></h2>

        <p class="text-7xl text-gray-200 whitespace-pre-line mt-10 ml-30">for</p>


        <div class="flex items-center gap-x-2 mt-10 ml-30">

        <img class="h-36 w-auto" src="{{ Vite::asset('resources/images/moox-logo.png') }}" style="max-width: fit-content;" />
        <template x-if="commercial">
            <div class="h-20 bg-gray-500/20 text-pink-200 text-4xl font-semibold px-8 py-4 rounded-full border border-pink-500/50 ml-10 -mt-20">
                Pro
            </div>
        </template>

        </div>

        <p class="text-7xl text-gray-200 whitespace-pre-line mt-30 ml-30" x-text="description"></p>

        <p class="text-7xl text-gray-300 whitespace-pre-line mb-30 ml-30 mt-auto">
            www.moox.org
        </p>

    </div>

    <div class="w-3/5 pt-30">
        <template x-if="imageExists">
            <img :src="currentScreenshotUrl" alt="Screenshot" class="h-full shadow-2xl transform ml-auto -mt-10"
                 style="transform: perspective(1000px) rotateY(-10deg)">
        </template>
        <template x-if="!imageExists">
            <img src="{{ Vite::asset('resources/images/banner-fallback.jpg') }}" class="ml-auto -mt-30 -mb-30">
        </template>
    </div>

</div>
