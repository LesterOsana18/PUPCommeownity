<div id="events-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 px-4">
    <div class="bg-white rounded-2xl shadow-xl p-6 w-full max-w-5xl max-h-[90vh] overflow-y-auto relative">
        <!-- Close Button -->
        <button onclick="toggleModal('events-modal')"
            class="absolute top-4 right-4 text-gray-500 hover:text-black text-2xl leading-none focus:outline-none">
            &times;
        </button>

        <!-- Modal Header -->
        <div class="mb-6 flex flex-col md:flex-row md:items-center gap-6">
            <div class="w-full md:w-1/3 flex-shrink-0">
                <img id="event-modal-image" src="" alt="" class="w-full h-48 object-cover rounded-xl shadow">
            </div>
            <div class="w-full md:w-2/3">
                <h2 id="event-modal-title" class="text-3xl font-extrabold text-[#502C58] mb-2"></h2>
                <div class="flex flex-col sm:flex-row gap-2 text-gray-600 text-base">
                    <span class="flex items-center gap-1">
                        <svg class="w-5 h-5 text-[#E7AB39]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span id="event-modal-date"></span>
                    </span>
                    <span class="flex items-center gap-1">
                        <svg class="w-5 h-5 text-[#E7AB39]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span id="event-modal-time"></span>
                    </span>
                    <span class="flex items-center gap-1">
                        <svg class="w-5 h-5 text-[#E7AB39]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12.414a2 2 0 10-2.828 0l-4.243 4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span id="event-modal-location"></span>
                    </span>
                </div>
                <div class="mt-5 flex flex-col items-center w-full">
                    <div class="flex justify-center gap-x-4 mb-1 text-sm">
                        <span class="font-semibold text-[#502C58]">
                            Volunteers: <span id="event-modal-current" class="font-bold"></span>
                        </span>
                        <span class="font-semibold text-[#502C58]">
                            Target: <span id="event-modal-target" class="font-bold"></span>
                        </span>
                    </div>
                    <div class="w-4/5 bg-gray-200 rounded-full h-4">
                        <div id="event-modal-progress" class="bg-[#502C58] h-4 rounded-full transition-all duration-500" style="width:0%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Content -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-[#502C58] mb-1">Event Details</h3>
            <p id="event-modal-description" class="text-gray-700"></p>
        </div>
        <div class="flex justify-end">
            <a href="/register"
                class="px-6 py-2 bg-[#502C58] text-white font-semibold rounded-lg shadow hover:bg-[#3f2247] transition-colors">
                Volunteer Now
            </a>
        </div>
    </div>
</div>