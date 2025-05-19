<x-admin-layout>
    <h1 class="text-3xl font-bold text-[#502C58] mb-6">Moderation</h1>
    <div class="flex flex-col gap-5">
        <div class="flex flex-col gap-5 rounded-[15px] text-[#502C58] bg-white shadow-md p-6" id="reports">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Reports</h1>
            <div class="overflow-x-auto w-full">
                <table class="table-fixed min-w-full border border-[#502C58] border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58] w-[120px]">Status</th>
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58] w-[160px] whitespace-nowrap">Date Reported</th>
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58] min-w-[300px]">Subject</th>
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58] w-[130px] whitespace-nowrap">Action</th>
                        </tr>
                    </thead>
                    {{-- <div>Dynamic Data
                                @foreach($adoptions as $adoption)
                                <tr>
                                    <td class="px-4 py-2 border border-[#502C58]">{{ $adoption->attribute1 }}</td>
                                    <td class="px-4 py-2 border border-[#502C58]" contenteditable="true">{{ $adoption->attribute2 }}</td>
                                    <td class="px-4 py-2 border border-[#502C58]" contenteditable="true">{{ $adoption->attribute3 }}</td>
                                </tr>
                                @endforeach
                            </div> --}}
                    <!--Test: Static Data-->
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border border-[#502C58] text-center">
                                <button
                                class="status-toggle rounded-lg w-32 py-2 font-semibold text-white bg-[#4ABDAC]"
                                data-open-text="OPEN"
                                data-closed-text="CLOSED"
                                data-open-class="bg-[#4ABDAC]"
                                data-closed-class="bg-[#815F20]"
                                >OPEN</button>
                            </td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap" contenteditable="true">May 14, 2025</td>
                            <td class="px-4 py-2 border border-[#502C58] min-w-[300px]" contenteditable="true">Subject</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap text-center"><button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold"><i class="fa-solid fa-arrow-up-right-from-square"></i> Read</button></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-[#502C58] text-center">
                                <button
                                class="status-toggle rounded-lg w-32 py-2 font-semibold text-white bg-[#4ABDAC]"
                                data-open-text="OPEN"
                                data-closed-text="CLOSED"
                                data-open-class="bg-[#4ABDAC]"
                                data-closed-class="bg-[#815F20]"
                                >OPEN</button>
                            </td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap" contenteditable="true">May 13, 2025</td>
                            <td class="px-4 py-2 border border-[#502C58] min-w-[300px]" contenteditable="true">Subject</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap text-center"><button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold"><i class="fa-solid fa-arrow-up-right-from-square"></i> Read</button></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-[#502C58] text-center">
                                <button
                                class="status-toggle rounded-lg w-32 py-2 font-semibold text-white bg-[#4ABDAC]"
                                data-open-text="OPEN"
                                data-closed-text="CLOSED"
                                data-open-class="bg-[#4ABDAC]"
                                data-closed-class="bg-[#815F20]"
                                >OPEN</button>
                            </td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap" contenteditable="true">May 15, 2025</td>
                            <td class="px-4 py-2 border border-[#502C58] min-w-[300px]" contenteditable="true">Subject</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap text-center"><button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold"><i class="fa-solid fa-arrow-up-right-from-square"></i> Read</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="flex flex-col gap-5 rounded-[15px] text-[#502C58] bg-white shadow-md p-6" id="posts">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Posts</h1>
            <div class="overflow-x-auto w-full">
                <table class="table-fixed min-w-full border border-[#502C58] border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58] w-[120px]">Status</th>
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58] w-[160px] whitespace-nowrap">Date Posted</th>
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58] min-w-[300px]">Subject</th>
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58] w-[130px] whitespace-nowrap">Action</th>
                        </tr>
                    </thead>
                    {{-- <div>Dynamic Data
                                @foreach($adoptions as $adoption)
                                <tr>
                                    <td class="px-4 py-2 border border-[#502C58]">{{ $adoption->attribute1 }}</td>
                                    <td class="px-4 py-2 border border-[#502C58]" contenteditable="true">{{ $adoption->attribute2 }}</td>
                                    <td class="px-4 py-2 border border-[#502C58]" contenteditable="true">{{ $adoption->attribute3 }}</td>
                                </tr>
                                @endforeach
                            </div> --}}
                    <!--Test: Static Data-->
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border border-[#502C58] text-center">
                                <button
                                class="status-toggle rounded-lg w-32 py-2 font-semibold text-white bg-[#4ABDAC]"
                                data-open-text="OPEN"
                                data-closed-text="CLOSED"
                                data-open-class="bg-[#4ABDAC]"
                                data-closed-class="bg-[#815F20]"
                                >OPEN</button>
                            </td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap" contenteditable="true">May 14, 2025</td>
                            <td class="px-4 py-2 border border-[#502C58] min-w-[300px]" contenteditable="true">Subject</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap text-center"><button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold"><i class="fa-solid fa-arrow-up-right-from-square"></i> Read</button></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-[#502C58] text-center">
                                <button
                                class="status-toggle rounded-lg w-32 py-2 font-semibold text-white bg-[#4ABDAC]"
                                data-open-text="OPEN"
                                data-closed-text="CLOSED"
                                data-open-class="bg-[#4ABDAC]"
                                data-closed-class="bg-[#815F20]"
                                >OPEN</button>
                            </td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap" contenteditable="true">May 13, 2025</td>
                            <td class="px-4 py-2 border border-[#502C58] min-w-[300px]" contenteditable="true">Subject</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap text-center"><button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold"><i class="fa-solid fa-arrow-up-right-from-square"></i> Read</button></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-[#502C58] text-center">
                                <button
                                class="status-toggle rounded-lg w-32 py-2 font-semibold text-white bg-[#4ABDAC]"
                                data-open-text="OPEN"
                                data-closed-text="CLOSED"
                                data-open-class="bg-[#4ABDAC]"
                                data-closed-class="bg-[#815F20]"
                                >OPEN</button>
                            </td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap" contenteditable="true">May 15, 2025</td>
                            <td class="px-4 py-2 border border-[#502C58] min-w-[300px]" contenteditable="true">Subject</td>
                            <td class="px-4 py-2 border border-[#502C58] whitespace-nowrap text-center"><button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold"><i class="fa-solid fa-arrow-up-right-from-square"></i> Read</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.status-toggle').forEach(function(btn) {
            btn.addEventListener('click', function() {
                const openText = btn.getAttribute('data-open-text');
                const closedText = btn.getAttribute('data-closed-text');
                const openClass = btn.getAttribute('data-open-class');
                const closedClass = btn.getAttribute('data-closed-class');
                if (btn.textContent.trim() === openText) {
                    btn.textContent = closedText;
                    btn.classList.remove(openClass);
                    btn.classList.add(closedClass);
                } else {
                    btn.textContent = openText;
                    btn.classList.remove(closedClass);
                    btn.classList.add(openClass);
                }
            });
        });
    });
</script>