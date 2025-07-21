@extends('layouts.web')

@section('content')


<div class="pt-18 sm:pt-24">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">

        <div id="packages" class="max-w-7xl mx-auto text-center">
            <h2
              class="pb-2 font-semibold tracking-tight text-balance gradient-text-default sm:text-5xl text-3xl"
            >
              Moox Packages
            </h2>
            <br />
            <p class="text-gray-300 text-lg/8 text-pretty">
              Our countless packages for Laravel and Filament.
            </p>
          </div>

    </div>
</div>

<form class="group/tier py-12 sm:py-18">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mt-16 flex justify-center">
        <fieldset aria-label="Payment frequency">
          <div class="grid grid-cols-2 gap-x-1 rounded-full p-1 text-center text-xs/5 font-semibold ring-1 ring-gray-200 ring-inset">
            <label class="group relative rounded-full px-2.5 py-1 has-checked:bg-indigo-600">
              <input type="radio" name="frequency" value="monthly" checked class="absolute inset-0 appearance-none rounded-full" />
              <span class="text-gray-500 group-has-checked:text-white">Monthly</span>
            </label>
            <label class="group relative rounded-full px-2.5 py-1 has-checked:bg-indigo-600">
              <input type="radio" name="frequency" value="annually" class="absolute inset-0 appearance-none rounded-full" />
              <span class="text-gray-500 group-has-checked:text-white">Annually</span>
            </label>
          </div>
        </fieldset>
      </div>
      <div class="isolate mx-auto mt-10 grid max-w-md grid-cols-1 gap-8 md:max-w-2xl md:grid-cols-2 lg:max-w-4xl xl:mx-0 xl:max-w-none xl:grid-cols-4">
        <div class="bg-gradient-to-br from-mooxblue to-mooxdark group/tier rounded-3xl p-8 ring-1 ring-gray-200 data-featured:ring-2 data-featured:ring-indigo-600">
          <div class="flex items-center justify-between gap-x-4">
            <h3 id="tier-hobby" class="text-lg/8 font-semibold text-gray-900 group-data-featured/tier:text-indigo-600">Hobby</h3>
            <p class="rounded-full bg-indigo-600/10 px-2.5 py-1 text-xs/5 font-semibold text-indigo-600 group-not-data-featured/tier:hidden">Most popular</p>
          </div>
          <p class="mt-4 text-sm/6 text-gray-600">The essentials to provide your best work for clients.</p>
          <p class="mt-6 flex items-baseline gap-x-1 group-not-has-[[name=frequency][value=monthly]:checked]/tiers:hidden">
            <span class="text-4xl font-semibold tracking-tight text-gray-900">$19</span>
            <span class="text-sm/6 font-semibold text-gray-600">/month</span>
          </p>
          <p class="mt-6 flex items-baseline gap-x-1 group-not-has-[[name=frequency][value=annually]:checked]/tiers:hidden">
            <span class="text-4xl font-semibold tracking-tight text-gray-900">$199</span>
            <span class="text-sm/6 font-semibold text-gray-600">/year</span>
          </p>
          <button type="submit" name="tier" value="hobby" aria-describedby="tier-hobby" class="mt-6 block w-full rounded-md px-3 py-2 text-center text-sm/6 font-semibold text-indigo-600 ring-1 ring-indigo-200 ring-inset group-data-featured/tier:bg-indigo-600 group-data-featured/tier:text-white group-data-featured/tier:shadow-xs group-data-featured/tier:ring-0 hover:ring-indigo-300 group-data-featured/tier:hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Buy plan</button>
          <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600">
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              5 products
            </li>
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              Up to 1,000 subscribers
            </li>
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              Basic analytics
            </li>
          </ul>
        </div>
        <div class="group/tier rounded-3xl p-8 ring-1 ring-gray-200 data-featured:ring-2 data-featured:ring-indigo-600">
          <div class="flex items-center justify-between gap-x-4">
            <h3 id="tier-freelancer" class="text-lg/8 font-semibold text-gray-900 group-data-featured/tier:text-indigo-600">Freelancer</h3>
            <p class="rounded-full bg-indigo-600/10 px-2.5 py-1 text-xs/5 font-semibold text-indigo-600 group-not-data-featured/tier:hidden">Most popular</p>
          </div>
          <p class="mt-4 text-sm/6 text-gray-600">The essentials to provide your best work for clients.</p>
          <p class="mt-6 flex items-baseline gap-x-1 group-not-has-[[name=frequency][value=monthly]:checked]/tiers:hidden">
            <span class="text-4xl font-semibold tracking-tight text-gray-900">$29</span>
            <span class="text-sm/6 font-semibold text-gray-600">/month</span>
          </p>
          <p class="mt-6 flex items-baseline gap-x-1 group-not-has-[[name=frequency][value=annually]:checked]/tiers:hidden">
            <span class="text-4xl font-semibold tracking-tight text-gray-900">$299</span>
            <span class="text-sm/6 font-semibold text-gray-600">/year</span>
          </p>
          <button type="submit" name="tier" value="freelancer" aria-describedby="tier-freelancer" class="mt-6 block w-full rounded-md px-3 py-2 text-center text-sm/6 font-semibold text-indigo-600 ring-1 ring-indigo-200 ring-inset group-data-featured/tier:bg-indigo-600 group-data-featured/tier:text-white group-data-featured/tier:shadow-xs group-data-featured/tier:ring-0 hover:ring-indigo-300 group-data-featured/tier:hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Buy plan</button>
          <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600">
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              5 products
            </li>
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              Up to 1,000 subscribers
            </li>
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              Basic analytics
            </li>
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              48-hour support response time
            </li>
          </ul>
        </div>
        <div data-featured="true" class="group/tier rounded-3xl p-8 ring-1 ring-gray-200 data-featured:ring-2 data-featured:ring-indigo-600">
          <div class="flex items-center justify-between gap-x-4">
            <h3 id="tier-startup" class="text-lg/8 font-semibold text-gray-900 group-data-featured/tier:text-indigo-600">Startup</h3>
            <p class="rounded-full bg-indigo-600/10 px-2.5 py-1 text-xs/5 font-semibold text-indigo-600 group-not-data-featured/tier:hidden">Most popular</p>
          </div>
          <p class="mt-4 text-sm/6 text-gray-600">A plan that scales with your rapidly growing business.</p>
          <p class="mt-6 flex items-baseline gap-x-1 group-not-has-[[name=frequency][value=monthly]:checked]/tiers:hidden">
            <span class="text-4xl font-semibold tracking-tight text-gray-900">$59</span>
            <span class="text-sm/6 font-semibold text-gray-600">/month</span>
          </p>
          <p class="mt-6 flex items-baseline gap-x-1 group-not-has-[[name=frequency][value=annually]:checked]/tiers:hidden">
            <span class="text-4xl font-semibold tracking-tight text-gray-900">$599</span>
            <span class="text-sm/6 font-semibold text-gray-600">/year</span>
          </p>
          <button type="submit" name="tier" value="startup" aria-describedby="tier-startup" class="mt-6 block w-full rounded-md px-3 py-2 text-center text-sm/6 font-semibold text-indigo-600 ring-1 ring-indigo-200 ring-inset group-data-featured/tier:bg-indigo-600 group-data-featured/tier:text-white group-data-featured/tier:shadow-xs group-data-featured/tier:ring-0 hover:ring-indigo-300 group-data-featured/tier:hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Buy plan</button>
          <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600">
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              25 products
            </li>
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              Up to 10,000 subscribers
            </li>
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              Advanced analytics
            </li>
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              24-hour support response time
            </li>
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              Marketing automations
            </li>
          </ul>
        </div>
        <div class="group/tier rounded-3xl p-8 ring-1 ring-gray-200 data-featured:ring-2 data-featured:ring-indigo-600">
          <div class="flex items-center justify-between gap-x-4">
            <h3 id="tier-enterprise" class="text-lg/8 font-semibold text-gray-900 group-data-featured/tier:text-indigo-600">Enterprise</h3>
            <p class="rounded-full bg-indigo-600/10 px-2.5 py-1 text-xs/5 font-semibold text-indigo-600 group-not-data-featured/tier:hidden">Most popular</p>
          </div>
          <p class="mt-4 text-sm/6 text-gray-600">Dedicated support and infrastructure for your company.</p>
          <p class="mt-6 flex items-baseline gap-x-1 group-not-has-[[name=frequency][value=monthly]:checked]/tiers:hidden">
            <span class="text-4xl font-semibold tracking-tight text-gray-900">$99</span>
            <span class="text-sm/6 font-semibold text-gray-600">/month</span>
          </p>
          <p class="mt-6 flex items-baseline gap-x-1 group-not-has-[[name=frequency][value=annually]:checked]/tiers:hidden">
            <span class="text-4xl font-semibold tracking-tight text-gray-900">$999</span>
            <span class="text-sm/6 font-semibold text-gray-600">/year</span>
          </p>
          <button type="submit" name="tier" value="enterprise" aria-describedby="tier-enterprise" class="mt-6 block w-full rounded-md px-3 py-2 text-center text-sm/6 font-semibold text-indigo-600 ring-1 ring-indigo-200 ring-inset group-data-featured/tier:bg-indigo-600 group-data-featured/tier:text-white group-data-featured/tier:shadow-xs group-data-featured/tier:ring-0 hover:ring-indigo-300 group-data-featured/tier:hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Buy plan</button>
          <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600">
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              Unlimited products
            </li>
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              Unlimited subscribers
            </li>
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              Advanced analytics
            </li>
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              1-hour, dedicated support response time
            </li>
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              Marketing automations
            </li>
            <li class="flex gap-x-3">
              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600">
                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
              </svg>
              Custom reporting tools
            </li>
          </ul>
        </div>
      </div>
    </div>
  </form>


@endsection
