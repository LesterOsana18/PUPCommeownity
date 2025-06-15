<x-admin-layout>
    <div class="container mx-auto max-w-2xl p-8 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-bold mb-4 text-[#4ABDAC]">Edit Adoption Application</h2>

        <a href="{{ route('tables') }}" class="inline-block mb-6 text-[#4ABDAC] hover:text-[#369688] font-semibold">
            ← Back to Tables
        </a>

        {{-- Show validation errors --}}
        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tables.applications.update', $application->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- First Name -->
            <div class="mb-4">
                <label for="first_name" class="block text-gray-700">First Name</label>
                <input id="first_name" name="first_name" type="text" class="form-input w-full" value="{{ old('first_name', $application->first_name) }}" required>
                @error('first_name') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Last Name -->
            <div class="mb-4">
                <label for="last_name" class="block text-gray-700">Last Name</label>
                <input id="last_name" name="last_name" type="text" class="form-input w-full" value="{{ old('last_name', $application->last_name) }}" required>
                @error('last_name') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Address -->
            <div class="mb-4">
                <label for="address" class="block text-gray-700">Address</label>
                <input id="address" name="address" type="text" class="form-input w-full" value="{{ old('address', $application->address) }}" required>
                @error('address') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Phone -->
            <div class="mb-4">
                <label for="phone" class="block text-gray-700">Phone</label>
                <input id="phone" name="phone" type="text" class="form-input w-full" value="{{ old('phone', $application->phone) }}" required>
                @error('phone') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input id="email" name="email" type="email" class="form-input w-full" value="{{ old('email', $application->email) }}" required>
                @error('email') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Birth Date -->
            <div class="mb-4">
                <label for="birth_date" class="block text-gray-700">Birth Date</label>
                <input id="birth_date" name="birth_date" type="date" class="form-input w-full" value="{{ old('birth_date', $application->birth_date) }}" required>
                @error('birth_date') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Occupation -->
            <div class="mb-4">
                <label for="occupation" class="block text-gray-700">Occupation (optional)</label>
                <input id="occupation" name="occupation" type="text" class="form-input w-full" value="{{ old('occupation', $application->occupation) }}">
                @error('occupation') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Company/Business Name -->
            <div class="mb-4">
                <label for="company_business_name" class="block text-gray-700">Company/Business Name</label>
                <input id="company_business_name" name="company_business_name" type="text" class="form-input w-full" value="{{ old('company_business_name', $application->company_business_name) }}" required>
                @error('company_business_name') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Social Media Profile -->
            <div class="mb-4">
                <label for="social_media_profile" class="block text-gray-700">Social Media Profile (optional)</label>
                <input id="social_media_profile" name="social_media_profile" type="text" class="form-input w-full" value="{{ old('social_media_profile', $application->social_media_profile) }}">
                @error('social_media_profile') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Civil Status -->
            <div class="mb-4">
                <label for="civil_status" class="block text-gray-700">Civil Status</label>
                <select name="civil_status" id="civil_status" class="form-select w-full" required>
                    <option value="single" {{ old('civil_status', $application->civil_status) == 'single' ? 'selected' : '' }}>Single</option>
                    <option value="married" {{ old('civil_status', $application->civil_status) == 'married' ? 'selected' : '' }}>Married</option>
                    <option value="other" {{ old('civil_status', $application->civil_status) == 'other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('civil_status') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Sex -->
            <div class="mb-4">
                <label for="sex" class="block text-gray-700">Sex</label>
                <select name="sex" id="sex" class="form-select w-full" required>
                    <option value="male" {{ old('sex', $application->sex) == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('sex', $application->sex) == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="other" {{ old('sex', $application->sex) == 'other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('sex') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Adoption Prompt -->
            <div class="mb-4">
                <label class="block text-gray-700">How did you hear about us?</label>
                @php
                    $selectedPrompts = explode(',', old('adoption_prompt', $application->adoption_prompt ?? ''));
                    $promptOptions = ['friends' => 'Friends', 'social_media' => 'Social Media', 'website' => 'Website', 'posters' => 'Posters', 'other' => 'Other'];
                @endphp
                @foreach($promptOptions as $value => $label)
                    <label class="inline-flex items-center mr-3">
                        <input type="checkbox" name="adoption_prompt[]" value="{{ $value }}"
                            {{ in_array($value, $selectedPrompts) ? 'checked' : '' }}>
                        <span class="ml-2">{{ $label }}</span>
                    </label>
                @endforeach
                @error('adoption_prompt') <div class="text-red-600 text-xs">{{ $message }}</div> @enderror
            </div>

            <!-- Adopted Before -->
            <div class="mb-4">
                <label for="adopted_before" class="block text-gray-700">Have you adopted before?</label>
                <select name="adopted_before" id="adopted_before" class="form-select w-full" required>
                    <option value="yes" {{ old('adopted_before', $application->adopted_before) == 'yes' ? 'selected' : '' }}>Yes</option>
                    <option value="no" {{ old('adopted_before', $application->adopted_before) == 'no' ? 'selected' : '' }}>No</option>
                </select>
                @error('adopted_before') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            {{-- Co-Signer Section (hidden by default, shown if applicant is minor) --}}
            @php
                // Determine if the applicant is a minor (you may use your own logic here)
                $birthDate = old('birth_date', $application->birth_date);
                $isMinor = false;
                if ($birthDate) {
                    $age = \Carbon\Carbon::parse($birthDate)->age;
                    $isMinor = $age < 18;
                }
            @endphp
            <div id="coSignerSection" class="{{ $isMinor ? '' : 'hidden' }} border border-yellow-400 bg-yellow-50 rounded-md p-4 mt-6">
                <h2 class="text-lg font-semibold mb-2 text-yellow-800">Parent/Guardian Co-Signer Details (required for minors)</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                    <div>
                        <label for="co_signer_name" class="block font-semibold mb-1">Co-Signer Full Name<span class="text-red-600">*</span></label>
                        <input
                            type="text"
                            id="co_signer_name"
                            name="co_signer_name"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]"
                            value="{{ old('co_signer_name', $application->co_signer_name ?? '') }}"
                            @if($isMinor) required @endif
                        />
                        @error('co_signer_name') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <span class="block font-semibold mb-1">Relationship to Applicant<span class="text-red-600">*</span></span>
                        <div class="flex items-center space-x-6">
                            <label class="inline-flex items-center">
                                <input type="radio"
                                    name="co_signer_relationship"
                                    value="parent"
                                    class="form-radio text-[#E7AB39]"
                                    {{ old('co_signer_relationship', $application->co_signer_relationship ?? '') == 'parent' ? 'checked' : '' }}
                                    @if($isMinor) required @endif
                                />
                                <span class="ml-2">Parent</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio"
                                    name="co_signer_relationship"
                                    value="guardian"
                                    class="form-radio text-[#E7AB39]"
                                    {{ old('co_signer_relationship', $application->co_signer_relationship ?? '') == 'guardian' ? 'checked' : '' }}
                                    @if($isMinor) required @endif
                                />
                                <span class="ml-2">Guardian</span>
                            </label>
                        </div>
                        @error('co_signer_relationship') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div>
                    <label for="co_signer_signature" class="block font-semibold mb-1">Co-Signer Signature (Photo)<span class="text-red-600">*</span></label>
                    @if (!empty($application->co_signer_signature))
                        <div class="mb-2">
                            <span class="block text-sm text-gray-600 mb-1">Current signature:</span>
                            <img src="{{ asset('storage/' . $application->co_signer_signature) }}" alt="Co-Signer Signature" class="h-24 rounded border">
                        </div>
                    @endif
                    <input
                        type="file"
                        id="co_signer_signature"
                        name="co_signer_signature"
                        accept="image/*"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]"
                        @if($isMinor) required @endif
                    />
                    @error('co_signer_signature') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
            {{-- Container for dynamic hidden fields --}}
            <div id="coSignerHiddenFields"></div>

            <div class="mt-6 flex justify-end">
                <button type="submit" class="px-6 py-2 bg-[#4ABDAC] text-white rounded-lg font-semibold hover:bg-[#369688]">
                    Update Application
                </button>
            </div>
        </form>
    </div>

    <script>
        // Show/hide co-signer section and toggle required attributes based on age
        document.addEventListener('DOMContentLoaded', function () {
            function toggleCoSigner() {
                const birthDate = document.getElementById('birth_date').value;
                let age = 99;
                if (birthDate) {
                    const today = new Date();
                    const dob = new Date(birthDate);
                    age = today.getFullYear() - dob.getFullYear();
                    const m = today.getMonth() - dob.getMonth();
                    if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
                        age--;
                    }
                }
                const isMinor = age < 18;
                const section = document.getElementById('coSignerSection');
                section.classList.toggle('hidden', !isMinor);

                // Add/remove required attribute
                document.getElementById('co_signer_name').required = isMinor;
                document.getElementsByName('co_signer_relationship').forEach(rb => {
                    rb.required = isMinor;
                });
                // Only require signature if not already present
                @if (empty($application->co_signer_signature ?? null))
                    document.getElementById('co_signer_signature').required = isMinor;
                @endif

                // Dynamically add/remove hidden fields for co-signer if not a minor
                const hiddenDiv = document.getElementById('coSignerHiddenFields');
                if (!isMinor) {
                    hiddenDiv.innerHTML = `
                        <input type="hidden" name="co_signer_name" value="">
                        <input type="hidden" name="co_signer_relationship" value="">
                        <input type="hidden" name="co_signer_signature" value="">
                    `;
                } else {
                    hiddenDiv.innerHTML = '';
                }
            }
            document.getElementById('birth_date').addEventListener('change', toggleCoSigner);
            toggleCoSigner();
        });
    </script>
</x-admin-layout>