<nav class="bg-primary fixed top-0 left-0 w-full z-50" x-data="{ mobileMenuOpen: false }">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" :aria-expanded="mobileMenuOpen.toString()">
          <span class="sr-only">Open main menu</span>
          <!-- Icon when menu is closed -->
          <svg x-show="!mobileMenuOpen" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!-- Icon when menu is open -->
          <svg x-show="mobileMenuOpen" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <svg class="h-8 w-auto" fill="#000000" width="249px" height="249px" viewBox="-3.2 -3.2 38.40 38.40" id="icon" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, -1, 0, 0)rotate(0)" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"><path transform="translate(-3.2, -3.2), scale(2.4)" fill="#ffffff" d="M9.166.33a2.25 2.25 0 00-2.332 0l-5.25 3.182A2.25 2.25 0 00.5 5.436v5.128a2.25 2.25 0 001.084 1.924l5.25 3.182a2.25 2.25 0 002.332 0l5.25-3.182a2.25 2.25 0 001.084-1.924V5.436a2.25 2.25 0 00-1.084-1.924L9.166.33z" strokewidth="0"></path></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.4"><defs><style>.cls-1{fill:none;}</style></defs><title>letter--Hh</title><polygon points="13 9 13 15 9 15 9 9 7 9 7 23 9 23 9 17 13 17 13 23 15 23 15 9 13 9"></polygon><path d="M23,13H19V9H17V23h2V15h4v8h2V15A2,2,0,0,0,23,13Z"></path><rect id="_Transparent_Rectangle_" data-name="<Transparent Rectangle>" class="cls-1" width="32" height="32"></rect></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;}</style></defs><title>letter--Hh</title><polygon points="13 9 13 15 9 15 9 9 7 9 7 23 9 23 9 17 13 17 13 23 15 23 15 9 13 9"></polygon><path d="M23,13H19V9H17V23h2V15h4v8h2V15A2,2,0,0,0,23,13Z"></path><rect id="_Transparent_Rectangle_" data-name="<Transparent Rectangle>" class="cls-1" width="32" height="32"></rect></g></svg>
        </div>
        <div class="hidden sm:ml-auto sm:block">
          <div class="flex space-x-4">
            <!-- Modified links: Contact Us and About Us -->
            <a wire:navigate href="{{route('services')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">{{__('Services')}}</a>
            <a wire:navigate href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contact Us</a>
            <a wire:navigate href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About Us</a>     

            <x-dropdown align="right" width="10">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2   text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{app()->getLocale()}}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        @foreach (config('localization.locales') as $locale)
                        <x-dropdown-link wire:navigate :href="route('localization',$locale)">
                            {{ __($locale) }}
                        </x-dropdown-link>

                        @endforeach

                    </x-slot>
                </x-dropdown>
            


        </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div x-show="mobileMenuOpen" class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a wire:navigate href="{{route('services')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">{{__('Services')}}</a>
      <a wire:navigate href="#team" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Contact US</a>
      <a wire:navigate href="#team" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">About US</a>
      <div class="flex space-x-2">
      <a href="#" class="text-gray-300 hover:text-white block rounded-md px-3 py-2 text-base font-medium"><i class="fab fa-instagram"></i></a>
      <a href="#" class="text-gray-300 hover:text-white block rounded-md px-3 py-2 text-base font-medium"><i class="fab fa-facebook"></i></a>
      <a href="#" class="text-gray-300 hover:text-white block rounded-md px-3 py-2 text-base font-medium"><i class="fab fa-tiktok"></i></a>
      <a href="#" class="text-gray-300 hover:text-white block rounded-md px-3 py-2 text-base font-medium"><i class="fab fa-twitter"></i></a>
      <a href="#" class="text-gray-300 hover:text-white block rounded-md px-3 py-2 text-base font-medium"><i class="fab fa-youtube"></i></a>
      <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{app()->getLocale()}}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        @foreach (config('localization.locales') as $locale)
                        <x-dropdown-link wire:navigate :href="route('localization',$locale)">
                            {{ __($locale) }}
                        </x-dropdown-link>

                        @endforeach

                    </x-slot>
                </x-dropdown>
      </div>
    </div>
  </div>
</nav>