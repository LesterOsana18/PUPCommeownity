<x-admin-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl text-[#502C58]">
            Update <b> / Event</b>
        </h1>
    </div>

    {{-- Button Row --}}
    <div class="flex gap-2 mb-4">
        <a href="/update" class="flex items-center rounded-lg px-3 py-2 bg-[#502C58] text-white text-sm font-semibold hover:bg-[#2e1a33]">
            <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
            Go Back
        </a>

        <button class="rounded-lg px-3 py-2 bg-blue-500 text-white text-sm font-semibold hover:bg-blue-600 flex items-center" id="edit-button" type="button">
            <i class="fa-regular fa-pen-to-square mr-2"></i>
            Edit
        </button>

        <button
            type="submit"
            form="update-form"
            class="rounded-lg px-3 py-2 bg-[#4ABDAC] text-white text-sm font-semibold hover:bg-[#3da6a0] flex items-center"
        >
            <i class="fa-regular fa-floppy-disk mr-2"></i>
            Save
        </button>

        <form method="POST" action="{{ route('admin.events.destroy', $event->id) }}" onsubmit="return confirm('Are you sure you want to delete this event?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="rounded-lg px-3 py-2 bg-red-500 text-white text-sm font-semibold hover:bg-red-600 flex items-center">
                <i class="fa-regular fa-trash-can mr-2"></i>
                Delete
            </button>
        </form>
    </div>

    {{-- Update Form --}}
    <form id="update-form" method="POST" action="{{ route('admin.events.update', $event->id) }}" enctype="multipart/form-data" class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200">
        @csrf
        @method('PUT')

        <div class="flex flex-col gap-2 text-sm">
            <p class="font-bold text-lg">Event Name</p>
            <input
                type="text"
                name="name"
                value="{{ old('name', $event->name) }}"
                class="rounded-lg bg-[#F1EAEA] p-2"
                disabled
            >
        </div>

        <div class="flex flex-col justify-center text-sm lg:flex-row lg:items-center lg:gap-20 gap-2">
            <div class="flex items-center gap-2">
                <p class="font-bold">Date & Time Posted:</p>
                <input
                    type="datetime-local"
                    value="{{ $event->created_at->format('Y-m-d\TH:i') }}"
                    class="rounded-lg bg-[#F1EAEA] p-2"
                    readonly
                >
            </div>
            <div class="flex items-center gap-2">
                <p class="font-bold">Event No.:</p>
                <input
                    type="text"
                    value="{{ $event->id }}"
                    class="rounded-lg bg-[#F1EAEA] p-2"
                    readonly
                >
            </div>
        </div>

        <div class="flex items-center justify-center">
            <div class="w-lg aspect-[3/2] relative group flex flex-col gap-2 text-sm">
                <label class="font-bold text-lg" for="image">Event Image</label>
                <input type="file" name="image" accept="image/*" class="bg-[#F1EAEA] p-2 rounded-lg" disabled>
                <img src="{{ asset(str_replace('public/', '', $event->image_path)) }}" class="w-full h-auto rounded-[15px] max-h-64 object-cover" alt="Current Image">
            </div>
        </div>

        <div class="flex flex-col gap-2 text-sm">
            <p class="font-bold text-lg">Event Details:</p>
            <textarea
                name="content"
                rows="5"
                class="rounded-lg bg-[#F1EAEA] p-2"
                disabled
            >{{ old('content', $event->description) }}</textarea>
        </div>
    </form>

    <script>
        document.getElementById('edit-button').addEventListener('click', function () {
            const fields = document.querySelectorAll('#update-form input:not([type=hidden]):not([name=_token]), #update-form textarea, #update-form input[type="file"]');
            const editButton = this;
            const isDisabled = fields[0].hasAttribute('disabled');

            fields.forEach(field => {
                if (isDisabled) {
                    field.removeAttribute('disabled');
                } else {
                    field.setAttribute('disabled', true);
                }
            });

            editButton.classList.toggle('bg-blue-500');
            editButton.classList.toggle('hover:bg-blue-600');
            editButton.classList.toggle('bg-[#4ABDAC]');
            editButton.classList.toggle('hover:bg-[#4ABDAC]');
        });
    </script>
</x-admin-layout>