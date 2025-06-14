<x-admin-layout>
    <div class="container mx-auto max-w-2xl p-8 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-bold mb-4 text-[#4ABDAC]">Add Cat to Gallery</h2>

        <a href="{{ route('tables') }}" class="inline-block mb-6 text-[#4ABDAC] hover:text-[#369688] font-semibold">
            ← Back to Tables
        </a>

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('adoptions.store') }}" method="POST" enctype="multipart/form-data" id="catForm">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input id="name" name="name" type="text" class="form-input w-full" value="{{ old('name') }}" required>
                @error('name') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Breed -->
            <div class="mb-4">
                <label for="breed" class="block text-gray-700">Breed</label>
                <input id="breed" name="breed" type="text" class="form-input w-full" value="{{ old('breed') }}" required>
                @error('breed') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Sex -->
            <div class="mb-4">
                <label for="sex" class="block text-gray-700">Sex</label>
                <select name="sex" id="sex" class="form-select w-full" required>
                    <option value="">Select sex</option>
                    <option value="male" {{ old('sex') == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('sex') == 'female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('sex') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Age -->
            <div class="mb-4">
                <label for="age" class="block text-gray-700">Age</label>
                <input id="age" name="age" type="number" min="0" step="1" class="form-input w-full" value="{{ old('age') }}" required>
                @error('age') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Color -->
            <div class="mb-4">
                <label for="color" class="block text-gray-700">Color</label>
                <select name="color" id="color" class="form-select w-full" required>
                    <option value="">Select color</option>
                    <option value="black" {{ old('color') == 'black' ? 'selected' : '' }}>Black</option>
                    <option value="white" {{ old('color') == 'white' ? 'selected' : '' }}>White</option>
                    <option value="brown" {{ old('color') == 'brown' ? 'selected' : '' }}>Brown</option>
                    <option value="orange" {{ old('color') == 'orange' ? 'selected' : '' }}>Orange</option>
                    <option value="gray" {{ old('color') == 'gray' ? 'selected' : '' }}>Gray</option>
                    <option value="other" {{ old('color') == 'other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('color') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Weight -->
            <div class="mb-4">
                <label for="weight" class="block text-gray-700">Weight (kg)</label>
                <input id="weight" name="weight" type="number" step="0.1" min="0" class="form-input w-full" value="{{ old('weight') }}" required>
                @error('weight') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Deceased Checkbox -->
            <div class="mb-4 flex items-center">
                <input type="hidden" name="deceased" value="0">
                <input id="deceased" name="deceased" type="checkbox" value="1" {{ old('deceased') ? 'checked' : '' }} class="mr-2">
                <label for="deceased" class="text-gray-700">This cat has passed away</label>
                @error('deceased') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Living Cat Fields (will be hidden if deceased is checked) -->
            <div id="living-fields">
                <!-- Sterilized -->
                <div class="mb-4">
                    <label for="sterilized" class="block text-gray-700">Sterilized?</label>
                    <select name="sterilized" id="sterilized" class="form-select w-full">
                        <option value="">Select option</option>
                        <option value="1" {{ old('sterilized') == '1' ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ old('sterilized') == '0' ? 'selected' : '' }}>No</option>
                    </select>
                    @error('sterilized') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                </div>

                <!-- Location -->
                <div class="mb-4">
                    <label for="location" class="block text-gray-700">Location</label>
                    <input id="location" name="location" type="text" class="form-input w-full" value="{{ old('location') }}">
                    @error('location') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                </div>

                <!-- Available to Adopt -->
                <div class="mb-4">
                    <label for="adopted" class="block text-gray-700">Available to Adopt?</label>
                    <select name="adopted" id="adopted" class="form-select w-full">
                        <option value="0" {{ old('adopted') == '0' ? 'selected' : '' }}>Yes, available</option>
                        <option value="1" {{ old('adopted') == '1' ? 'selected' : '' }}>No, already adopted</option>
                    </select>
                    @error('adopted') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Photo -->
            <div class="mb-4">
                <label for="photo_path" class="block text-gray-700">Photo</label>
                <input id="photo_path" name="photo_path" type="file" class="form-input w-full" accept="image/*" required>
                @error('photo_path') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Additional Remarks -->
            <div class="mb-4">
                <label for="additional_remarks" class="block text-gray-700">Additional Remarks (optional)</label>
                <textarea id="additional_remarks" name="additional_remarks" class="form-input w-full">{{ old('additional_remarks', $cat->additional_remarks ?? '') }}</textarea>
                @error('additional_remarks') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Year of Death -->
            <div class="mb-4" id="death-year-field" style="display:none;">
                <label for="date_of_death" class="block text-gray-700">Year of Death (optional)</label>
                <input id="date_of_death" name="date_of_death" type="date" class="form-input w-full" value="{{ old('date_of_death', $cat->date_of_death ?? '') }}">
                @error('date_of_death') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="mt-6 flex justify-end">
                <button type="submit" class="px-6 py-2 bg-[#4ABDAC] text-white rounded-lg font-semibold hover:bg-[#369688]">
                    Add Cat
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deceasedCheckbox = document.getElementById('deceased');
            const livingFields = document.getElementById('living-fields');
            const deathYearField = document.getElementById('death-year-field');

            function toggleFields() {
                if (deceasedCheckbox.checked) {
                    livingFields.style.display = 'none';
                    deathYearField.style.display = 'block';
                    // Optionally: clear required for living fields here if using JS validation
                } else {
                    livingFields.style.display = 'block';
                    deathYearField.style.display = 'none';
                }
            }

            // Initial toggle on page load
            toggleFields();

            // Listen for changes
            deceasedCheckbox.addEventListener('change', toggleFields);
        });
    </script>
</x-admin-layout>