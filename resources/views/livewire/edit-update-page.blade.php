<x-layout>
    <section class="max-w-3xl mx-auto py-12 px-4">
        <h2 class="text-4xl font-extrabold text-[#502C58] mb-8">Update Post</h2>

        @if (session('message'))
            <div class="mb-6 px-4 py-3 rounded bg-yellow-100 border border-yellow-300 text-yellow-800 text-sm font-medium">
                {{ session('message') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 px-4 py-3 rounded bg-red-100 border border-red-300 text-red-800 text-sm font-medium">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('updates.update', $post) }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white shadow-md rounded-xl p-6">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">
                    Title <span class="text-red-500">*</span>
                </label>
                <input type="text"
                    name="title"
                    value="{{ old('title', $post->title) }}"
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
                <textarea name="content"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#48BDAC] focus:border-transparent"
                    rows="6">{{ old('content', $post->content) }}</textarea>
                @error('content')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Image Upload with Live Preview -->
            <div>
                <label for="imageInput" class="block text-sm font-semibold text-gray-700 mb-2">Replace Image (optional)</label>
                <input type="file" name="image" id="imageInput"
                    accept="image/*"
                    class="block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-[#48BDAC]/90 file:text-white hover:file:bg-[#48BDAC]" />
                @error('image')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror

                <p id="selectedFileName" class="text-xs text-gray-500 mt-2 hidden"></p>
                <div id="imagePreviewContainer" class="mt-4 hidden">
                    <span class="block text-xs text-gray-500 mb-1">Selected Preview:</span>
                    <img id="imagePreview" src="#" alt="Selected Image Preview" class="max-h-60 rounded-lg border border-gray-300 shadow-sm" />
                </div>

                @if ($post->image_path && $post->image_path !== 'images/def-img.svg')
                    <div class="mt-4" id="currentImageContainer">
                        <span class="block text-xs text-gray-500 mb-1">Current Image:</span>
                        <img src="{{ asset($post->image_path) }}" alt="Current Image" class="max-h-60 rounded-lg border border-gray-300 shadow-sm" />
                    </div>
                @endif
            </div>

            @if (!empty($post->image_path) && $post->image_path !== 'images/def-img.svg')
                <div class="mt-4 flex items-center gap-3">
                    <input type="checkbox" name="remove_image" value="1" id="remove_image">
                    <label for="remove_image" class="text-sm text-gray-700">Remove current image and revert to default</label>
                </div>
            @endif

            <!-- Submit -->
            <div class="flex justify-end pt-4">
                <button type="submit"
                    class="px-6 py-3 bg-[#48BDAC] text-white text-sm font-semibold rounded-lg hover:bg-[#3aa394] transition duration-200 disabled:opacity-50 disabled:cursor-not-allowed">
                    Update Post
                </button>
            </div>
        </form>
    </section>

    <script>
        const imageInput = document.getElementById('imageInput');
        const fileNameDisplay = document.getElementById('selectedFileName');
        const previewContainer = document.getElementById('imagePreviewContainer');
        const imagePreview = document.getElementById('imagePreview');
        const currentImage = document.getElementById('currentImageContainer');

        imageInput.addEventListener('change', function () {
            const file = this.files[0];

            if (file) {
                fileNameDisplay.textContent = file.name;
                fileNameDisplay.classList.remove('hidden');

                const reader = new FileReader();
                reader.onload = function (e) {
                    imagePreview.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                    if (currentImage) currentImage.classList.add('hidden');
                };
                reader.readAsDataURL(file);
            } else {
                fileNameDisplay.classList.add('hidden');
                previewContainer.classList.add('hidden');
                imagePreview.src = '';
                if (currentImage) currentImage.classList.remove('hidden');
            }
        });
    </script>
</x-layout>
