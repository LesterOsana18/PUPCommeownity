<x-admin-layout>
    <h1 class="text-3xl font-bold text-[#502C58] mb-6">Moderation</h1>
    <div class="flex flex-col gap-5">
        <div class="flex flex-col gap-5 rounded-[15px] text-[#502C58] bg-white shadow-md p-6" id="announcements">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Announcements</h1>
            <div class="overflow-x-auto w-full">
                <table class="table-fixed min-w-full border border-[#502C58] border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58] w-[120px]">ID No.</th>
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58] w-[160px] whitespace-nowrap">Date Posted</th>
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58] min-w-[300px]">Title</th>
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58] w-[130px] whitespace-nowrap">Action</th>
                        </tr>
                    </thead>
                    {{-- <div>Dynamic Data
                                @foreach($adoptions as $adoption)
                                <tr>
                                    <td class="px-4 py-2 border border-[#502C58]" contenteditable="true">{{ $adoption->attribute1 }}</td>
                                    <td class="px-4 py-2 border border-[#502C58]" contenteditable="true">{{ $adoption->attribute2 }}</td>
                                    <td class="px-4 py-2 border border-[#502C58]" contenteditable="true">{{ $adoption->attribute3 }}</td>
                                </tr>
                                @endforeach
                            </div> --}}
                    <!--Test: Static Data-->
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border border-[#502C58] text-center">1</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap" contenteditable="true">May 14, 2025</td>
                            <td class="px-4 py-2 border border-[#502C58] min-w-[300px]" contenteditable="true">Announcement Title</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap text-center">
                                <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold"><i class="fa-solid fa-arrow-up-right-from-square"></i> Read</button>
                                <button class="rounded-lg px-3 py-2 bg-[#FE0808] text-white font-semibold"><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-[#502C58] text-center">2</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap" contenteditable="true">May 13, 2025</td>
                            <td class="px-4 py-2 border border-[#502C58] min-w-[300px]" contenteditable="true">Announcement Title</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap text-center">
                                <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold"><i class="fa-solid fa-arrow-up-right-from-square"></i> Read</button>
                                <button class="rounded-lg px-3 py-2 bg-[#FE0808] text-white font-semibold"><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-[#502C58] text-center">3</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap" contenteditable="true">May 12, 2025</td>
                            <td class="px-4 py-2 border border-[#502C58] min-w-[300px]" contenteditable="true">Announcement Title</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap text-center">
                                <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold"><i class="fa-solid fa-arrow-up-right-from-square"></i> Read</button>
                                <button class="rounded-lg px-3 py-2 bg-[#FE0808] text-white font-semibold"><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="flex flex-col gap-5 rounded-[15px] text-[#502C58] bg-white shadow-md p-6" id="gallery">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Gallery</h1>
            <div class="flex items-center justify-center gap-4">
                <button class="bg-[#E7AB39] px-4 py-2 rounded-full font-bold"><i class="fa-solid fa-angle-left"></i></button>
                <div class="flex flex-wrap gap-5">
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
                <button class="bg-[#E7AB39] px-4 py-2 rounded-full font-bold"><i class="fa-solid fa-angle-right"></i></button>
            </div>
            <button class="w-48 text-center m-auto rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold"><i class="fa-solid fa-arrow-up-right-from-square"></i> See Gallery</button>
        </div>
        <div class="flex flex-col gap-5 rounded-[15px] text-[#502C58] bg-white shadow-md p-6" id="educational">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Educational</h1>
            <div class="overflow-x-auto w-full">
                <table class="table-fixed min-w-full border border-[#502C58] border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58] w-[120px]">ID No.</th>
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58] w-[160px] whitespace-nowrap">Date Posted</th>
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58] min-w-[300px]">Title</th>
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58] w-[130px] whitespace-nowrap">Action</th>
                        </tr>
                    </thead>
                    {{-- <div>Dynamic Data
                                @foreach($adoptions as $adoption)
                                <tr>
                                    <td class="px-4 py-2 border border-[#502C58]" contenteditable="true">{{ $adoption->attribute1 }}</td>
                                    <td class="px-4 py-2 border border-[#502C58]" contenteditable="true">{{ $adoption->attribute2 }}</td>
                                    <td class="px-4 py-2 border border-[#502C58]" contenteditable="true">{{ $adoption->attribute3 }}</td>
                                </tr>
                                @endforeach
                            </div> --}}
                    <!--Test: Static Data-->
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border border-[#502C58] text-center">1</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap" contenteditable="true">May 14, 2025</td>
                            <td class="px-4 py-2 border border-[#502C58] min-w-[300px]" contenteditable="true">Title</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap text-center">
                                <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold"><i class="fa-solid fa-arrow-up-right-from-square"></i> Read</button>
                                <button class="rounded-lg px-3 py-2 bg-[#FE0808] text-white font-semibold"><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-[#502C58] text-center">2</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap" contenteditable="true">May 13, 2025</td>
                            <td class="px-4 py-2 border border-[#502C58] min-w-[300px]" contenteditable="true">Title</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap text-center">
                                <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold"><i class="fa-solid fa-arrow-up-right-from-square"></i> Read</button>
                                <button class="rounded-lg px-3 py-2 bg-[#FE0808] text-white font-semibold"><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-[#502C58] text-center">3</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap" contenteditable="true">May 12, 2025</td>
                            <td class="px-4 py-2 border border-[#502C58] min-w-[300px]" contenteditable="true">Title</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap text-center">
                                <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold"><i class="fa-solid fa-arrow-up-right-from-square"></i> Read</button>
                                <button class="rounded-lg px-3 py-2 bg-[#FE0808] text-white font-semibold"><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</x-admin-layout>