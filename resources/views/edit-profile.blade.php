<x-admin-layout>
    <div class="flex flex-col min-h-screen">
        <!-- Display success message -->
        @if (session('success'))
            <div class="flex justify-center w-full fixed left-0 top-0 z-30 ml-32 mt-8 auto-dismiss-alert">
                <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded shadow-xl">
                    <span class="block sm:inline font-semibold">
                        {{ session('success') }}
                    </span>
                </div>
            </div>
        @endif
        <!-- Dismiss alert after 5 seconds -->
        @if (session('success'))
            <script>
                setTimeout(function() {
                    let alerts = document.querySelectorAll('.auto-dismiss-alert');
                    alerts.forEach(function(alert) {
                        alert.style.display = 'none';
                    });
                }, 5000); // Dismiss after 5 seconds
            </script>
        @endif
        <div class="flex items-center justify-between mb-5">
            <h1 class="text-2xl font-bold text-[#502C58]">Edit Profile</h1>
        </div>
        <div class="flex justify-center items-center flex-1">
            <div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200 w-full">
                <form id="editProfileForm" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="space-y-5">
                    @csrf
                    {{-- Profile Picture --}}
                    <div class="flex flex-col items-center mb-6">
                        <img src="{{ $user->profile_picture ? asset('storage/'.$user->profile_picture) : asset('images/default-profile.svg') }}"
                            alt="Profile Picture" class="w-28 h-28 rounded-full object-cover border-4 border-[#4ABDAC] shadow mb-2">
                        <label class="block text-sm font-medium mb-1 mt-2 text-[#502C58]">Change Profile Picture</label>
                        <input type="file" name="profile_picture" id="profile_picture" class="block w-full text-sm text-gray-500
                            file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0
                            file:text-sm file:font-semibold file:bg-[#4ABDAC]/20 file:text-[#502C58] hover:file:bg-[#4ABDAC]/40">
                        @error('profile_picture') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block mb-1 text-[#502C58] font-semibold">First Name</label>
                            <input type="text" name="first_name" value="{{ old('first_name', $user->first_name) }}"
                                required class="w-full border border-[#E7AB39] rounded-lg p-2 focus:ring-2 focus:ring-[#4ABDAC] focus:outline-none">
                            @error('first_name') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-[#502C58] font-semibold">Last Name</label>
                            <input type="text" name="last_name" value="{{ old('last_name', $user->last_name) }}"
                                required class="w-full border border-[#E7AB39] rounded-lg p-2 focus:ring-2 focus:ring-[#4ABDAC] focus:outline-none">
                            @error('last_name') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-[#502C58] font-semibold">Middle Name</label>
                            <input type="text" name="middle_name" value="{{ old('middle_name', $user->middle_name) }}"
                                class="w-full border border-[#E7AB39] rounded-lg p-2 focus:ring-2 focus:ring-[#4ABDAC] focus:outline-none">
                            @error('middle_name') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                        <div>
                            <label class="block mb-1 text-[#502C58] font-semibold">Suffix</label>
                            <input type="text" name="suffix" value="{{ old('suffix', $user->suffix) }}"
                                class="w-full border border-[#E7AB39] rounded-lg p-2 focus:ring-2 focus:ring-[#4ABDAC] focus:outline-none">
                            @error('suffix') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                        <div class="md:col-span-2">
                            <label class="block mb-1 text-[#502C58] font-semibold">Email</label>
                            <input type="email" name="email" value="{{ old('email', $user->email) }}"
                                required class="w-full border border-[#E7AB39] rounded-lg p-2 focus:ring-2 focus:ring-[#4ABDAC] focus:outline-none">
                            @error('email') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                        <div class="md:col-span-2">
                            <label class="block mb-1 text-[#502C58] font-semibold">Mobile Number</label>
                            <input type="text" name="mobile_number" value="{{ old('mobile_number', $user->mobile_number) }}"
                                class="w-full border border-[#E7AB39] rounded-lg p-2 focus:ring-2 focus:ring-[#4ABDAC] focus:outline-none">
                            @error('mobile_number') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                        <div class="md:col-span-2">
                            <label class="block mb-1 text-[#502C58] font-semibold">Address</label>
                            <input type="text" name="address" value="{{ old('address', $user->address) }}"
                                class="w-full border border-[#E7AB39] rounded-lg p-2 focus:ring-2 focus:ring-[#4ABDAC] focus:outline-none">
                            @error('address') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                        <div class="md:col-span-2">
                            <label class="block mb-1 text-[#502C58] font-semibold">Preferred Volunteer Role</label>
                            <input type="text" name="preferred_volunteer_role" value="{{ $user->preferred_volunteer_role }}"
                                class="w-full border border-[#E7AB39] rounded-lg p-2 bg-gray-100 text-gray-500 cursor-not-allowed"
                                disabled>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block mb-1 text-[#502C58] font-semibold">Availability</label>
                            <select name="availability" class="w-full border border-[#E7AB39] rounded-lg p-2 focus:ring-2 focus:ring-[#4ABDAC] focus:outline-none">
                                <option value="" disabled {{ old('availability', $user->availability) ? '' : 'selected' }}>Select availability</option>
                                <option value="weekdays_mornings" {{ old('availability', $user->availability) == 'weekdays_mornings' ? 'selected' : '' }}>Weekdays – Mornings</option>
                                <option value="weekdays_evenings" {{ old('availability', $user->availability) == 'weekdays_evenings' ? 'selected' : '' }}>Weekdays – Evenings</option>
                                <option value="weekends" {{ old('availability', $user->availability) == 'weekends' ? 'selected' : '' }}>Weekends</option>
                            </select>
                            @error('availability') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                        <div class="md:col-span-2">
                            <label class="block mb-1 text-[#502C58] font-semibold">Motivation Statement</label>
                            <textarea name="motivation_statement" rows="3"
                                class="w-full border border-[#E7AB39] rounded-lg p-2 focus:ring-2 focus:ring-[#4ABDAC] focus:outline-none">{{ old('motivation_statement', $user->motivation_statement) }}</textarea>
                            @error('motivation_statement') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                        <div class="md:col-span-2">
                            <label class="block mb-1 text-[#502C58] font-semibold">
                                Password <span class="text-sm text-gray-500">(Leave blank to keep current password)</span>
                            </label>
                            <input type="password" name="password"
                                class="w-full border border-[#E7AB39] rounded-lg p-2 focus:ring-2 focus:ring-[#4ABDAC] focus:outline-none"
                                autocomplete="new-password">
                            @error('password') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="flex justify-end mt-6">
                        <button type="submit"
                            id="saveBtn"
                            class="bg-[#502C58] hover:bg-[#4ABDAC] transition-colors text-white px-6 py-2 rounded-lg font-bold shadow"
                            disabled>
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Store the initial values of the form fields
            const form = document.getElementById('editProfileForm');
            const saveBtn = document.getElementById('saveBtn');
            const initialData = new FormData(form);

            // Helper to check for changes
            function isChanged() {
                const currentData = new FormData(form);
                for (let [key, value] of currentData.entries()) {
                    if (key === 'password' && value === '') continue; // skip empty password
                    if (key === 'profile_picture' && !currentData.get('profile_picture').name) continue; // skip empty file
                    // Compare values
                    if (value !== initialData.get(key)) {
                        return true;
                    }
                }
                // Also check for removed fields (shouldn't happen in this form)
                return false;
            }

            // Listen to changes on all inputs
            form.addEventListener('input', () => {
                saveBtn.disabled = !isChanged();
            });
            form.addEventListener('change', () => {
                saveBtn.disabled = !isChanged();
            });
        });
    </script>
</x-admin-layout>
