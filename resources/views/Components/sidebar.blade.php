<aside
    id="sidebar"
    class="w-64 bg-[#502C58] shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out flex flex-col
        fixed inset-y-0 left-0 h-screen z-50"
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
        <div class="ml-9 mt-1 space-y-1 hidden">
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
        <div class="ml-9 mt-1 space-y-1 hidden">
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
        <div class="ml-9 mt-1 space-y-1 hidden">
            <a href="/update#announcements" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Announcements</a>
            <a href="/update#events" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Events</a>
            <a href="/update#gallery" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Gallery</a>
            <a href="/update#resources" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Resources</a>
        </div>
    </nav>

    <!-- Back to Home -->
    <div class="px-2 mb-2">
        <a href="/" class="sidebar-link flex items-center px-4 py-2 rounded-lg font-bold transition relative">
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
</aside>

<!-- Mobile overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-40 z-20 md:hidden hidden"></div>
