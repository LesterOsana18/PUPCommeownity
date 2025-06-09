{{-- resources/views/Components/admin/update-announcements.blade.php --}}
<div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="announcements">
    <h1 class="text-xl text-[#4ABDAC] font-bold">Announcements</h1>
    <div class="overflow-x-auto w-full">
        <table class="table-fixed min-w-full border border-collapse text-sm">
            <thead>
                <tr>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[120px]">ID No.</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[160px] whitespace-nowrap">Date Posted</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 min-w-[300px]">Title</th>
                    <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[130px] whitespace-nowrap">Actions</th>
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
                                <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i> Read
                            </button>
                            <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                <i class="fa-regular fa-trash-can mr-2"></i> Delete
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
                                <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i> Read
                            </button>
                            <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                <i class="fa-regular fa-trash-can mr-2"></i> Delete
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
                                <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i> Read
                            </button>
                            <button class="rounded-lg px-3 py-2 bg-red-500 text-white font-semibold hover:bg-red-600 flex items-center">
                                <i class="fa-regular fa-trash-can mr-2"></i> Delete
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
