<x-admin-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl text-[#502C58]">
            Update <b> / Create Event</b>
        </h1>
    </div>

    {{-- Button Row --}}
    <div class="flex gap-2 mb-4">
        <a href="/update" class="flex items-center rounded-lg px-3 py-2 bg-[#502C58] text-white text-sm font-semibold hover:bg-[#2e1a33]">
            <i class="fa-solid fa-arrow-left mr-2"></i>
            Cancel
        </a>
        <button type="submit" form="create-form" class="rounded-lg px-3 py-2 bg-[#4ABDAC] text-white text-sm font-semibold hover:bg-[#3da6a0] flex items-center">
            <i class="fa-regular fa-floppy-disk mr-2"></i>
            Save Event
        </button>
    </div>

    {{-- Create Form --}}
    <form id="create-form" method="POST" action="{{ route('update.events.store') }}" enctype="multipart/form-data" class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200">
        @csrf

        <div class="flex flex-col gap-2 text-sm">
            <p class="font-bold text-lg">Event Name</p>
            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="rounded-lg bg-[#F1EAEA] p-2"
                placeholder="Enter event name"
                required
            >
        </div>

        <div class="flex flex-col justify-center text-sm lg:flex-row lg:items-center lg:gap-20 gap-2">
            <div class="flex items-center gap-2">
                <p class="font-bold">Status:</p>
                <button
                    class="status-toggle rounded-lg w-28 py-1 font-semibold text-white bg-[#4ABDAC] hover:bg-[#E7AB39]"
                    data-open-text="CURRENT"
                    data-closed-text="PAST"
                    data-open-class="bg-[#4ABDAC]"
                    data-closed-class="bg-[#815F20]"
                    type="button"
                >CURRENT</button>
                <input type="hidden" name="status" id="status-input" value="CURRENT">
            </div>
            <div class="flex items-center gap-2">
                <p class="font-bold">Date & Time Posted:</p>
                <input
                    type="datetime-local"
                    name="created_at"
                    value="{{ now()->format('Y-m-d\TH:i') }}"
                    class="rounded-lg bg-[#F1EAEA] p-2"
                    readonly
                >
            </div>
            <div class="flex items-center gap-2">
                <p class="font-bold">Event No.:</p>
                <input
                    type="text"
                    value="Auto-generated"
                    class="rounded-lg bg-[#F1EAEA] p-2"
                    readonly
                >
            </div>
        </div>

        <div class="flex items-center justify-center">
            <div class="w-lg aspect-[3/2] relative group flex flex-col gap-2 text-sm">
                <label class="font-bold text-lg" for="image_path">Event Image</label>
                <input type="file" name="image_path" accept="image/*" class="bg-[#F1EAEA] p-2 rounded-lg" onchange="previewSelectedImage(event)">
                <img id="preview-image" src="#" class="w-full h-auto rounded-[15px] max-h-64 object-cover hidden" alt="Preview Image">
            </div>
        </div>

        <div class="flex flex-col gap-2 text-sm">
            <p class="font-bold text-lg">Event Details</p>
            <div class="flex flex-col gap-4 lg:flex-row lg:justify-center">
                <div class="flex items-center gap-2">
                    <p class="font-bold text-sm">Target Volunteers:</p>
                    <input
                        type="number"
                        name="target_volunteers"
                        value="{{ old('target_volunteers') }}"
                        class="rounded-lg bg-[#F1EAEA] p-2"
                        placeholder="e.g. 20"
                        required
                    >
                </div>
                <div class="flex items-center gap-2">
                    <p class="font-bold text-sm">Current Volunteers:</p>
                    <input
                        type="number"
                        name="current_volunteers"
                        value="{{ old('current_volunteers', 0) }}"
                        class="rounded-lg bg-[#F1EAEA] p-2"
                        readonly
                    >
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <p class="font-bold text-sm">Date:</p>
                <input
                    type="date"
                    name="date"
                    value="{{ old('date') }}"
                    class="rounded-lg bg-[#F1EAEA] p-2"
                    required
                >
            </div>
            <div class="flex flex-col gap-2">
                <p class="font-bold text-sm">Time:</p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="grid grid-cols-2 items-center">
                        <p class="font-bold text-sm">Start Time:</p>
                        <input
                            type="time"
                            name="time_start"
                            value="{{ old('time_start') }}"
                            class="rounded-lg bg-[#F1EAEA] p-2 w-full"
                            required
                        >
                    </div>
                    <div class="grid grid-cols-2 items-center">
                        <p class="font-bold text-sm">End Time:</p>
                        <input
                            type="time"
                            name="time_end"
                            value="{{ old('time_end') }}"
                            class="rounded-lg bg-[#F1EAEA] p-2 w-full"
                            required
                        >
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <p class="font-bold text-sm">Location:</p>
                <input
                    type="text"
                    name="location"
                    value="{{ old('location') }}"
                    class="rounded-lg bg-[#F1EAEA] p-2"
                    placeholder="Enter location"
                    required
                >
            </div>
            <div class="flex flex-col gap-2">
                <p class="font-bold text-sm">Description:</p>
                <textarea
                    name="description"
                    rows="5"
                    class="rounded-lg bg-[#F1EAEA] p-2"
                    placeholder="Enter event description"
                    required
                >{{ old('description') }}</textarea>
            </div>
        </div>
    </form>
</x-admin-layout>

<script>
    function previewSelectedImage(event) {
        const reader = new FileReader();
        const preview = document.getElementById('preview-image');

        reader.onload = function () {
            preview.src = reader.result;
            preview.classList.remove('hidden');
        };

        if (event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        const statusToggle = document.querySelector('.status-toggle');
        const statusInput = document.getElementById('status-input');

        statusToggle.addEventListener('click', function () {
            const openText = statusToggle.getAttribute('data-open-text');
            const closedText = statusToggle.getAttribute('data-closed-text');
            const openClass = statusToggle.getAttribute('data-open-class');
            const closedClass = statusToggle.getAttribute('data-closed-class');

            if (statusToggle.textContent.trim() === openText) {
                statusToggle.textContent = closedText;
                statusToggle.classList.remove(openClass);
                statusToggle.classList.add(closedClass);
                statusInput.value = closedText;
            } else {
                statusToggle.textContent = openText;
                statusToggle.classList.remove(closedClass);
                statusToggle.classList.add(openClass);
                statusInput.value = openText;
            }
        });
    });
</script>