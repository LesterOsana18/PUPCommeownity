<section class="max-w-3xl mx-auto py-12 px-4">
    <h2 class="text-4xl font-extrabold text-[#502C58] mb-8">Submit an Update</h2>

    @if (session()->has('message'))
        <div class="mb-6 px-4 py-3 rounded bg-green-100 border border-green-300 text-green-800 text-sm font-medium">
            {{ session('message') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-6 px-4 py-3 rounded bg-red-100 border border-red-300 text-red-800 text-sm font-medium">
            {{ $errors->first() }}
        </div>
    @endif

    <form
        wire:submit.prevent="submit"
        x-data="{ title: @entangle('title'), content: @entangle('content') }"
        class="space-y-6 bg-white shadow-md rounded-xl p-6"
    >
        <!-- Title -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">
                Title <span class="text-red-500">*</span>
            </label>
            <input type="text"
                wire:model="title"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#48BDAC] focus:border-transparent" />
            @error('title')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- Content -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">
                Content <span class="text-red-500">*</span>
            </label>
            <textarea wire:model="content"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#48BDAC] focus:border-transparent"
                    rows="6"></textarea>
            @error('content')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- Image Upload with Preview -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Image (optional)</label>
            <input type="file" wire:model.live="image"
                class="block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-[#48BDAC]/90 file:text-white hover:file:bg-[#48BDAC]" />

            @error('image')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror

            @if ($image)
                <div class="mt-4">
                    <span class="block text-xs text-gray-500 mb-1">Image Preview:</span>
                    <img src="{{ $image->temporaryUrl() }}"
                        alt="Preview"
                        class="max-h-60 rounded-lg border border-gray-300 shadow-sm" />
                </div>
            @endif
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end pt-4">
            <button type="submit"
                    class="px-6 py-3 bg-[#48BDAC] text-white text-sm font-semibold rounded-lg hover:bg-[#3aa394] transition duration-200 disabled:opacity-50 disabled:cursor-not-allowed"
                    :disabled="!title || !content"
                    wire:loading.attr="disabled">
                Submit for Review
            </button>
        </div>
    </form>
</section>
