<nav class="bg-[#502C58] shadow-lg fixed w-full z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-3 text-2xl font-bold text-white tracking-tight hover:text-[#E7AB39] transition">
            <img src="/images/commeownity-icon.svg" alt="Commeownity Logo" class="h-10 w-auto">
            Commeownity
        </a>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center space-x-6">
        <a href="/" class="text-white font-bold hover:text-[#E7AB39] transition">Home</a>
        <a href="/adopt" class="text-white font-bold hover:text-[#E7AB39] transition">Adopt a Cat</a>
        <div class="relative group">
            <button class="flex items-center text-white font-bold hover:text-[#E7AB39] transition focus:outline-none">
            Get Involved
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
            </button>
            <div class="absolute left-0 mt-2 w-48 bg-[#3d2243] shadow-lg rounded-md opacity-0 group-hover:opacity-100 transition-opacity">
            <a href="/volunteer" class="block px-4 py-2 text-white hover:bg-[#E7AB39] hover:text-[#502C58]">Volunteer</a>
            <a href="/donate" class="block px-4 py-2 text-white hover:bg-[#E7AB39] hover:text-[#502C58]">Donate</a>
            <a href="/report" class="block px-4 py-2 text-white hover:bg-[#E7AB39] hover:text-[#502C58]">Report a Cat</a>
            </div>
        </div>
        <a href="/about" class="text-white font-bold hover:text-[#E7AB39] transition">About & Resources</a>
        <a href="/login" class="text-white font-bold hover:text-[#E7AB39] transition">Log In</a>
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

    <!-- Mobile Menu Panel -->
    <div id="mobile-menu" class="fixed inset-0 bg-[#502C58] bg-opacity-95 transform -translate-x-full transition-transform duration-300 ease-in-out lg:hidden">
        <!-- Close Button for Mobile Menu -->
        <button id="menu-close" aria-label="Close menu" class="absolute top-4 right-4 focus:outline-none">
        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
        </button>
        <div class="mt-20 px-6 space-y-6">
        <a href="/" class="block text-white font-bold text-lg hover:text-[#E7AB39] transition">Home</a>
        <a href="/adopt" class="block text-white font-bold text-lg hover:text-[#E7AB39] transition">Adopt a Cat</a>
        <div class="space-y-2">
            <button class="w-full text-left text-white font-bold text-lg hover:text-[#E7AB39] transition focus:outline-none">Get Involved</button>
            <div class="pl-4 space-y-1">
            <a href="/volunteer" class="block text-white hover:text-[#E7AB39] transition">Volunteer</a>
            <a href="/donate" class="block text-white hover:text-[#E7AB39] transition">Donate</a>
            <a href="/report" class="block text-white hover:text-[#E7AB39] transition">Report a Cat</a>
            </div>
        </div>
        <a href="/about" class="block text-white font-bold text-lg hover:text-[#E7AB39] transition">About & Resources</a>
        <a href="/login" class="block text-white font-bold text-lg hover:text-[#E7AB39] transition">Log In</a>
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
        });
    </script>
</nav>

