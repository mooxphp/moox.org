<footer id="contact" class="bg-black/50 mt-40">
    <div class="mx-auto max-w-7xl px-6 pt-20 pb-8 sm:pt-24 lg:px-8 lg:pt-32">
      <div class="xl:grid xl:grid-cols-6 xl:gap-8">
        <div class="mt-10 xl:mt-0">
          <h3 class="text-sm/6 font-semibold text-white">Bundles</h3>
          <ul role="list" class="mt-6 space-y-4">
            <li>
              <a href="{{ route('bundles.content') }}" class="text-sm/6 text-gray-400 hover:text-white"
                >Laravel CMS</a
              >
            </li>
            <li>
              <a href="{{ route('bundles.commerce') }}" class="text-sm/6 text-gray-400 hover:text-white"
                >Laravel Shop</a
              >
            </li>
            <li>
              <a href="{{ route('bundles.devops') }}" class="text-sm/6 text-gray-400 hover:text-white"
                >Laravel DevOps</a
              >
            </li>
            <li>
              <a href="{{ route('bundles.press') }}" target="_blank" class="text-sm/6 text-gray-400 hover:text-white"
                >Laravel & WordPress</a
              >
            </li>
          </ul>
        </div>
        <div class="mt-10 xl:mt-0">
          <h3 class="text-sm/6 font-semibold text-white">Support</h3>
          <ul role="list" class="mt-6 space-y-4">
            <li>
                <a href="https://github.com/mooxphp/moox" target="_blank" class="text-sm/6 text-gray-400 hover:text-white"
                  >Moox Repo</a
                >
              </li>
            <li>
              <a href="https://github.com/mooxphp/moox/issues" target="_blank" class="text-sm/6 text-gray-400 hover:text-white"
                >GitHub Issues</a
              >
            </li>
            <li>
              <a href="https://www.youtube.com/@mooxphp" target="_blank" class="text-sm/6 text-gray-400 hover:text-white"
                >Video Tutorials</a
              >
            </li>
            <li>
              <a href="https://mooxphp.slack.com/" target="_blank" class="text-sm/6 text-gray-400 hover:text-white"
                >Slack Community</a
              >
            </li>
          </ul>
        </div>
        <div class="mt-10 xl:mt-0">
          <h3 class="text-sm/6 font-semibold text-white">Development</h3>
          <ul role="list" class="mt-6 space-y-4">
            <li>
              <a href="{{ route('about') }}" class="text-sm/6 text-gray-400 hover:text-white"
                >About Moox</a
              >
            </li>
            <li>
              <a href="{{ route('docs') }}" class="text-sm/6 text-gray-400 hover:text-white"
                >Documentation</a
              >
            </li>
            <li>
              <a href="https://hosted.weblate.org/projects/moox/" target="_blank" class="text-sm/6 text-gray-400 hover:text-white"
                >Translation</a
              >
            </li>
            <li>
              <a href="{{ route('banner') }}" class="text-sm/6 text-gray-400 hover:text-white"
                >Banner Generator</a
              >
            </li>
          </ul>
        </div>
        <div class="mt-10 xl:mt-0">
          <h3 class="text-sm/6 font-semibold text-white">Legal</h3>
          <ul role="list" class="mt-6 space-y-4">
            <li>
              <a href="{{ route('imprint') }}" class="text-sm/6 text-gray-400 hover:text-white"
                >Imprint</a
              >
            </li>
            <li>
              <a href="{{ route('terms') }}" class="text-sm/6 text-gray-400 hover:text-white"
                >Terms of service</a
              >
            </li>
            <li>
              <a href="{{ route('privacy') }}" class="text-sm/6 text-gray-400 hover:text-white"
                >Privacy policy</a
              >
            </li>
            <li>
              <a href="{{ route('license') }}" class="text-sm/6 text-gray-400 hover:text-white"
                >License</a
              >
            </li>
          </ul>
        </div>
        <div class="mt-10 xl:mt-0">
          <h3 class="text-sm/6 font-semibold text-white">More</h3>
          <ul role="list" class="mt-6 space-y-4">
            <li>
              <a href="{{ route('packages') }}" class="text-sm/6 text-gray-400 hover:text-white">Packages</a>
            </li>
            <li>
              <a href="{{ route('blog') }}" class="text-sm/6 text-gray-400 hover:text-white">Moox Blog</a>
            </li>
            <li>
              <a href="{{ route('pro') }}" class="text-sm/6 text-gray-400 hover:text-white">Moox Pro</a>
            </li>
            <li>
              <a href="{{ route(name: 'pricing') }}" class="text-sm/6 text-gray-400 hover:text-white">Pro Pricing</a>
            </li>
          </ul>
        </div>
        <div class="mt-10 xl:mt-0">
          <h3 class="text-sm/6 font-semibold text-white">
            Newsletter
          </h3>
          <p class="mt-6 text-sm/6 text-gray-400">
            Moox updates and news sent to your inbox.
          </p>
          <div class="mt-4 sm:flex sm:max-w-md">
            <form>
                <label for="email-address" class="sr-only">Email address</label>
                <input
                type="email"
                name="email-address"
                id="email-address"
                autocomplete="email"
                required
                class="w-full min-w-0 rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-gray-700 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:w-64 sm:text-sm/6 xl:w-full"
                placeholder="Enter your email"
                />
                <div class="mt-3 animated-gradient-border rounded">
                    <button
                        type="submit"
                        class="w-full px-3 py-1.5 rounded bg-indigo-950/90 text-gray-400 text-sm hover:text-pink-500 text-md shadow-xs focus-visible:outline-2 focus-visible:outline-offset-2">
                        Get good spam
                    </button>
                </div>
            </form>
          </div>
        </div>
      </div>
      <div
        class="mt-16 border-t border-white/10 pt-8 sm:mt-20 md:flex md:items-center md:justify-between lg:mt-24"
      >
        <div class="flex gap-x-6 md:order-2">
          <a
            href="https://github.com/mooxphp/"
            target="_blank"
            class="text-gray-400 hover:text-indigo-500"
          >
            <span class="sr-only">GitHub</span>
            <x-si-github class="h-6 w-6 text-gray-400 hover:text-indigo-500" />
        </a>
          <a
            href="https://packagist.org/packages/moox"
            target="_blank"
            class="text-gray-400 hover:text-orange-700"
          >
            <span class="sr-only">Packagist</span>
            <x-si-packagist class="h-6 w-6 text-gray-400 hover:text-orange-700" style="stroke-width: 0.5; stroke: currentColor; fill: currentColor;" />
          </a>
          <a
            href="https://x.com/mooxphp"
            target="_blank"
            class="text-gray-400 hover:text-violet-700"
          >
            <span class="sr-only">X</span>
            <x-si-x class="h-6 w-6 text-gray-400 hover:text-violet-700" />
          </a>
          <a
            href="https://www.youtube.com/@mooxphp"
            target="_blank"
            class="text-gray-400 hover:text-red-700"
          >
            <span class="sr-only">YouTube</span>
            <x-si-youtube class="h-6 w-6 text-gray-400 hover:text-red-700" />
          </a>
          <a
            href="https://mooxphp.slack.com/"
            target="_blank"
            class="text-gray-400 hover:text-pink-500"
          >
            <span class="sr-only">Slack</span>
            <x-si-slack class="h-6 w-6 text-gray-400 hover:text-pink-500" />
          </a>
          <a
            href="https://app.codacy.com/gh/mooxphp/moox/dashboard"
            target="_blank"
            class="text-gray-400 hover:text-blue-700"
          >
            <span class="sr-only">Codacy</span>
            <x-si-codacy class="h-6 w-6 text-gray-400 hover:text-blue-700" />
          </a>
          <a
          href="https://hosted.weblate.org/projects/moox/"
          target="_blank"
          class="text-gray-400 hover:text-violet-700"
        >
          <span class="sr-only">Weblate</span>
          <x-si-weblate class="h-6 w-6 text-gray-400 hover:text-violet-700" />
        </a>
        </div>
        <p class="mt-8 text-sm/6 text-gray-400 md:order-1 md:mt-0">
          &copy; 2025 Moox. All rights reserved.
        </p>
      </div>
    </div>
  </footer>
