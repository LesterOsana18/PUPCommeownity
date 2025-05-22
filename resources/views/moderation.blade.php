<x-admin-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl font-bold text-[#502C58]">Moderation</h1>
    </div>
    <div class="flex flex-col gap-5">
        <!--Reports-->
        <div class="flex flex-col gap-5 rounded-xl text-[#502C58] bg-white/10 backdrop-blur-lg shadow-md p-6" id="reports">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Reports</h1>
            <div class="overflow-x-auto w-full">
                <table class="table-fixed min-w-full border border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[120px]">Status</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[160px] whitespace-nowrap">Date Reported</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 min-w-[300px]">Subject</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[130px] whitespace-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500 text-center">
                                <button
                                class="status-toggle rounded-lg w-32 py-2 font-semibold text-white bg-[#4ABDAC] hover:bg-[#E7AB39]"
                                data-open-text="OPEN"
                                data-closed-text="CLOSED"
                                data-open-class="bg-[#4ABDAC]"
                                data-closed-class="bg-[#815F20]"
                                >OPEN</button>
                            </td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap" contenteditable="true">May 14, 2025</td>
                            <td class="px-4 py-2 border border-gray-500 min-w-[300px]" contenteditable="true">Subject</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                                        <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                                        Read
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500 text-center">
                                <button
                                class="status-toggle rounded-lg w-32 py-2 font-semibold text-white bg-[#4ABDAC] hover:bg-[#E7AB39]"
                                data-open-text="OPEN"
                                data-closed-text="CLOSED"
                                data-open-class="bg-[#4ABDAC]"
                                data-closed-class="bg-[#815F20]"
                                >OPEN</button>
                            </td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap" contenteditable="true">May 13, 2025</td>
                            <td class="px-4 py-2 border border-gray-500 min-w-[300px]" contenteditable="true">Subject</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                                        <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                                        Read
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500 text-center">
                                <button
                                class="status-toggle rounded-lg w-32 py-2 font-semibold text-white bg-[#4ABDAC] hover:bg-[#E7AB39]"
                                data-open-text="OPEN"
                                data-closed-text="CLOSED"
                                data-open-class="bg-[#4ABDAC]"
                                data-closed-class="bg-[#815F20]"
                                >OPEN</button>
                            </td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap" contenteditable="true">May 15, 2025</td>
                            <td class="px-4 py-2 border border-gray-500 min-w-[300px]" contenteditable="true">Subject</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                                        <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                                        Read
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--Posts-->
        <div class="flex flex-col gap-5 rounded-xl text-[#502C58] bg-white/10 backdrop-blur-lg shadow-md p-6" id="posts">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Posts</h1>
            <div class="overflow-x-auto w-full">
                <table class="table-fixed min-w-full border border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[120px]">Status</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[160px] whitespace-nowrap">Date Posted</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 min-w-[300px]">Subject</th>
                            <th class="bg-[#E7AB39] font-bold px-4 py-2 border border-gray-500 w-[130px] whitespace-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500 text-center">
                                <button
                                class="status-toggle rounded-lg w-32 py-2 font-semibold text-white bg-[#4ABDAC] hover:bg-[#E7AB39]"
                                data-open-text="OPEN"
                                data-closed-text="BLOCKED"
                                data-open-class="bg-[#4ABDAC]"
                                data-closed-class="bg-[#815F20]"
                                >OPEN</button>
                            </td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap" contenteditable="true">May 14, 2025</td>
                            <td class="px-4 py-2 border border-gray-500 min-w-[300px]" contenteditable="true">Subject</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                                        <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                                        Read
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500 text-center">
                                <button
                                class="status-toggle rounded-lg w-32 py-2 font-semibold text-white bg-[#4ABDAC] hover:bg-[#E7AB39]"
                                data-open-text="OPEN"
                                data-closed-text="BLOCKED"
                                data-open-class="bg-[#4ABDAC]"
                                data-closed-class="bg-[#815F20]"
                                >OPEN</button>
                            </td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap" contenteditable="true">May 13, 2025</td>
                            <td class="px-4 py-2 border border-gray-500 min-w-[300px]" contenteditable="true">Subject</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                                        <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                                        Read
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-500 text-center">
                                <button
                                class="status-toggle rounded-lg w-32 py-2 font-semibold text-white bg-[#4ABDAC] hover:bg-[#E7AB39]"
                                data-open-text="OPEN"
                                data-closed-text="BLOCKED"
                                data-open-class="bg-[#4ABDAC]"
                                data-closed-class="bg-[#815F20]"
                                >OPEN</button>
                            </td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap" contenteditable="true">May 15, 2025</td>
                            <td class="px-4 py-2 border border-gray-500 min-w-[300px]" contenteditable="true">Subject</td>
                            <td class="px-4 py-2 border border-gray-500 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <button class="rounded-lg px-3 py-2 bg-[#502C58] text-white font-semibold hover:bg-[#2e1a33] flex items-center">
                                        <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                                        Read
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