<x-admin-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl text-[#502C58]">
            Moderation
            <b> / Post</b>
        </h1>
    </div>
    <div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200">
        <div class="flex gap-2">
            <a href="/moderation" class="flex items-center rounded-lg px-3 py-2 bg-[#502C58] text-white text-sm font-semibold hover:bg-[#2e1a33]">
                <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                Go Back
            </a>
            <button class="rounded-lg px-3 py-2 bg-blue-500 text-white text-sm font-semibold hover:bg-blue-600 flex items-center" id="edit-button" type="button">
                <i class="fa-regular fa-pen-to-square mr-2"></i>
                Edit
            </button>
        </div>
        <div class="flex flex-col gap-2 text-sm">
            <p class="font-bold text-lg">Subject</p>
            <input
            type="text"
            id=""
            name="post-subject"
            value="Lorem ipsum dolor sit amet consectetur adipiscing elit."
            class="flex rounded-lg bg-[#F1EAEA] p-2"
            contenteditable="false"
            disabled
            >
        </div>
        <div class="flex flex-col justify-between text-sm lg:flex-row lg:items-center lg:gap-20 gap-2">
            <div class="flex items-center gap-2">
                <p class="font-bold">Status:</p>
                <button
                class="status-toggle rounded-lg w-28 py-1 font-semibold text-white bg-[#4ABDAC] hover:bg-[#E7AB39]"
                data-open-text="OPEN"
                data-closed-text="BLOCKED"
                data-open-class="bg-[#4ABDAC]"
                data-closed-class="bg-[#815F20]"
                >OPEN</button>
            </div>
            <div class="flex items-center gap-2">
                <p class="font-bold">Date & Time Posted:</p>
                <input
                type="datetime-local"
                id=""
                name="date-and-time"
                value="2025-04-30T08:00"
                class="rounded-lg bg-[#F1EAEA] p-2"
                contenteditable="false"
                disabled
                >
            </div>
            <div class="flex items-center gap-2">
                <p class="font-bold">Post No.:</p>
                <input
                type="number"
                id=""
                name="post-no"
                value="1"
                class="rounded-lg bg-[#F1EAEA] p-2"
                contenteditable="false"
                disabled
                >
            </div>
        </div>
        <div class="flex items-center justify-center">
            <div class="w-lg aspect-[3/2] relative group">
                <label for="image-upload" class="block w-full h-full relative">
                    <img
                        src="images/carousel-temp-1.jpg"
                        alt="Cat 1"
                        class="w-full h-full object-cover rounded-[15px] cursor-pointer"
                    >
                    <input
                        type="file"
                        id=""
                        name="image"
                        accept="image/*"
                        class="hidden"
                    >
                    <div class="absolute inset-0 flex items-center justify-center bg-black/50 rounded-[15px] opacity-0 group-hover:opacity-100 transition-opacity">
                        <p class="text-white font-semibold">Upload Picture</p>
                    </div>
                </label>
            </div>
        </div>
        <div class="flex flex-col gap-2 text-sm">
            <p class="font-bold text-lg">Body Content</p>
            <textarea
                id=""
                name="body-content"
                rows="5"
                class="rounded-lg bg-[#F1EAEA] p-2"
                contenteditable="false"
                disabled
            >Lorem ipsum dolor sit amet consectetur adipiscing elit. Ex sapien vitae pellentesque sem placerat in id. Pretium tellus duis convallis tempus leo eu aenean. Urna tempor pulvinar vivamus fringilla lacus nec metus. Iaculis massa nisl malesuada lacinia integer nunc posuere. Semper vel class aptent taciti sociosqu ad litora. Conubia nostra inceptos himenaeos orci varius natoque penatibus. Dis parturient montes nascetur ridiculus mus donec rhoncus. Nulla molestie mattis scelerisque maximus eget fermentum odio. Purus est efficitur laoreet mauris pharetra vestibulum fusce.</textarea>
        </div>
        <div class="flex flex-col gap-2 text-sm">
            <p class="font-bold text-lg">Poster's Details</p>
            <div class="flex flex-row items-center gap-2">
                <p class="font-bold">Posted By:</p>
                <input
                type="text"
                id=""
                name="posted-by"
                value="Paula Sanchez"
                class="rounded-lg bg-[#F1EAEA] p-2 w-64"
                contenteditable="false"
                disabled
                >
            </div>
            <div class="flex flex-row items-center gap-2">
                <p class="font-bold">Email Address:</p>
                <input
                type="email"
                id=""
                name="email-address"
                value="paulasanchez@gmail.com"
                class="rounded-lg bg-[#F1EAEA] p-2 w-64"
                contenteditable="false"
                disabled
                >
            </div>
        </div>
        <div class="flex justify-end">
            <button
                type="submit"
                class="flex items-center justify-center rounded-lg px-3 py-2 bg-[#502C58] text-white text-sm font-semibold hover:bg-[#2e1a33]"
                formaction=""
            >
            <i class="fa-regular fa-floppy-disk mr-2"></i>
            Save
            </button>
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
    document.getElementById('edit-button').addEventListener('click', function () {
        const editButton = document.getElementById('edit-button');
        if (editButton.classList.contains('bg-blue-500')) {
            editButton.classList.remove('bg-blue-500', 'hover:bg-blue-600');
            editButton.classList.add('bg-[#4ABDAC]', 'hover:bg-[#4ABDAC]');
        } else {
            editButton.classList.remove('bg-[#4ABDAC]', 'hover:bg-[#4ABDAC]');
            editButton.classList.add('bg-blue-500', 'hover:bg-blue-600');
        }
        document.querySelectorAll('input, textarea').forEach(function (field) {
            field.removeAttribute('disabled');
            field.setAttribute('contenteditable', 'true');
        });
    });
</script>