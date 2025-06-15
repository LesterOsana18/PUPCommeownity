@php use Illuminate\Support\Str; @endphp

<x-layout>
    <div class="max-w-3xl mx-auto p-6">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-6">Adoption Application Form</h1>
        <p class="mb-8"><span class="text-red-600 font-bold">*</span> indicates required fields</p>

        {{-- Show errors --}}
        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                <ul class="pl-5 list-disc">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/application" enctype="multipart/form-data" class="space-y-8" id="adoptionForm" autocomplete="on">
            @csrf

            {{-- Applicant Details --}}
            <fieldset class="border border-gray-200 rounded p-4">
                <legend class="font-semibold text-lg text-purple-700 px-2">Applicant Details</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-2">
                    <div>
                        <label for="first_name" class="block mb-1 font-semibold">First Name <span class="text-red-600">*</span></label>
                        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required autocomplete="given-name"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#E7AB39]" />
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 font-semibold">Last Name <span class="text-red-600">*</span></label>
                        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required autocomplete="family-name"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#E7AB39]" />
                    </div>
                </div>
                <div class="mt-4">
                    <label for="address" class="block mb-1 font-semibold">Address <span class="text-red-600">*</span></label>
                    <input type="text" id="address" name="address" value="{{ old('address') }}" required autocomplete="street-address"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#E7AB39]" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label for="phone" class="block mb-1 font-semibold">Phone <span class="text-red-600">*</span></label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required autocomplete="tel"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#E7AB39]" pattern="^[0-9\-\+\s\(\)]*$" />
                    </div>
                    <div>
                        <label for="email" class="block mb-1 font-semibold">Email <span class="text-red-600">*</span></label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#E7AB39]" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label for="birth_date" class="block mb-1 font-semibold">Birth Date <span class="text-red-600">*</span></label>
                        <input type="date" id="birth_date" name="birth_date" value="{{ old('birth_date') }}" required
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#E7AB39]" />
                    </div>
                    <div>
                        <label for="occupation" class="block mb-1 font-semibold">Occupation</label>
                        <input type="text" id="occupation" name="occupation" value="{{ old('occupation') }}"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#E7AB39]" autocomplete="organization-title" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label for="company_business_name" class="block mb-1 font-semibold">Company Business Name <span class="text-red-600">*</span></label>
                        <span class="block text-xs italic text-gray-500 mb-1">Type N/A if unemployed</span>
                        <input type="text" id="company_business_name" name="company_business_name" value="{{ old('company_business_name') }}" required
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#E7AB39]" />
                    </div>
                    <div>
                        <label for="social_media_profile" class="block mb-1 font-semibold">Social Media Profile</label>
                        <span class="block text-xs italic text-gray-500 mb-1">Type N/A if you have no social media</span>
                        <input type="text" id="social_media_profile" name="social_media_profile" value="{{ old('social_media_profile') }}"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#E7AB39]" autocomplete="url" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <span class="block mb-2 font-semibold">Civil Status <span class="text-red-600">*</span></span>
                        <div class="flex items-center gap-6">
                            @foreach(['single' => 'Single', 'married' => 'Married', 'other' => 'Other'] as $value => $label)
                                <label class="inline-flex items-center">
                                    <input type="radio" name="civil_status" value="{{ $value }}" @checked(old('civil_status') == $value) required class="form-radio text-[#E7AB39]" />
                                    <span class="ml-2">{{ $label }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <span class="block mb-2 font-semibold">Sex <span class="text-red-600">*</span></span>
                        <div class="flex items-center gap-6">
                            @foreach(['male' => 'Male', 'female' => 'Female', 'other' => 'Other'] as $value => $label)
                                <label class="inline-flex items-center">
                                    <input type="radio" name="sex" value="{{ $value }}" @checked(old('sex') == $value) required class="form-radio text-[#E7AB39]" />
                                    <span class="ml-2">{{ $label }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <span class="block mb-2 font-semibold">What prompted you to adopt? <span class="text-red-600">*</span></span>
                        <div class="grid grid-cols-2 gap-2">
                            @foreach(['friends' => 'Friends', 'social_media' => 'Social Media', 'website' => 'Website', 'posters' => 'Posters', 'other' => 'Other'] as $value => $label)
                                <label class="inline-flex items-center space-x-2">
                                    <input type="checkbox" name="adoption_prompt[]" value="{{ $value }}" class="form-checkbox text-[#E7AB39]"
                                        @checked(is_array(old('adoption_prompt')) && in_array($value, old('adoption_prompt', []))) />
                                    <span>{{ $label }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <span class="block mb-2 font-semibold">Have you adopted from us before? <span class="text-red-600">*</span></span>
                        <div class="flex items-center gap-6">
                            @foreach(['yes' => 'Yes', 'no' => 'No'] as $value => $label)
                                <label class="inline-flex items-center">
                                    <input type="radio" name="adopted_before" value="{{ $value }}" @checked(old('adopted_before') == $value) required class="form-radio text-[#E7AB39]" />
                                    <span class="ml-2">{{ $label }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </fieldset>

            {{-- Alternate Contact
            <fieldset class="border border-purple-200 bg-purple-50 rounded-md p-4">
                <legend class="font-semibold text-lg text-purple-800 px-2">Alternate Contact</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-2">
                    <div>
                        <label for="alt_first_name" class="block mb-1 font-semibold">First Name <span class="text-red-600">*</span></label>
                        <input type="text" id="alt_first_name" name="alt_first_name" value="{{ old('alt_first_name') }}" required
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#E7AB39]" />
                    </div>
                    <div>
                        <label for="alt_last_name" class="block mb-1 font-semibold">Last Name <span class="text-red-600">*</span></label>
                        <input type="text" id="alt_last_name" name="alt_last_name" value="{{ old('alt_last_name') }}" required
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#E7AB39]" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label for="relationship_to_alt" class="block mb-1 font-semibold">Relationship to Applicant <span class="text-red-600">*</span></label>
                        <input type="text" id="relationship_to_alt" name="relationship_to_alt" value="{{ old('relationship_to_alt') }}" required
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#E7AB39]" />
                    </div>
                    <div>
                        <label for="phone_alt" class="block mb-1 font-semibold">Phone <span class="text-red-600">*</span></label>
                        <input type="tel" id="phone_alt" name="phone_alt" value="{{ old('phone_alt') }}" required
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#E7AB39]" pattern="^[0-9\-\+\s\(\)]*$" />
                    </div>
                </div>
                <div class="mt-4">
                    <label for="email_alt" class="block mb-1 font-semibold">Email <span class="text-red-600">*</span></label>
                    <input type="email" id="email_alt" name="email_alt" value="{{ old('email_alt') }}" required
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#E7AB39]" />
                </div>
                <p class="text-xs italic text-gray-600 mt-4" id="minorNote">
                    If the applicant is a minor, a parent or a guardian must be the alternate contact and co-sign the application.
                </p>
            </fieldset> --}}

            {{-- Co-Signer Section (for minors) --}}
            <fieldset id="coSignerSection" class="hidden border border-yellow-400 bg-yellow-50 rounded-md p-4">
                <legend class="font-semibold text-lg text-yellow-800 px-2">Parent/Guardian Co-Signer (for minors)</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-2">
                    <div>
                        <label for="co_signer_name" class="block mb-1 font-semibold">Full Name <span class="text-red-600">*</span></label>
                        <input type="text" id="co_signer_name" name="co_signer_name"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#E7AB39]" />
                    </div>
                    <div>
                        <span class="block mb-1 font-semibold">Relationship to Applicant <span class="text-red-600">*</span></span>
                        <div class="flex items-center gap-6">
                            <label class="inline-flex items-center">
                                <input type="radio" name="co_signer_relationship" value="parent" />
                                <span class="ml-2">Parent</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="co_signer_relationship" value="guardian" />
                                <span class="ml-2">Guardian</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="co_signer_signature" class="block mb-1 font-semibold">Signature (Photo) <span class="text-red-600">*</span></label>
                    <input type="file" id="co_signer_signature" name="co_signer_signature" accept="image/*"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#E7AB39]" />
                </div>
            </fieldset>

            <div class="pt-4 flex justify-end">
                <button type="submit" class="bg-purple-700 text-white rounded-md px-6 py-3 hover:bg-purple-800 transition font-semibold">
                    Submit Application
                </button>
            </div>
        </form>
    </div>

    <script>
        function getAge(birthDateString) {
            const today = new Date();
            const birthDate = new Date(birthDateString);
            let age = today.getFullYear() - birthDate.getFullYear();
            const m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            return age;
        }

        document.addEventListener('DOMContentLoaded', function () {
            const birthDateInput = document.getElementById('birth_date');
            const coSignerSection = document.getElementById('coSignerSection');
            const coSignerName = document.getElementById('co_signer_name');
            const coSignerRelationships = document.getElementsByName('co_signer_relationship');
            const coSignerSignature = document.getElementById('co_signer_signature');
            const relationshipToAlt = document.getElementById('relationship_to_alt');

            function setRadioRequired(radios, required) {
                for (let i = 0; i < radios.length; i++) {
                    radios[i].required = required;
                }
            }

            function checkMinor() {
                const birthDate = birthDateInput.value;
                if (!birthDate) {
                    coSignerSection.classList.add('hidden');
                    coSignerName && coSignerName.removeAttribute('required');
                    setRadioRequired(coSignerRelationships, false);
                    coSignerSignature && coSignerSignature.removeAttribute('required');
                    return;
                }
                const age = getAge(birthDate);
                if (age < 18) {
                    coSignerSection.classList.remove('hidden');
                    coSignerName && coSignerName.setAttribute('required', 'required');
                    setRadioRequired(coSignerRelationships, true);
                    coSignerSignature && coSignerSignature.setAttribute('required', 'required');
                    if (relationshipToAlt && (!relationshipToAlt.value || !['parent','guardian'].includes(relationshipToAlt.value.toLowerCase()))) {
                        relationshipToAlt.value = 'Parent/Guardian';
                    }
                } else {
                    coSignerSection.classList.add('hidden');
                    coSignerName && coSignerName.removeAttribute('required');
                    setRadioRequired(coSignerRelationships, false);
                    coSignerSignature && coSignerSignature.removeAttribute('required');
                    if (relationshipToAlt && relationshipToAlt.value === 'Parent/Guardian') {
                        relationshipToAlt.value = '';
                    }
                }
            }

            birthDateInput.addEventListener('change', checkMinor);
            // Also check on page load in case value is prefilled
            checkMinor();
        });
    </script>
</x-layout>