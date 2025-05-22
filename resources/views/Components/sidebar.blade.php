<aside
    id="sidebar"
    class="w-64 bg-[#502C58] shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out flex flex-col
           fixed inset-y-0 left-0 h-screen z-30"
    style="will-change: transform;"
>
    <!-- Brand/Logo -->
    <div class="flex items-center space-x-2 px-6 py-5 text-white hover:text-[#E7AB39] transition">
        <img src="/images/commeownity-icon.svg" alt="Logo" class="h-8 mr-3">
        <span class="font-bold text-lg tex">Commeownity</span>
    </div>
    <!-- Role Label -->
    <div class="flex justify-center items-center h-10 mb-5">
        <p class="italic font-bold text-lg text-white bg-[#E7AB39] px-4 py-1 rounded-3xl">
            ADMIN
        </p>
    </div>
    <!-- Search Bar -->
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
    <!-- Navigation -->
    <nav class="flex-1 px-2 space-y-1">
        <!-- Dashboard -->
        <a href="/dashboard"
            class="flex items-center px-4 py-2 rounded-lg text-white font-bold hover:text-[#E7AB39] transition">
            <i class="fas fa-tachometer-alt mr-3"></i>
            <span class="{{ request()->is('dashboard') ? 'underline underline-offset-4' : ''}}">Dashboard</span>
        </a>
        <!-- Tables -->
        <div>
            <button type="button"
                class="w-full flex items-center px-4 py-2 rounded-lg text-white font-bold hover:text-[#E7AB39] transition submenu-toggle">
                <i class="fas fa-table mr-3"></i>
                <span class="{{ request()->is('tables') ? 'underline underline-offset-4' : ''}}">Tables</span>
                <i class="fas fa-chevron-down ml-auto text-xs"></i>
            </button>
            <div class="ml-9 mt-1 space-y-1 hidden">
                <a href="tables#adoptions" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Adoptions</a>
                <a href="tables#donations" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Donations</a>
                <a href="tables#applications" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Applications</a>
            </div>
        </div>
        <!-- Moderation -->
        <div>
            <button type="button"
                class="w-full flex items-center px-4 py-2 rounded-lg text-white font-bold hover:text-[#E7AB39] transition submenu-toggle">
                <i class="fas fa-shield-alt mr-3"></i>
                <span class="{{ request()->is('moderation') ? 'underline underline-offset-4' : ''}}">Moderation</span>
                <i class="fas fa-chevron-down ml-auto text-xs"></i>
            </button>
            <div class="ml-9 mt-1 space-y-1 hidden">
                <a href="moderation#reports" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Reports</a>
                <a href="moderation#posts" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Posts</a>
            </div>
        </div>
        <!-- Update -->
        <div>
            <button type="button"
                class="w-full flex items-center px-4 py-2 rounded-lg text-white font-bold hover:text-[#E7AB39] transition submenu-toggle">
                <i class="fas fa-sync-alt mr-3"></i>
                <span class="{{ request()->is('update') ? 'underline underline-offset-4' : ''}}">Update</span>
                <i class="fas fa-chevron-down ml-auto text-xs"></i>
            </button>
            <div class="ml-9 mt-1 space-y-1 hidden">
                <a href="update#announcements" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Announcements</a>
                <a href="update#gallery" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Gallery</a>
                <a href="update#educational" class="block px-2 py-1 text-white rounded hover:bg-[#E7AB39] hover:text-[#502C58]">Educational</a>
            </div>
        </div>
    </nav>
    <!-- Logout -->
    <div class="mt-auto px-2 mb-6">
        <a href="/"
            class="flex items-center px-4 py-2 rounded-lg text-white font-bold hover:text-[#E7AB39] transition ">
            <i class="fas fa-sign-out-alt mr-3"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>

<!-- Mobile overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-40 z-20 md:hidden hidden"></div>