<x-admin-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl text-[#502C58]">
            Update
            <b> / Announcement</b>
        </h1>
    </div>

    <div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200">
        <div class="flex gap-2">
            <a href="/update" class="flex items-center rounded-lg px-3 py-2 bg-[#502C58] text-white text-sm font-semibold hover:bg-[#2e1a33]">
                <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                Go Back
            </a>
            <button class="rounded-lg px-3 py-2 bg-blue-500 text-white text-sm font-semibold hover:bg-blue-600 flex items-center" id="edit-button" type="button">
                <i class="fa-regular fa-pen-to-square mr-2"></i>
                Edit
            </button>
            <form method="POST" action="#">
                @csrf
                @method('DELETE')
                <button class="rounded-lg px-3 py-2 bg-red-500 text-white text-sm font-semibold hover:bg-red-600 flex items-center" type="submit">
                    <i class="fa-regular fa-trash-can mr-2"></i>
                    Delete
                </button>
            </form>
        </div>

        <div class="flex flex-col gap-2 text-sm">
            <p class="font-bold text-lg">Title</p>
            <input
                type="text"
                name="post-subject"
                value="{{ $announcement->title }}"
                class="flex rounded-lg bg-[#F1EAEA] p-2"
                disabled
            >
        </div>

        <div class="flex flex-col justify-center text-sm lg:flex-row lg:items-center lg:gap-20 gap-2">
            <div class="flex items-center gap-2">
                <p class="font-bold">Date & Time Posted:</p>
                <input
                    type="datetime-local"
                    name="date-and-time"
                    value="{{ $announcement->created_at->format('Y-m-d\TH:i') }}"
                    class="rounded-lg bg-[#F1EAEA] p-2"
                    disabled
                >
            </div>
            <div class="flex items-center gap-2">
                <p class="font-bold">Announcement No.:</p>
                <input
                    type="number"
                    name="announcement-no"
                    value="{{ $announcement->id }}"
                    class="rounded-lg bg-[#F1EAEA] p-2"
                    disabled
                >
            </div>
        </div>

        <div class="flex items-center justify-center">
            <div class="w-lg aspect-[3/2] relative group">
                <label class="block w-full h-full relative">
                    <img
                        src="{{ asset(str_replace('public/', '', $announcement->image_path)) }}"
                        alt="Announcement Image"
                        class="w-full h-full object-cover rounded-[15px]"
                    >
                </label>
            </div>
        </div>

        <div class="flex flex-col gap-2 text-sm">
            <p class="font-bold text-lg">Body Content</p>
            <textarea
                name="body-content"
                rows="5"
                class="rounded-lg bg-[#F1EAEA] p-2"
                disabled
            >{{ $announcement->content }}</textarea>
        </div>

        <div class="flex justify-end">
            <button
                type="submit"
                class="flex items-center justify-center rounded-lg px-3 py-2 bg-[#502C58] text-white text-sm font-semibold hover:bg-[#2e1a33]"
                formaction="#"
            >
                <i class="fa-regular fa-floppy-disk mr-2"></i>
                Save
            </button>
        </div>
    </div>
</x-admin-layout>

<script>
    document.getElementById('edit-button').addEventListener('click', function () {
        const editButton = document.getElementById('edit-button');
        if (editButton.classList.contains('bg-blue-500')) {
            editButton.classList.remove('bg-blue-500', 'hover:bg-blue-600');
            editButton.classList.add('bg-[#4ABDAC]', 'hover:bg-[#4ABDAC]');
        } else {
            editButton.classList.remove('bg-[#4ABDAC]', 'hover:bg-[#4ABDAC]');
            editButton.classList.add('bg-blue-500', 'hover:bg-blue-600');
        }

        document.querySelectorAll('input, textarea').forEach(field => {
            field.removeAttribute('disabled');
        });
    });
</script>
