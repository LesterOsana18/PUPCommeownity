<aside
    id="sidebar"
    class="w-64 bg-[#502C58] shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out flex flex-col
        fixed inset-y-0 left-0 h-screen z-50 overflow-y-auto"
    style="will-change: transform;"
>
    <style>
        .text-reveal-container {
            position: relative;
            display: inline-block;
        }

        .text-original,
        .text-colored {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .text-original {
            color: white;
            position: relative;
            z-index: 1;
        }

        .text-colored {
            position: absolute;
            top: 0;
            left: 0;
            color: #E7AB39;
            clip-path: circle(0% at 50% 50%);
            transition: clip-path 0.2s ease-in-out;
            white-space: nowrap;
            z-index: 2;
        }

        .sidebar-link:hover .text-colored {
            clip-path: circle(75% at 50% 50%);
        }

        .fa-chevron-down {
            transition: transform 0.2s ease-in-out;
        }
    </style>

    <!-- Logo -->
    <div class="flex items-center justify-center px-6 py-5 text-white hover:text-[#E7AB39] transition">
        <img src="/images/commeownity-icon.svg" alt="Logo" class="h-8 mr-3">
        <span class="font-bold text-lg">Commeownity</span>
    </div>

    <!-- Role -->
    <div class="flex justify-center items-center h-10 mb-5">
        <p class="italic font-bold text-lg text-white bg-[#E7AB39] px-4 py-1 rounded-3xl">ADMIN</p>
    </div>

    <!-- Search -->
    <div class="px-6 pb-3">
        <div class="relative">
            <input
                type="text"
                placeholder="Search..."
                class="w-full bg-gray-100 rounded-lg pl-10 pr-3 py-2 text-sm focus:text-[#502C58] focus:outline-none focus:ring-2 focus:ring-[#4ABDAC]"
            />
            <span class="absolute left-3 top-2 text-gray-400">
                <i class="fas fa-search"></i>
            </span>
        </div>
    </div>

    <!-- Nav -->
    <nav class="flex-1 px-2 space-y-1">

        <!-- Dashboard -->
        <a href="/dashboard" class="sidebar-link flex items-center px-4 py-2 rounded-lg font-bold transition relative">
            <div class="text-reveal-container">
                <span class="text-original">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="{{ request()->is('dashboard') ? 'underline underline-offset-4' : '' }}">Dashboard</span>
                </span>
                <span class="text-colored">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </span>
            </div>
        </a>

        <!-- Tables -->
        <button type="button" class="sidebar-link w-full flex items-center px-4 py-2 rounded-lg font-bold transition relative submenu-toggle">
            <div class="text-reveal-container">
                <span class="text-original">
                    <i class="fas fa-table"></i>
                    <span class="{{ request()->is('tables') ? 'underline underline-offset-4' : '' }}">Tables</span>
                </span>
                <span class="text-colored">
                    <i class="fas fa-table"></i>
                    <span>Tables</span>
                </span>
            </div>
            <i class="fas fa-chevron-down text-xs text-white ml-auto"></i>
        </button>
        <div class="ml-9 mt-1 space-y-1 submenu-content hidden">
            <a href="/tables#adoptions" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Adoptions</a>
            <a href="/tables#donations" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Donations</a>
            <a href="/tables#applications" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Applications</a>
        </div>

        <!-- Moderation -->
        <button type="button" class="sidebar-link w-full flex items-center px-4 py-2 rounded-lg font-bold transition relative submenu-toggle">
            <div class="text-reveal-container">
                <span class="text-original">
                    <i class="fas fa-shield-alt"></i>
                    <span class="{{ request()->is('moderation') ? 'underline underline-offset-4' : '' }}">Moderation</span>
                </span>
                <span class="text-colored">
                    <i class="fas fa-shield-alt"></i>
                    <span>Moderation</span>
                </span>
            </div>
            <i class="fas fa-chevron-down text-xs text-white ml-auto"></i>
        </button>
        <div class="ml-9 mt-1 space-y-1 submenu-content hidden">
            <a href="/moderation#reports" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Reports</a>
            <a href="/moderation#posts" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Posts</a>
            <a href="/moderation#messages" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Messages</a>
        </div>

        <!-- Update -->
        <button type="button" class="sidebar-link w-full flex items-center px-4 py-2 rounded-lg font-bold transition relative submenu-toggle">
            <div class="text-reveal-container">
                <span class="text-original">
                    <i class="fas fa-sync-alt"></i>
                    <span class="{{ request()->is('update') ? 'underline underline-offset-4' : '' }}">Update</span>
                </span>
                <span class="text-colored">
                    <i class="fas fa-sync-alt"></i>
                    <span>Update</span>
                </span>
            </div>
            <i class="fas fa-chevron-down text-xs text-white ml-auto"></i>
        </button>
        <div class="ml-9 mt-1 space-y-1 submenu-content hidden">
            <a href="/update#announcements" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Announcements</a>
            <a href="/update#committees" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Committees</a>
            <a href="/update#events" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Events</a>
            <a href="/update#gallery" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Gallery</a>
            <a href="/update#resources" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Resources</a>
        </div>
    </nav>

    <!-- Back to Home -->
    <div class="px-2 mb-2">
        <a href="/" class="sidebar-link w-full flex items-center px-4 py-2 rounded-lg font-bold transition relative bg-transparent">
            <div class="text-reveal-container">
                <span class="text-original">
                    <i class="fas fa-home"></i>
                    <span>Back to Home</span>
                </span>
                <span class="text-colored">
                    <i class="fas fa-home"></i>
                    <span>Back to Home</span>
                </span>
            </div>
        </a>
    </div>

    <!-- Edit Profile -->
    <div class="px-2 mb-2">
        <a href="{{ route('profile.edit') }}" class="sidebar-link w-full flex items-center px-4 py-2 rounded-lg font-bold transition relative bg-transparent">
            <div class="text-reveal-container">
                <span class="text-original">
                    <i class="fas fa-user-edit"></i>
                    <span>Edit Profile</span>
                </span>
                <span class="text-colored">
                    <i class="fas fa-user-edit"></i>
                    <span>Edit Profile</span>
                </span>
            </div>
        </a>
    </div>

    <!-- Logout -->
    <div class="px-2 mb-6">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="sidebar-link w-full flex items-center px-4 py-2 rounded-lg font-bold transition relative bg-transparent">
                <div class="text-reveal-container">
                    <span class="text-original">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </span>
                    <span class="text-colored">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </span>
                </div>
            </button>
        </form>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.querySelector('input[type="text"][placeholder="Search..."]');
        const sidebarLinks = document.querySelectorAll('nav a');
        const submenuToggles = document.querySelectorAll('.submenu-toggle');
        const submenuContents = document.querySelectorAll('.submenu-content');

        submenuContents.forEach(menu => {
            menu.classList.remove('hidden');
            menu.classList.add('hidden');
        });

        // Dropdown functionality
        submenuToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                const submenu = this.nextElementSibling;
                const chevron = this.querySelector('.fa-chevron-down');

                if (submenu && submenu.classList.contains('submenu-content')) {
                    const computedDisplay = window.getComputedStyle(submenu).display;
                    const hasHiddenClass = submenu.classList.contains('hidden');
                    const isCurrentlyVisible = (computedDisplay !== 'none' && !hasHiddenClass) || submenu.style.display === 'block';

                    if (isCurrentlyVisible) {
                        submenu.style.display = 'none';
                        submenu.classList.add('hidden');
                    } else {
                        submenu.style.display = 'block';
                        submenu.classList.remove('hidden');
                    }
                }
            });
        });

        // Search functionality
        searchInput.addEventListener('input', function () {
            const searchTerm = searchInput.value.toLowerCase().trim();

            if (searchTerm === '') {
                // Reset when search cleared
                sidebarLinks.forEach(link => {
                    link.style.display = '';
                });
                submenuToggles.forEach(toggle => {
                    toggle.style.display = '';
                });
                submenuContents.forEach(menu => {
                    menu.style.display = 'none';
                    menu.classList.add('hidden');

                    // Reset chevron rotation
                    const toggle = menu.previousElementSibling;
                    if (toggle && toggle.classList.contains('submenu-toggle')) {
                        const chevron = toggle.querySelector('.fa-chevron-down');
                        if (chevron) chevron.style.transform = 'rotate(0deg)';
                    }
                });
                return;
            }

            // Search logic
            const matchingToggles = new Set();
            const matchingSubmenus = new Set();

            // Check main toggles
            submenuToggles.forEach(toggle => {
                const toggleText = toggle.textContent.toLowerCase();
                if (toggleText.includes(searchTerm)) {
                    matchingToggles.add(toggle);
                    const submenu = toggle.nextElementSibling;
                    if (submenu && submenu.classList.contains('submenu-content')) {
                        matchingSubmenus.add(submenu);
                    }
                }
            });

            // Check submenu items
            sidebarLinks.forEach(link => {
                const linkText = link.textContent.toLowerCase();
                if (linkText.includes(searchTerm)) {
                    const submenuContainer = link.closest('.submenu-content');
                    if (submenuContainer) {
                        matchingSubmenus.add(submenuContainer);
                        const parentToggle = submenuContainer.previousElementSibling;
                        if (parentToggle && parentToggle.classList.contains('submenu-toggle')) {
                            matchingToggles.add(parentToggle);
                        }
                    }
                }
            });

            // Apply search visibility
            submenuToggles.forEach(toggle => {
                toggle.style.display = matchingToggles.has(toggle) ? '' : 'none';
            });

            submenuContents.forEach(menu => {
                if (matchingSubmenus.has(menu)) {
                    menu.style.display = 'block';
                    menu.classList.remove('hidden');
                    const toggle = menu.previousElementSibling;
                    if (toggle && toggle.classList.contains('submenu-toggle')) {
                        const chevron = toggle.querySelector('.fa-chevron-down');
                        if (chevron) chevron.style.transform = 'rotate(180deg)';
                    }
                } else {
                    menu.style.display = 'none';
                }
            });

            // Handle individual link visibility
            sidebarLinks.forEach(link => {
                const linkText = link.textContent.toLowerCase();
                const submenuContainer = link.closest('.submenu-content');

                if (submenuContainer && matchingSubmenus.has(submenuContainer)) {
                    const parentToggle = submenuContainer.previousElementSibling;
                    const parentText = parentToggle ? parentToggle.textContent.toLowerCase() : '';

                    if (parentText.includes(searchTerm) || linkText.includes(searchTerm)) {
                        link.style.display = '';
                    } else {
                        link.style.display = 'none';
                    }
                } else if (!submenuContainer) {
                    link.style.display = linkText.includes(searchTerm) ? '' : 'none';
                }
            });
        });
    });
    </script>
</aside>

<!-- Mobile overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-40 z-20 md:hidden hidden"></div>
