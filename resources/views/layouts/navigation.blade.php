<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <div>
        <div class="row ">
            <div class=" list-group-item border-t rounded-3">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        <b style="font-size: 20px; text-decoration: none;">{{ __('Home') }}</b>
                    </x-nav-link>
            </div>

            <div class="list-group-item border-t">
                <!-- Logo -->
                <!-- Navigation Links -->
                <div class="">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <b style="font-size: 20px; text-decoration: none;">{{ __('Dashboard') }}</b>
                    </x-nav-link>
                </div>
            </div>

                @if(Auth::user()->hasRole('user'))            
                    <div class=" list-group-item border-t rounded-3">
                        <x-nav-link :href="route('dashboard.myprofile')" :active="request()->routeIs('dashboard.myprofile')">
                            <b style="font-size: 20px;">{{ __('My Profile') }}</b>
                        </x-nav-link>
                    </div>
                @endif
                @if(Auth::user()->hasRole('Admin'))
                  <div class="list-group-item border-t" >
                        <x-nav-link :href="route('dashboard.user')" :active="request()->routeIs('dashboard.user')">
                            <b style="font-size: 20px; text-decoration: none;">{{ __('Players') }}</b>
                        </x-nav-link>
                    </div>
                    <div class="list-group-item border-t" >
                    <x-nav-link :href="route('futsal.add')" :active="request()->routeIs('futsal.add')">
                        <b style="font-size: 20px; text-decoration: none;">{{ __('Add Futsal') }}</b>
                    </x-nav-link>
                </div>
                @endif
                @if(Auth::user()->hasRole('Futsal'))
                <div class="list-group-item border-t" >
                   <div>
                       <a href="/bookingview">Booking view</a>
                   </div>
                </div>
                @endif
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6 px-6 ml-6">
                <x-dropdown align="right" width="90" >
                    <x-slot name="trigger">
                        <button class="flex items-center text-right font-medium text-gray-100 hover:text-gray-100 hover:border-gray-000 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div style="color: black;">HI,  {{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                    </div>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden p-6">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">

            <div class="mt-3 justify-end">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>