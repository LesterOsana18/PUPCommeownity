<nav class="bg-[#502C58] shadow-lg fixed w-full z-20">
    <style>
        .text-reveal-container {
            position: relative;
        }

        .text-original {
            color: white;
        }

        .text-colored {
            position: absolute;
            top: 0;
            left: 0;
            color: #E7AB39;
            clip-path: circle(0% at 50% 50%);
            transition: clip-path 0.1s ease-out;
        }

        .nav-link:hover .text-colored,
        .nav-button:hover .text-colored {
            clip-path: circle(75% at 50% 50%);
        }

        .dropdown-wrapper {
            position: relative;
        }

        .dropdown-wrapper::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            height: 20px; /* Buffer zone to prevent flicker */
            pointer-events: auto;
        }

        [data-dropdown] {
            transition-property: opacity, visibility;
            transition-duration: 300ms;
            transition-timing-function: ease-in-out;
            transition-delay: 150ms;
        }

        [data-dropdown].dropdown-hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        [data-dropdown].dropdown-visible {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }
    </style>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-3 text-2xl font-bold text-white tracking-tight hover:text-[#E7AB39] transition">
            <img src="/images/commeownity-icon.svg" alt="Commeownity Logo" class="h-10 w-auto">
            Commeownity
        </a>

        {{-- Desktop Menu (visible ≥ lg) --}}
        <div class="hidden lg:flex items-center space-x-6">
            {{-- Home --}}
            <a href="{{ url('/') }}" class="nav-link flex items-center font-bold text-lg relative">
                <div class="text-reveal-container">
                    <div class="text-original">
                        <i class="fa-solid fa-home mr-1"></i>
                        <span class="{{ request()->is('/') ? 'underline underline-offset-4' : '' }}">
                        Home
                        </span>
                    </div>
                    <div class="text-colored">
                        <i class="fa-solid fa-home mr-1"></i>
                        <span class="{{ request()->is('/') ? 'underline underline-offset-4' : '' }}">
                        Home
                        </span>
                    </div>
                </div>
            </a>

            {{-- Adopt a Cat --}}
            <a href="{{ url('/adopt') }}" class="nav-link flex items-center font-bold text-lg relative">
                <div class="text-reveal-container">
                    <div class="text-original">
                        <i class="fa-solid fa-cat mr-1"></i>
                        <span class="{{ request()->is('adopt') ? 'underline underline-offset-4' : '' }}">
                        Adopt a Cat
                        </span>
                    </div>
                    <div class="text-colored">
                        <i class="fa-solid fa-cat mr-1"></i>
                        <span class="{{ request()->is('adopt') ? 'underline underline-offset-4' : '' }}">
                        Adopt a Cat
                        </span>
                    </div>
                </div>
            </a>

            {{-- Get Involved dropdown --}}
            <div class="dropdown-wrapper" onmouseenter="toggleDropdown(this, true)" onmouseleave="toggleDropdown(this, false)">
                @php
                    $getInvolvedActive = request()->is('volunteer') ||
                                        request()->is('donate')    ||
                                        request()->is('report*');
                @endphp
                <button class="nav-button flex items-center font-bold focus:outline-none">
                    <div class="text-reveal-container">
                        <div class="text-original">
                            <i class="fa-solid fa-hands-helping mr-1"></i>
                            <span class="{{ $getInvolvedActive ? 'underline underline-offset-4' : '' }}">
                            Get Involved
                            </span>
                            <svg class="w-4 h-4 ml-1 inline" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <div class="text-colored">
                            <i class="fa-solid fa-hands-helping mr-1"></i>
                            <span class="{{ $getInvolvedActive ? 'underline underline-offset-4' : '' }}">
                            Get Involved
                            </span>
                            <svg class="w-4 h-4 ml-1 inline" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                </button>
                <div class="absolute left-0 mt-2 w-48 bg-[#3d2243] shadow-lg
                    rounded-md opacity-0 invisible pointer-events-none
                    transition-all duration-200 ease-in-out"
                    data-dropdown
                >
                    <a href="{{ url('/volunteer') }}"
                    class="flex items-center px-4 py-2 text-white
                            hover:bg-[#E7AB39] hover:text-[#502C58]
                            {{ request()->is('volunteer') ? 'underline underline-offset-2' : '' }}">
                        <i class="fas fa-user-friends mr-1"></i>
                        <span class="ml-1">Volunteer</span>
                    </a>
                    <a href="{{ url('/donate') }}"
                    class="flex items-center px-4 py-2 text-white
                            hover:bg-[#E7AB39] hover:text-[#502C58]
                            {{ request()->is('donate') ? 'underline underline-offset-2' : '' }}">
                        <i class="fas fa-donate mr-1"></i>
                        <span class="ml-1">Donate</span>
                    </a>
                    <a href="{{ url('/report') }}"
                    class="flex items-center px-4 py-2 text-white
                            hover:bg-[#E7AB39] hover:text-[#502C58]
                            {{ request()->is('report*') ? 'underline underline-offset-2' : '' }}">
                        <i class="fas fa-exclamation-triangle mr-1"></i>
                        <span class="ml-1">Report a Cat</span>
                    </a>
                </div>
            </div>

            {{-- About & Resources --}}
            <a href="{{ url('/about') }}" class="nav-link flex items-center font-bold text-lg relative">
                <div class="text-reveal-container">
                    <div class="text-original">
                        <i class="fa-solid fa-info-circle mr-1"></i>
                        <span class="{{ request()->is('about') ? 'underline underline-offset-4' : '' }}">
                        About & Resources
                        </span>
                    </div>
                    <div class="text-colored">
                        <i class="fa-solid fa-info-circle mr-1"></i>
                        <span class="{{ request()->is('about') ? 'underline underline-offset-4' : '' }}">
                        About & Resources
                        </span>
                    </div>
                </div>
            </a>

            {{-- Show Login for guests only --}}
            @guest
                <a href="{{ route('login.form') }}" class="nav-link flex items-center font-bold text-lg relative">
                    <div class="text-reveal-container">
                        <div class="text-original">
                            <i class="fa-solid fa-sign-in-alt mr-1"></i>
                            <span class="{{ request()->is('login') ? 'underline underline-offset-4' : '' }}">
                            Log In
                            </span>
                        </div>
                        <div class="text-colored">
                            <i class="fa-solid fa-sign-in-alt mr-1"></i>
                            <span class="{{ request()->is('login') ? 'underline underline-offset-4' : '' }}">
                            Log In
                            </span>
                        </div>
                    </div>
                </a>
            @endguest

            {{-- Profile Picture + Edit Profile + Dashboard + Logout for Authenticated Users --}}
            @auth
                <div class="dropdown-wrapper" onmouseenter="toggleDropdown(this, true)" onmouseleave="toggleDropdown(this, false)">
                    <button class="focus:outline-none">
                        <img
                            src="{{ Auth::user()->profile_picture
                                        ? asset('storage/' . Auth::user()->profile_picture)
                                        : asset('images/default-profile.svg') }}"
                            alt="Profile"
                            class="h-10 w-10 rounded-full border-2 border-white shadow-md"
                        />
                    </button>
                    <div class="absolute right-0 mt-2 w-48 bg-[#3d2243] shadow-lg rounded-md z-50 opacity-0 invisible pointer-events-none" data-dropdown>
                        <!-- Edit Profile Button -->
                        <a href="{{ route('profile.edit') }}"
                            class="flex items-center w-full text-left px-4 py-2 text-white hover:bg-[#E7AB39] hover:text-[#502C58]">
                            <i class="fas fa-user-edit mr-2"></i>
                            <span>Edit Profile</span>
                        </a>

                        <!-- Dashboard Button -->
                        @if(Auth::user()->preferred_volunteer_role === 'site_administrator')
                            <a href="{{ route('dashboard') }}"
                            class="flex items-center w-full text-left px-4 py-2 text-white hover:bg-[#E7AB39] hover:text-[#502C58]">
                                <i class="fas fa-tachometer-alt mr-2"></i>
                                <span>Dashboard</span>
                            </a>
                        @endif

                        <!-- Log Out Button -->
                        <form method="POST" action="{{ route('logout') }}" class="m-0 p-0">
                            @csrf
                            <button type="submit"
                                    class="flex items-center w-full text-left px-4 py-2 text-white hover:bg-[#E7AB39] hover:text-[#502C58]">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                <span>Log Out</span>
                            </button>
                        </form>
                    </div>
                </div>
            @endauth
        </div>

        <!-- Mobile Hamburger -->
        <button id="menu-toggle" aria-controls="mobile-menu" aria-expanded="false" class="lg:hidden focus:outline-none">
        <span class="sr-only">Toggle menu</span>
        <!-- Open Icon -->
        <svg id="icon-open" class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <!-- Close Icon -->
        <svg id="icon-close" class="w-8 h-8 text-white hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
        </button>
    </div>

    @php
        $getInvolvedActive = request()->is('volunteer') || request()->is('donate') || request()->is('report*');
    @endphp

    {{-- Mobile Menu Panel (hidden by default, slides in on toggle) --}}
    <div id="mobile-menu"
        class="fixed inset-0 bg-[#502C58] bg-opacity-95 transform -translate-x-full
                transition-transform duration-300 ease-in-out lg:hidden">

        {{-- Close button --}}
        <button id="menu-close" aria-label="Close menu"
                class="absolute top-4 right-4 focus:outline-none">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="mt-20 px-6 space-y-6">
            {{-- Home --}}
            <a href="{{ url('/') }}" class="nav-link block font-bold text-lg relative">
                <div class="text-reveal-container">
                    <div class="text-original flex items-center">
                        <i class="fas fa-home mr-2"></i>
                        <span class="{{ request()->is('/') ? 'underline underline-offset-4' : '' }}">
                        Home
                        </span>
                    </div>
                    <div class="text-colored flex items-center">
                        <i class="fas fa-home mr-2"></i>
                        <span class="{{ request()->is('/') ? 'underline underline-offset-4' : '' }}">
                        Home
                        </span>
                    </div>
                </div>
            </a>

            {{-- Adopt a Cat --}}
            <a href="{{ url('/adopt') }}" class="nav-link block font-bold text-lg relative">
                <div class="text-reveal-container">
                    <div class="text-original flex items-center">
                        <i class="fas fa-cat mr-2"></i>
                        <span class="{{ request()->is('adopt') ? 'underline underline-offset-4' : '' }}">
                        Adopt a Cat
                        </span>
                    </div>
                    <div class="text-colored flex items-center">
                        <i class="fas fa-cat mr-2"></i>
                        <span class="{{ request()->is('adopt') ? 'underline underline-offset-4' : '' }}">
                        Adopt a Cat
                        </span>
                    </div>
                </div>
            </a>

            {{-- Get Involved (panel) --}}
            <div class="space-y-2">
                <button class="nav-button w-full font-bold text-lg relative text-left">
                    <div class="text-reveal-container">
                        <div class="text-original flex items-center">
                            <i class="fas fa-hands-helping mr-2"></i>
                            <span class="{{ $getInvolvedActive ? 'underline underline-offset-4' : '' }}">
                            Get Involved
                            </span>
                        </div>
                        <div class="text-colored flex items-center">
                            <i class="fas fa-hands-helping mr-2"></i>
                            <span class="{{ $getInvolvedActive ? 'underline underline-offset-4' : '' }}">
                            Get Involved
                            </span>
                        </div>
                    </div>
                </button>
                <div class="pl-4 space-y-1">
                    <a href="{{ url('/volunteer') }}" class="nav-link block font-bold text-base relative">
                        {{-- Volunteer --}}
                        <div class="text-reveal-container">
                            <div class="text-original flex items-center">
                                <i class="fas fa-user-friends mr-1"></i>
                                <span class="{{ request()->is('volunteer') ? 'underline underline-offset-4' : '' }}">
                                Volunteer
                                </span>
                            </div>
                            <div class="text-colored flex items-center">
                                <i class="fas fa-user-friends mr-1"></i>
                                <span class="{{ request()->is('volunteer') ? 'underline underline-offset-4' : '' }}">
                                Volunteer
                                </span>
                            </div>
                        </div>
                    </a>
                    <a href="{{ url('/donate') }}" class="nav-link block font-bold text-base relative">
                        {{-- Donate --}}
                        <div class="text-reveal-container">
                            <div class="text-original flex items-center">
                                <i class="fas fa-donate mr-1"></i>
                                <span class="{{ request()->is('donate') ? 'underline underline-offset-4' : '' }}">
                                Donate
                                </span>
                            </div>
                            <div class="text-colored flex items-center">
                                <i class="fas fa-donate mr-1"></i>
                                <span class="{{ request()->is('donate') ? 'underline underline-offset-4' : '' }}">
                                Donate
                                </span>
                            </div>
                        </div>
                    </a>
                    <a href="{{ url('/report') }}" class="nav-link block font-bold text-base relative">
                        {{-- Report a Cat --}}
                        <div class="text-reveal-container">
                            <div class="text-original flex items-center">
                                <i class="fas fa-exclamation-triangle mr-1"></i>
                                <span class="{{ request()->is('report*') ? 'underline underline-offset-4' : '' }}">
                                Report a Cat
                                </span>
                            </div>
                            <div class="text-colored flex items-center">
                                <i class="fas fa-exclamation-triangle mr-1"></i>
                                <span class="{{ request()->is('report*') ? 'underline underline-offset-4' : '' }}">
                                Report a Cat
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            {{-- About & Resources --}}
            <a href="{{ url('/about') }}" class="nav-link block font-bold text-lg relative">
                <div class="text-reveal-container">
                    <div class="text-original flex items-center">
                        <i class="fas fa-info-circle mr-2"></i>
                        <span class="{{ request()->is('about') ? 'underline underline-offset-4' : '' }}">
                        About & Resources
                        </span>
                    </div>
                    <div class="text-colored flex items-center">
                        <i class="fas fa-info-circle mr-2"></i>
                        <span class="{{ request()->is('about') ? 'underline underline-offset-4' : '' }}">
                        About & Resources
                        </span>
                    </div>
                </div>
            </a>

            {{-- Login for guests --}}
            @guest
                <a href="{{ route('login.form') }}" class="nav-link block font-bold text-lg relative">
                    <div class="text-reveal-container">
                        <div class="text-original flex items-center">
                            <i class="fas fa-sign-in-alt mr-2"></i>
                            <span class="{{ request()->is('login') ? 'underline underline-offset-4' : '' }}">
                            Log In
                            </span>
                        </div>
                        <div class="text-colored flex items-center">
                            <i class="fas fa-sign-in-alt mr-2"></i>
                            <span class="{{ request()->is('login') ? 'underline underline-offset-4' : '' }}">
                            Log In
                            </span>
                        </div>
                    </div>
                </a>
            @endguest

            {{-- Profile & Logout & Dashboard for signed-in users --}}
            @auth
                <div class="space-y-1 border-t border-white pt-4">
                    <div class="flex items-center space-x-3">
                        <img
                            src="{{ Auth::user()->profile_picture
                                        ? asset('storage/' . Auth::user()->profile_picture)
                                        : asset('images/default-profile.svg') }}"
                            alt="Profile"
                            class="h-10 w-10 rounded-full border-2 border-white shadow-md"
                        />
                        <span class="text-white font-bold">{{ Auth::user()->name }}</span>
                    </div>

                    {{-- Log Out --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="nav-link block font-bold text-base relative px-4 py-2 mt-2">
                            <div class="text-reveal-container">
                                <div class="text-original flex items-center">
                                    <i class="fas fa-sign-out-alt mr-1"></i>
                                    <span>Log Out</span>
                                </div>
                                <div class="text-colored flex items-center">
                                    <i class="fas fa-sign-out-alt mr-1"></i>
                                    <span>Log Out</span>
                                </div>
                            </div>
                        </button>
                    </form>

                    {{-- Edit Profile --}}
                    <a href="{{ route('profile.edit') }}"
                    class="nav-link block font-bold text-base relative px-4 py-2 mt-2">
                        <div class="text-reveal-container">
                            <div class="text-original flex items-center">
                                <i class="fas fa-user-edit mr-1"></i>
                                <span>Edit Profile</span>
                            </div>
                            <div class="text-colored flex items-center">
                                <i class="fas fa-user-edit mr-1"></i>
                                <span>Edit Profile</span>
                            </div>
                        </div>
                    </a>

                    {{-- Admin Dashboard --}}
                    @if(Auth::user()->preferred_volunteer_role === 'site_administrator')
                        <a href="{{ route('moderation') }}"
                        class="nav-link block font-bold text-base relative px-4 py-2 mt-2">
                            <div class="text-reveal-container">
                                <div class="text-original flex items-center">
                                    <i class="fas fa-tachometer-alt mr-1"></i>
                                    <span>Dashboard</span>
                                </div>
                                <div class="text-colored flex items-center">
                                    <i class="fas fa-tachometer-alt mr-1"></i>
                                    <span>Dashboard</span>
                                </div>
                            </div>
                        </a>
                    @endif
                </div>
            @endauth
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggle = document.getElementById('menu-toggle');
            const menu = document.getElementById('mobile-menu');
            const openIcon = document.getElementById('icon-open');
            const closeIcon = document.getElementById('icon-close');
            const closeBtn = document.getElementById('menu-close');

            function toggleMenu() {
                const expanded = toggle.getAttribute('aria-expanded') === 'true';
                toggle.setAttribute('aria-expanded', !expanded);
                menu.classList.toggle('translate-x-0');
                openIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            }

            toggle.addEventListener('click', toggleMenu);
            closeBtn.addEventListener('click', toggleMenu);

            const allDropdowns = document.querySelectorAll('[data-dropdown]');
            allDropdowns.forEach(dropdown => {
                dropdown.classList.add('dropdown-hidden');
                dropdown.classList.remove('dropdown-visible');
            });
        });

        let dropdownTimeout;

        function toggleDropdown(parent, show) {
            const dropdown = parent.querySelector('[data-dropdown]');
            if (!dropdown) return;

            if (show) {
                clearTimeout(dropdownTimeout);
                dropdown.classList.add('dropdown-visible');
                dropdown.classList.remove('dropdown-hidden');
            } else {
                dropdownTimeout = setTimeout(() => {
                    dropdown.classList.remove('dropdown-visible');
                    dropdown.classList.add('dropdown-hidden');
                }, 200);
            }
        }
    </script>
</nav>
