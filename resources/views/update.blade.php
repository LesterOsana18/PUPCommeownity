<x-admin-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl font-bold text-[#502C58]">Update</h1>
    </div>
    <div class="flex flex-col gap-5">
        <!--Announcements-->
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
        <!--Educational-->
        <div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="educational">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Educational</h1>
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
        <!--Gallery-->
        <div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="gallery">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Gallery</h1>
            <div class="flex justify-between">
                <div class="flex gap-2">
                    <button class="rounded-lg px-3 py-2 bg-blue-500 text-white text-sm font-semibold hover:bg-blue-600 flex items-center" id="edit-button" type="button">
                        <i class="fa-regular fa-pen-to-square mr-2"></i>
                        Edit
                    </button>
                    <button class="rounded-lg px-3 py-2 bg-red-500 text-white text-sm font-semibold hover:bg-red-600 flex items-center">
                        <i class="fa-regular fa-trash-can mr-2"></i>
                        Delete
                    </button>
                </div>
                <label for="image-upload" class="rounded-lg px-3 py-2 bg-[#E7AB39] text-white text-sm font-semibold hover:bg-[#815F20] flex items-center cursor-pointer">
                    <i class="fa-solid fa-upload mr-2"></i>
                    Upload
                </label>
                <input type="file" id="image-upload" class="hidden">
            </div>
            <div class="flex items-center gap-2">
                <p class="text-base font-bold">Images:</p>
                <button class="flex items-center rounded-lg px-3 py-2 bg-[#502C58] text-white text-sm font-semibold hover:bg-[#2e1a33]" id="select-button" type="button">
                    Select
                </button>
                <button class="flex items-center rounded-lg px-3 py-2 bg-[#502C58] text-white text-sm font-semibold hover:bg-[#2e1a33]" id="select-all-button" type="button">
                    Select All
                </button>
            </div>
            @php
                $images = collect(File::files(public_path('images')))
                    ->filter(function ($file) {
                        return in_array($file->getExtension(), ['jpg', 'png']);
                    })
                    ->map(function ($file) {
                        return $file->getFilename();
                    })
                    ->take(12);
            @endphp
            <div class="grid grid-cols-4 gap-4">
                @forelse ($images as $image)
                    <div class="aspect-[3/2] bg-gray-200 rounded-lg overflow-hidden relative">
                        <img src="{{ asset('images/' . $image) }}" alt="{{ $image }}" class="w-full h-full object-cover">
                        <!-- Checkbox initially hidden -->
                        <input type="checkbox" class="absolute top-2 left-2 w-5 h-5 hidden" />
                    </div>
                @empty
                    <p class="col-span-4 text-center text-gray-500">No images found.</p>
                @endforelse
            </div>
            <div class="flex justify-center text-sm space-x-2">
                <button class="w-8 h-8 text-white bg-[#0a9396] rounded-full hover:bg-[#0a9396]/80 font-bold">1</button>
                <button class="w-8 h-8 text-[#0a9396] bg-white rounded-full hover:bg-[#0a9396]/20">2</button>
                <button class="w-8 h-8 text-[#0a9396] bg-white rounded-full hover:bg-[#0a9396]/20">3</button>
            </div>
        </div>
    </div>
</x-admin-layout>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selectButton = document.getElementById('select-button');
        const selectAllButton = document.getElementById('select-all-button');
        const checkboxes = document.querySelectorAll('.grid input[type="checkbox"]');
        let checkboxesVisible = false;
        let selectAllState = false;

        // Toggle visibility of checkboxes when "Select" button is clicked
        selectButton.addEventListener('click', function () {
            checkboxesVisible = !checkboxesVisible;
            checkboxes.forEach(checkbox => {
                checkbox.classList.toggle('hidden', !checkboxesVisible);
            });
        });

        // Select All button functionality
        selectAllButton.addEventListener('click', function () {
            selectAllState = !selectAllState;
            if (!checkboxesVisible) {
                checkboxesVisible = true;
                checkboxes.forEach(checkbox => {
                    checkbox.classList.remove('hidden');
                });
            }
            checkboxes.forEach(checkbox => {
                checkbox.checked = selectAllState;
            });
        });
    });
</script>