<x-layout>
    <div class="px-4 py-12 text-left">
        <div class="max-w-7xl mx-auto px-6">
            <h1 class="text-3xl font-extrabold text-gray-900 mb-4">Adoption Application Form</h1>

            <p class="mb-8"><span class="text-red-600 font-bold">*</span> indicates required fields</p>

            <form method="POST" action="/application" class="space-y-8 max-w-4xl" id="adoptionForm">
            @csrf

            {{-- Name --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                <label for="first_name" class="block font-semibold mb-1">Name<span class="text-red-600">*</span></label>
                <input type="text" id="first_name" name="first_name" placeholder="First Name" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]" />
                </div>
                <div>
                <label for="last_name" class="block mb-1 invisible">Last Name</label>
                <input type="text" id="last_name" name="last_name" placeholder="Last Name" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]" />
                </div>
            </div>

            {{-- Address --}}
            <div>
                <label for="address" class="block font-semibold mb-1">Address<span class="text-red-600">*</span></label>
                <input type="text" id="address" name="address" required
                class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]" />
            </div>

            {{-- Phone and Email --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                <label for="phone" class="block font-semibold mb-1">Phone<span class="text-red-600">*</span></label>
                <input type="tel" id="phone" name="phone" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]" />
                </div>
                <div>
                <label for="email" class="block font-semibold mb-1">Email<span class="text-red-600">*</span></label>
                <input type="email" id="email" name="email" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]" />
                </div>
            </div>

            {{-- Birth Date and Occupation --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                <label for="birth_date" class="block font-semibold mb-1">Birth Date<span class="text-red-600">*</span></label>
                <input type="date" id="birth_date" name="birth_date" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]" />
                </div>
                <div>
                <label for="occupation" class="block font-semibold mb-1">Occupation</label>
                <input type="text" id="occupation" name="occupation"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]" />
                </div>
            </div>

            {{-- Company Business Name and Social Media Profile --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="company_business_name" class="block font-semibold mb-1">Company Business Name<span class="text-red-600">*</span></label>
                    <p class="text-xs italic text-gray-500 mb-1">Please type N/A if unemployed</p>
                    <input type="text" id="company_business_name" name="company_business_name" required
                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]" />
                    </div>
                <div>
                    <label for="social_media_profile" class="block font-semibold mb-1">Social Media Profile</label>
                    <p class="text-xs italic text-gray-500 mb-1">Please type N/A if you have no social media</p>
                    <input type="text" id="social_media_profile" name="social_media_profile" placeholder="Enter Facebook / X / Instagram link"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]" />
                </div>
            </div>

            {{-- Civil Status and Sex --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                <span class="block font-semibold mb-2">Civil Status<span class="text-red-600">*</span></span>
                <div class="flex items-center space-x-6">
                    <label class="inline-flex items-center">
                    <input type="radio" name="civil_status" value="single" required class="form-radio text-[#E7AB39]" />
                    <span class="ml-2">Single</span>
                    </label>
                    <label class="inline-flex items-center">
                    <input type="radio" name="civil_status" value="married" class="form-radio text-[#E7AB39]" />
                    <span class="ml-2">Married</span>
                    </label>
                    <label class="inline-flex items-center">
                    <input type="radio" name="civil_status" value="other" class="form-radio text-[#E7AB39]" />
                    <span class="ml-2">Other</span>
                    </label>
                </div>
                </div>
                <div>
                <span class="block font-semibold mb-2">Sex<span class="text-red-600">*</span></span>
                <div class="flex items-center space-x-6">
                    <label class="inline-flex items-center">
                    <input type="radio" name="sex" value="male" required class="form-radio text-[#E7AB39]" />
                    <span class="ml-2">Male</span>
                    </label>
                    <label class="inline-flex items-center">
                    <input type="radio" name="sex" value="female" class="form-radio text-[#E7AB39]" />
                    <span class="ml-2">Female</span>
                    </label>
                    <label class="inline-flex items-center">
                    <input type="radio" name="sex" value="other" class="form-radio text-[#E7AB39]" />
                    <span class="ml-2">Other</span>
                    </label>
                </div>
                </div>
            </div>

            {{-- What prompted you to adopt and Have you adopted before? --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                <span class="block font-semibold mb-2">What prompted you to adopt from our org?<span class="text-red-600">*</span></span>
                    <div class="grid grid-cols-2 gap-2">
                        <label class="inline-flex items-center space-x-2">
                            <input type="checkbox" name="adoption_prompt[]" value="friends" class="form-checkbox text-[#E7AB39]" />
                            <span>Friends</span>
                        </label>
                        <label class="inline-flex items-center space-x-2">
                            <input type="checkbox" name="adoption_prompt[]" value="social_media" class="form-checkbox text-[#E7AB39]" />
                            <span>Social Media</span>
                        </label>
                        <label class="inline-flex items-center space-x-2">
                            <input type="checkbox" name="adoption_prompt[]" value="website" class="form-checkbox text-[#E7AB39]" />
                            <span>Website</span>
                        </label>
                        <label class="inline-flex items-center space-x-2">
                            <input type="checkbox" name="adoption_prompt[]" value="posters" class="form-checkbox text-[#E7AB39]" />
                            <span>Posters</span>
                        </label>
                        <label class="inline-flex items-center space-x-2">
                            <input type="checkbox" name="adoption_prompt[]" value="other" class="form-checkbox text-[#E7AB39]" />
                            <span>Other</span>
                        </label>
                    </div>
                </div>
                <div>
                <span class="block font-semibold mb-2">Have you adopted from us before?<span class="text-red-600">*</span></span>
                <div class="flex items-center space-x-6">
                    <label class="inline-flex items-center">
                        <input type="radio" name="adopted_before" value="yes" required class="form-radio text-[#E7AB39]" />
                        <span class="ml-2">Yes</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="adopted_before" value="no" class="form-radio text-[#E7AB39]" />
                        <span class="ml-2">No</span>
                    </label>
                </div>
                </div>
            </div>

            {{-- Alternate Contact --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                <label for="alt_first_name" class="block font-semibold mb-1">Alternate Contact<span class="text-red-600">*</span></label>
                <input type="text" id="alt_first_name" name="alt_first_name" placeholder="First Name" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]" />
                </div>
                <div>
                <label for="alt_last_name" class="block mb-1 invisible">Last Name</label>
                <input type="text" id="alt_last_name" name="alt_last_name" placeholder="Last Name" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]" />
                </div>
            </div>

            <p class="text-xs italic text-gray-600 mb-4" id="minorNote">
                If the applicant is a minor, a parent or a guardian must be the alternate contact and co-sign the application.
            </p>

            {{-- Relationship to Alternate Contact --}}
            <div>
                <label for="relationship_to_alt" class="block font-semibold mb-1">Relationship to Alternate Contact<span class="text-red-600">*</span></label>
                <input type="text" id="relationship_to_alt" name="relationship_to_alt" required
                class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]" />
            </div>

            {{-- Phone and Email of Alternate Contact --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                <label for="phone_alt" class="block font-semibold mb-1">Phone of Alternate Contact<span class="text-red-600">*</span></label>
                <input type="tel" id="phone_alt" name="phone_alt" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]" />
                </div>
                <div>
                <label for="email_alt" class="block font-semibold mb-1">Email of Alternate Contact<span class="text-red-600">*</span></label>
                <input type="email" id="email_alt" name="email_alt" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]" />
                </div>
            </div>

            {{-- Co-Signer Section (hidden by default, shown if applicant is minor) --}}
            <div id="coSignerSection" class="hidden border border-yellow-400 bg-yellow-50 rounded-md p-4 mt-6">
                <h2 class="text-lg font-semibold mb-2 text-yellow-800">Parent/Guardian Co-Signer Details (required for minors)</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                    <div>
                        <label for="co_signer_name" class="block font-semibold mb-1">Co-Signer Full Name<span class="text-red-600">*</span></label>
                        <input type="text" id="co_signer_name" name="co_signer_name"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]" />
                    </div>
                    <div>
                        <span class="block font-semibold mb-1">Relationship to Applicant<span class="text-red-600">*</span></span>
                        <div class="flex items-center space-x-6">
                            <label class="inline-flex items-center">
                            <input type="radio" name="co_signer_relationship[]" value="parent" class="form-radio text-[#E7AB39]" />
                            <span class="ml-2">Parent</span>
                            </label>
                            <label class="inline-flex items-center">
                            <input type="radio" name="co_signer_relationship[]" value="guardian" class="form-radio text-[#E7AB39]" />
                            <span class="ml-2">Guardian</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="co_signer_signature" class="block font-semibold mb-1">Co-Signer Signature (Photo)<span class="text-red-600">*</span></label>
                    <input type="file" id="co_signer_signature" name="co_signer_signature" accept="image/*"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#E7AB39]" />
                </div>
            </div>

            <button type="submit" class="bg-purple-700 text-white rounded-md px-6 py-3 mt-6 hover:bg-purple-800 transition">
                Submit Application
            </button>
            </form>
        </div>
    </div>

    {{-- Script for minor logic --}}
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
            const altFirstName = document.getElementById('alt_first_name');
            const altLastName = document.getElementById('alt_last_name');
            const relationshipToAlt = document.getElementById('relationship_to_alt');
            const coSignerName = document.getElementById('co_signer_name');
            const coSignerRelationship = document.getElementById('co_signer_relationship');
            const coSignerSignature = document.getElementById('co_signer_signature');

            function checkMinor() {
                const birthDate = birthDateInput.value;
                if (!birthDate) {
                    coSignerSection.classList.add('hidden');
                    // Remove required attributes if not shown
                    coSignerName && coSignerName.removeAttribute('required');
                    coSignerRelationship && coSignerRelationship.removeAttribute('required');
                    coSignerSignature && coSignerSignature.removeAttribute('required');
                    return;
                }
                const age = getAge(birthDate);
                if (age < 18) {
                    coSignerSection.classList.remove('hidden');
                    // Make co-signer fields required
                    coSignerName && coSignerName.setAttribute('required', 'required');
                    coSignerRelationship && coSignerRelationship.setAttribute('required', 'required');
                    coSignerSignature && coSignerSignature.setAttribute('required', 'required');
                    // Suggest relationship to alternate contact
                    if (relationshipToAlt && (!relationshipToAlt.value || relationshipToAlt.value.toLowerCase() !== 'parent' && relationshipToAlt.value.toLowerCase() !== 'guardian')) {
                        relationshipToAlt.value = 'Parent/Guardian';
                    }
                } else {
                    coSignerSection.classList.add('hidden');
                    // Remove required attributes if not shown
                    coSignerName && coSignerName.removeAttribute('required');
                    coSignerRelationship && coSignerRelationship.removeAttribute('required');
                    coSignerSignature && coSignerSignature.removeAttribute('required');
                    // Clear the "Parent/Guardian" if user is not a minor
                    if (relationshipToAlt && relationshipToAlt.value === 'Parent/Guardian') {
                        relationshipToAlt.value = '';
                    }
                }
            }

            birthDateInput.addEventListener('change', checkMinor);
        });
    </script>
</x-layout>