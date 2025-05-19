<aside class="w-72 h-screen bg-[#502C58] text-white flex flex-col fixed">
    <div class="flex items-center h-20 px-6 font-bold text-2xl">
        <img src="/images/commeownity-icon.svg" alt="Logo" class="h-8 mr-3">
        Commeownity
    </div>
    <div class="flex justify-center items-center h-10">
        <p class="italic font-bold text-xl bg-[#E7AB39] px-4 py-1 rounded-3xl">
            ADMIN
        </p>
    </div>
    <!-- Searchbar Start -->
    <div class="px-6 mt-4">
        <form action="/search" method="GET">
            <div class="relative">
                <input
                    type="text"
                    name="query"
                    placeholder="Search..."
                    class="w-full py-2 pl-10 pr-4 rounded-3xl bg-[#FFFFFF] text-[#9F9F9F] focus:text-[#502C58] placeholder-gray-300 transition"
                >
                <span class="absolute left-3 top-2.5 text-[#9F9F9F] focus:text-[#502C58]">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </form>
    </div>
    <!-- Searchbar End -->

    <nav class="flex-1 mt-6 px-6 flex flex-col space-y-2">
        <!-- Dashboard -->
        <a href="/dashboard"
           class="flex items-center py-2 px-4 rounded hover:bg-[#774383] transition font-semibold {{ request()->is('dashboard') ? 'bg-[#774383]' : '' }}">
            <i class="fas fa-tachometer-alt mr-2"></i>
            Dashboard
        </a>

        <!-- Tables (Collapsible) -->
        <div>
            <input type="checkbox" id="sidebar-tables" class="peer hidden"/>
            <label for="sidebar-tables"
                   class="flex cursor-pointer items-center w-full py-2 px-4 font-semibold rounded hover:bg-[#774383] transition peer-checked:bg-[#774383]">
                <i class="fas fa-table mr-2"></i>
                Tables
                <i class="fas fa-chevron-down ml-auto transition-transform peer-checked:rotate-180"></i>
            </label>
            <div class="ml-8 mt-1 flex flex-col space-y-1 max-h-0 overflow-hidden transition-all duration-300 peer-checked:max-h-40">
                <a href="/tables#adoptions"
                   class="py-1 px-4 rounded hover:bg-[#774383] transition {{ request()->is('tables/adoptions') ? 'bg-[#774383] text-[#4ABDAC]' : '' }}">
                    Adoptions
                </a>
                <a href="/tables#donations"
                   class="py-1 px-4 rounded hover:bg-[#774383] transition {{ request()->is('tables/donations') ? 'bg-[#774383]' : '' }}">
                    Donations
                </a>
                <a href="/tables#applications"
                   class="py-1 px-4 rounded hover:bg-[#774383] transition {{ request()->is('tables/applications') ? 'bg-[#774383]' : '' }}">
                    Applications
                </a>
            </div>
        </div>

        <!-- Moderation (Collapsible) -->
        <div>
            <input type="checkbox" id="sidebar-moderation" class="peer hidden"/>
            <label for="sidebar-moderation"
                   class="flex cursor-pointer items-center w-full py-2 px-4 font-semibold rounded hover:bg-[#774383] transition peer-checked:bg-[#774383]">
                <i class="fas fa-gavel mr-2"></i>
                Moderation
                <i class="fas fa-chevron-down ml-auto transition-transform peer-checked:rotate-180"></i>
            </label>
            <div class="ml-8 mt-1 flex flex-col space-y-1 max-h-0 overflow-hidden transition-all duration-300 peer-checked:max-h-20">
                <a href="/moderation#reports"
                   class="py-1 px-4 rounded hover:bg-[#774383] transition {{ request()->is('moderation/reports') ? 'bg-[#774383]' : '' }}">
                    Reports
                </a>
                <a href="/moderation#posts"
                   class="py-1 px-4 rounded hover:bg-[#774383] transition {{ request()->is('moderation/posts') ? 'bg-[#774383]' : '' }}">
                    Posts
                </a>
            </div>
        </div>

        <!-- Update (Collapsible) -->
        <div>
            <input type="checkbox" id="sidebar-update" class="peer hidden"/>
            <label for="sidebar-update"
                   class="flex cursor-pointer items-center w-full py-2 px-4 font-semibold rounded hover:bg-[#774383] transition peer-checked:bg-[#774383]">
                <i class="fas fa-sync-alt mr-2"></i>
                Update
                <i class="fas fa-chevron-down ml-auto transition-transform peer-checked:rotate-180"></i>
            </label>
            <div class="ml-8 mt-1 flex flex-col space-y-1 max-h-0 overflow-hidden transition-all duration-300 peer-checked:max-h-28">
                <a href="/update#announcements"
                   class="py-1 px-4 rounded hover:bg-[#774383] transition {{ request()->is('update/announcements') ? 'bg-[#774383]' : '' }}">
                    Announcements
                </a>
                <a href="/update#gallery"
                   class="py-1 px-4 rounded hover:bg-[#774383] transition {{ request()->is('update/gallery') ? 'bg-[#774383]' : '' }}">
                    Gallery
                </a>
                <a href="/update#educational"
                   class="py-1 px-4 rounded hover:bg-[#774383] transition {{ request()->is('update/educational') ? 'bg-[#774383]' : '' }}">
                    Educational
                </a>
            </div>
        </div>
    </nav>

    <div class="mt-auto p-6">
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="w-full text-left py-2 px-4 rounded hover:bg-[#E7AB39] hover:text-[#502C58] font-bold transition">
                <i class="fas fa-sign-out-alt mr-2"></i> Log Out
            </button>
        </form>
    </div>
</aside>