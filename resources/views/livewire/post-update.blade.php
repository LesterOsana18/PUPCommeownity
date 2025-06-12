@auth
<div
    x-data="{ showModal: false }"
    x-effect="document.body.classList.toggle('overflow-hidden', showModal)"
    x-on:update-posted.window="showModal = false"
>
    <!-- Trigger Button -->
    <button
        @click="showModal = true"
        type="button"
        class="flex-shrink-0 flex items-center text-sm font-medium text-white bg-[#48BDAC] rounded-lg px-6 py-3 hover:bg-[#48BDAC]/90 focus:outline-none focus:ring-2 focus:ring-[#48BDAC] focus:ring-offset-1 transition"
    >
        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 5V15M5 10H15" />
        </svg>
        Post
    </button>

    <!-- TELEPORTED MODAL: appended to <body> -->
    <template x-teleport="body">
        <div
            x-show="showModal"
            x-cloak
            x-transition
            class="fixed inset-0 z-[9999] bg-black/50 backdrop-blur-sm flex items-center justify-center"
        >
            <div
                @click.outside="showModal = false"
                class="relative bg-white rounded-2xl max-w-2xl w-full shadow-lg p-6 space-y-6"
            >
                <!-- Close Button -->
                <button
                    @click="showModal = false"
                    class="absolute top-4 right-4 text-gray-600 hover:text-black text-xl"
                >
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <!-- Title -->
                <h2 class="text-2xl font-bold text-[#502C58]">Submit an Update</h2>

                <!-- Flash success message -->
                @if (session()->has('message'))
                    <div class="text-green-600 text-sm font-medium">
                        {{ session('message') }}
                    </div>
                @endif

                <!-- Global validation error -->
                @if ($errors->any())
                    <div class="text-red-600 text-sm font-medium">
                        {{ $errors->first() }}
                    </div>
                @endif

                <!-- Livewire Form -->
                <form wire:submit="submit" class="space-y-4">
                    <!-- Title -->
                    <div>
                        <label class="block font-medium text-sm">Title</label>
                        <input type="text" wire:model="title" class="w-full border rounded px-3 py-2" />
                        @error('title')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Content -->
                    <div>
                        <label class="block font-medium text-sm">Content</label>
                        <textarea wire:model="content" class="w-full border rounded px-3 py-2" rows="4"></textarea>
                        @error('content')
                            <span class="text-sm text-red-500">{{ $errors->first('content') }}</span>
                        @enderror
                    </div>

                    <!-- Image Upload -->
                    <div>
                        <label class="block font-medium text-sm">Image (optional)</label>
                        <input type="file" wire:model.live="image" class="w-full text-sm" />
                        @error('image')
                            <span class="text-sm text-red-500">{{ $errors->first('image') }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit"
                                class="px-6 py-3 bg-[#48BDAC] text-white rounded hover:bg-[#48BDAC]/90 transition">
                            Submit for Review
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </template>
</div>
@endauth
