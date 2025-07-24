@extends('layouts.web')

@section('content')

<img
  src="{{ asset('/images/polygon.png') }}"
  alt=""
  class="hidden lg:block floating-polygon absolute top-[25vh] left-[15%] w-32 h-32 pointer-events-none -z-50"
  style="object-fit: contain"
/>

<div
  class="py-18 sm:py-24"
  x-data="bannerGenerator()"
>
  <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">

    <div id="packages" class="max-w-7xl mx-auto text-center">
      <h2 class="pb-2 font-semibold tracking-tight text-balance gradient-text-default sm:text-5xl text-3xl">
        Moox Banner Generator
      </h2>

      <p class="text-gray-300 text-lg/8 text-pretty mt-4">
        Use the Moox Banner Generator to create a banner for<br />
        your package, theme, or project if you want.
      </p>

      <form @submit.prevent class="mx-auto mt-16 max-w-xl sm:mt-20">
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">

          <div class="sm:col-span-2">
            <label for="name" class="block text-sm font-semibold text-gray-200">Package Name</label>
            <input id="name" type="text" x-model="name" @input="if (!isScreenshotUrlManuallySet) screenshotUrl = defaultScreenshotUrl"
              class="mt-2.5 block w-full rounded-md bg-white px-3.5 py-2 text-gray-900 text-base focus:outline-indigo-600">
          </div>

          <div class="sm:col-span-2">
            <label for="screenshot" class="block text-sm font-semibold text-gray-200">Screenshot URL</label>
            <input id="screenshot" type="text" x-model="screenshotUrl" :placeholder="defaultScreenshotUrl" @input="isScreenshotUrlManuallySet = true; checkImageExists()"
              class="mt-2.5 block w-full rounded-md bg-white px-3.5 py-2 text-gray-900 text-base focus:outline-indigo-600">
            <div x-show="imageLoading" class="mt-2 text-sm text-blue-400">Checking image...</div>
            <div x-show="imageError" class="mt-2 text-sm text-red-400">Image not found!</div>
            <div x-show="imageExists" class="mt-2 text-sm text-green-400">Image found ✓</div>
          </div>

          <div class="sm:col-span-2">
            <label for="description" class="block text-sm font-semibold text-gray-200">Package Description</label>
            <textarea id="description" rows="3" x-model="description"
              class="mt-2.5 block w-full rounded-md bg-white px-3.5 py-2 text-gray-900 text-base focus:outline-indigo-600"></textarea>
          </div>

          <div class="flex flex-row gap-x-20 sm:col-span-2">
                           <div class="flex gap-x-4">
               <div class="flex h-6 items-center">
                   <div class="group relative inline-flex w-8 shrink-0 rounded-full bg-gray-200 p-px inset-ring inset-ring-gray-900/5 outline-offset-2 outline-indigo-600 transition-colors duration-200 ease-in-out has-checked:bg-indigo-600 has-focus-visible:outline-2" :class="{ 'has-checked': community }">
                     <span class="size-4 rounded-full bg-white shadow-xs ring-1 ring-gray-900/5 transition-transform duration-200 ease-in-out group-has-checked:translate-x-3.5" :class="{ 'translate-x-3.5': community }"></span>
                     <input id="community" type="checkbox" x-model="community" aria-label="Package type" class="absolute inset-0 appearance-none focus:outline-hidden" />
                   </div>
                 </div>
                 <label for="community" class="text-sm/6 text-gray-200">
                      Community package?
                  </label>
               </div>
               <div class="flex gap-x-4">

               <div class="flex h-6 items-center">
                   <div class="group relative inline-flex w-8 shrink-0 rounded-full bg-gray-200 p-px inset-ring inset-ring-gray-900/5 outline-offset-2 outline-indigo-600 transition-colors duration-200 ease-in-out has-checked:bg-indigo-600 has-focus-visible:outline-2" :class="{ 'has-checked': commercial }">
                     <span class="size-4 rounded-full bg-white shadow-xs ring-1 ring-gray-900/5 transition-transform duration-200 ease-in-out group-has-checked:translate-x-3.5" :class="{ 'translate-x-3.5': commercial }"></span>
                     <input id="commercial" type="checkbox" x-model="commercial" aria-label="Package type" class="absolute inset-0 appearance-none focus:outline-hidden" />
                   </div>
                 </div>
                 <label for="commercial" class="text-sm/6 text-gray-200">
                      Commercial package?
                  </label>
               </div>
              </div>
            </div>
          </div>
        </form>

        <div class="lg:hidden mt-10 rounded-md bg-red-700/50 p-10">
            <p class="text-gray-300 font-semibold text-lg/8 text-pretty text-center">
                Sorry, banner preview is not available on mobile.
            </p>
        </div>

        <div class="justify-center hidden lg:flex">
            <div class="hidden lg:flex justify-center mt-10">
                <iframe
                  id="bannerPreview"
                  style="width: 1280px; height: 720px;"
                  :src="previewUrl"
                ></iframe>
              </div>
        </div>

      <button
        class="mt-10 w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow hover:bg-indigo-500 focus:outline-indigo-600"
        onclick="saveBannerAsJPEG()">
        Download Banner as JPEG
      </button>

      <div class="mt-16 bg-gray-700/50 p-10 rounded-lg text-center">
        <h3 class="text-2xl font-semibold text-white mb-4">API usage</h3>
      <p class="text-gray-400 mb-2">
        <a :href="apiUrl" x-text="apiUrl" target="_blank" class="text-pink-500 hover:underline break-all"></a>
      </p>
      <p class="text-gray-300 mb-4">
        Using the API, the banner will be rendered server-side and return a JPEG. Please use it in CI/CD pipelines, not for direct embedding.
      </p>
      </div>
    </div>
  </div>
</div>

<script>
function bannerGenerator() {
  return {
    name: 'User Session',
    description: 'Common features\nfor Laravel and\nFilament.',
    community: false,
    commercial: false,
    screenshotUrl: '',
    isScreenshotUrlManuallySet: false,

    get slug() {
      return this.name.toLowerCase().replace(/\s+/g, '-')
    },
    get screenshot() {
      return this.screenshotUrl || `https://raw.githubusercontent.com/mooxphp/${this.slug}/main/screenshot/main.jpg`
    },
    get defaultScreenshotUrl() {
      //return `https://raw.githubusercontent.com/mooxphp/${this.slug}/main/screenshot/main.jpg`
      return `https://raw.githubusercontent.com/mooxphp/moox/main/packages/jobs/screenshot/jobs-jobs.jpg`
    },
    get currentScreenshotUrl() {
      return this.screenshotUrl || this.defaultScreenshotUrl
    },
    imageExists: false,
    imageLoading: false,
    imageError: false,


    init() {
      this.screenshotUrl = this.defaultScreenshotUrl
      this.checkImageExists()
    },
    async checkImageExists() {
      this.imageLoading = true
      this.imageError = false

      try {
        const img = new Image()
        img.onload = () => {
          this.imageExists = true
          this.imageLoading = false
        }
        img.onerror = () => {
          this.imageExists = false
          this.imageError = true
          this.imageLoading = false
        }
        img.src = this.currentScreenshotUrl
      } catch (error) {
        this.imageExists = false
        this.imageError = true
        this.imageLoading = false
      }
    },
    handleImageError(event) {
      event.target.src = '{{ asset('/images/banner-fallback.jpg') }}'
    },
    get descriptionEncoded() {
      return this.description.replace(/\n/g, '++').replace(/\s+/g, '+')
    },
    get apiUrl() {
      const base = '{{ config('app.url') }}/bannergenerator'
      const title = this.name.replace(/\s+/g, '+')
      const community = this.community ? 1 : 0
      const commercial = this.commercial ? 1 : 0
      return `${base}?title=${title}&description=${this.descriptionEncoded}&screenshot=${this.currentScreenshotUrl}&community=${community}&commercial=${commercial}`
    },
    get previewUrl() {
      const base = '{{ config('app.url') }}/bannergenerator/preview'
      const title = this.name.replace(/\s+/g, '+')
      const community = this.community ? 1 : 0
      const commercial = this.commercial ? 1 : 0
      return `${base}?title=${title}&description=${this.descriptionEncoded}&screenshot=${this.currentScreenshotUrl}&community=${community}&commercial=${commercial}`
    }
  }
}
</script>

@endsection
