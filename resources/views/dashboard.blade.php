<x-admin-layout>
    <div class="flex flex-col">
        <div class="flex items-center justify-between mb-5">
            <h1 class="text-2xl font-bold text-[#502C58]">Dashboard</h1>
        </div>
        <!-- Dashboard Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
            <div class="bg-white/10 backdrop-blur-lg rounded-lg shadow-md p-6 flex flex-col items-center">
                <i class="fas fa-users text-[#4ABDAC] text-3xl mb-3"></i>
                <div class="text-3xl text-[#502C58] font-bold">1,245</div>
                <div class="text-black mt-1">Total Users</div>
            </div>
            <div class="bg-white/10 backdrop-blur-lg rounded-lg shadow-md p-6 flex flex-col items-center">
                <i class="fas fa-paw text-[#4ABDAC] text-3xl mb-3"></i>
                <div class="text-3xl text-[#502C58] font-bold">534</div>
                <div class="text-black mt-1">Adoptions</div>
            </div>
            <div class="bg-white/10 backdrop-blur-lg rounded-lg shadow-md p-6 flex flex-col items-center">
                <i class="fas fa-donate text-[#4ABDAC] text-3xl mb-3"></i>
                <div class="text-3xl text-[#502C58] font-bold">$8,740</div>
                <div class="text-black mt-1">Donations</div>
            </div>
            <div class="bg-white/10 backdrop-blur-lg rounded-lg shadow-md p-6 flex flex-col items-center">
                <i class="fas fa-clipboard-check text-[#4ABDAC] text-3xl mb-3"></i>
                <div class="text-3xl text-[#502C58] font-bold">192</div>
                <div class="text-black mt-1">Applications</div>
            </div>
        </div>
    </div>
</x-admin-layout>