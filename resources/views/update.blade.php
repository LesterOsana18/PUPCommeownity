<x-admin-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl font-bold text-[#502C58]">Update</h1>
    </div>
    <div class="flex flex-col gap-5">
        <!--Announcements-->
        <div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6" id="announcements">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Announcements</h1>
            <div class="overflow-x-auto w-full">
                <table class="table-fixed min-w-full border border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[120px]">ID No.</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[160px] whitespace-nowrap">Date Posted</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 min-w-[300px]">Title</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[130px] whitespace-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500 text-center">1</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap" contenteditable="true">May 14, 2025</td>
                            <td class="px-4 py-2 border border-gray-500 min-w-[300px]" contenteditable="true">Announcement Title</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                                        <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                                        Read
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500 text-center">2</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap" contenteditable="true">May 13, 2025</td>
                            <td class="px-4 py-2 border border-gray-500 min-w-[300px]" contenteditable="true">Announcement Title</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                                        <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                                        Read
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500 text-center">3</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap" contenteditable="true">May 12, 2025</td>
                            <td class="px-4 py-2 border border-gray-500 min-w-[300px]" contenteditable="true">Announcement Title</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                                        <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                                        Read
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--Gallery-->
        <div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6" id="gallery">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Gallery</h1>
            <div class="flex items-center justify-center gap-4">
                <button class="bg-[#E7AB39] px-4 py-2 rounded-full font-bold hover:bg-[#cc8e19]">
                    <i class="fa-solid fa-angle-left"></i></button>
                <div class="flex flex-wrap justify-center items-center gap-5">
                    <div class="w-64 aspect-square">
                        <img src="images/carousel-temp-1.jpg" alt="Cat 1" class="w-full h-full object-cover rounded-[15px]">
                    </div>
                    <div class="w-64 aspect-square">
                        <img src="images/carousel-temp-2.png" alt="Cat 2" class="w-full h-full object-cover rounded-[15px]">
                    </div>
                    <div class="w-64 aspect-square">
                        <img src="images/carousel-temp-3.png" alt="Cat 3" class="w-full h-full object-cover rounded-[15px]">
                    </div>
                </div>
                <button class="bg-[#E7AB39] px-4 py-2 rounded-full font-bold hover:bg-[#cc8e19]">
                    <i class="fa-solid fa-angle-right"></i></button>
            </div>
            <button class="text-sm text-center m-auto rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                See Gallery
            </button>
        </div>
        <!--Educational-->
        <div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6" id="educational">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Educational</h1>
            <div class="overflow-x-auto w-full">
                <table class="table-fixed min-w-full border border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[120px]">ID No.</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[160px] whitespace-nowrap">Date Posted</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 min-w-[300px]">Title</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[130px] whitespace-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500 text-center">1</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap" contenteditable="true">May 14, 2025</td>
                            <td class="px-4 py-2 border border-gray-500 min-w-[300px]" contenteditable="true">Title</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                                        <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                                        Read
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500 text-center">2</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap" contenteditable="true">May 13, 2025</td>
                            <td class="px-4 py-2 border border-gray-500 min-w-[300px]" contenteditable="true">Title</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                                        <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                                        Read
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500 text-center">3</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap" contenteditable="true">May 12, 2025</td>
                            <td class="px-4 py-2 border border-gray-500 min-w-[300px]" contenteditable="true">Title</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                                        <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                                        Read
                                    </button>
                                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                        <i class="fa-regular fa-trash-can mr-2"></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>