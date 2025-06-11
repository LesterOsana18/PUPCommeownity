<x-admin-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl text-[#502C58]">
            Update <b> / Create Announcement</b>
        </h1>
    </div>

    <form action="{{ route('update.announcements.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-6 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200">
        @csrf

        <div class="flex gap-2">
            <a href="{{ url('/update') }}" class="flex items-center rounded-lg px-3 py-2 bg-[#502C58] text-white text-sm font-semibold hover:bg-[#2e1a33]">
                <i class="fa-solid fa-arrow-left mr-2"></i>
                Cancel
            </a>
            <button type="submit" class="rounded-lg px-3 py-2 bg-[#4ABDAC] text-white text-sm font-semibold hover:bg-[#3da6a0] flex items-center">
                <i class="fa-regular fa-floppy-disk mr-2"></i>
                Save Announcement
            </button>
        </div>

        <div class="flex flex-col gap-2 text-sm">
            <label for="title" class="font-bold text-lg">Title</label>
            <input
                type="text"
                name="title"
                id="title"
                class="flex rounded-lg bg-[#F1EAEA] p-2"
                placeholder="Enter announcement title"
                required
            >
        </div>

        <div class="flex flex-col justify-center text-sm lg:flex-row lg:items-center lg:gap-20 gap-2">
            <div class="flex items-center gap-2">
                <p class="font-bold">Date & Time:</p>
                <input
                    type="datetime-local"
                    class="rounded-lg bg-[#F1EAEA] p-2"
                    value="{{ now()->format('Y-m-d\TH:i') }}"
                    disabled
                >
            </div>
            <div class="flex items-center gap-2">
                <p class="font-bold">Auto-assigned ID:</p>
                <input
                    type="text"
                    class="rounded-lg bg-[#F1EAEA] p-2"
                    placeholder="Auto-generated"
                    disabled
                >
            </div>
        </div>

        <div class="flex items-center justify-center">
            <label for="image" class="block w-full max-w-sm aspect-[3/2] relative group cursor-pointer">
                <div
                    id="image-placeholder"
                    class="w-full h-full flex items-center justify-center bg-gray-200 text-gray-600 font-semibold text-center rounded-[15px] transition-opacity">
                    Click to upload image
                </div>

                <img
                    id="preview-image"
                    src=""
                    alt="Preview"
                    class="absolute inset-0 w-full h-full object-cover rounded-[15px] hidden"
                >

                <input
                    type="file"
                    id="image"
                    name="image"
                    accept="image/*"
                    class="hidden"
                    onchange="previewSelectedImage(event)"
                >
            </label>
        </div>

        <div class="flex flex-col gap-2 text-sm">
            <label for="content" class="font-bold text-lg">Body Content</label>
            <textarea
                name="content"
                id="content"
                rows="6"
                class="rounded-lg bg-[#F1EAEA] p-2"
                placeholder="Write the announcement body here..."
                required
            ></textarea>
        </div>
    </form>
</x-admin-layout>

<script>
    function previewSelectedImage(event) {
        const reader = new FileReader();
        const preview = document.getElementById('preview-image');
        const placeholder = document.getElementById('image-placeholder');

        reader.onload = function () {
            preview.src = reader.result;
            preview.classList.remove('hidden');
            placeholder.classList.add('hidden');
        };

        if (event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }
</script>

