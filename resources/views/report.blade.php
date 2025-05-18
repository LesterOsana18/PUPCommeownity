<x-layout>
    <section class="max-w-xl mx-auto px-4 py-12">
        <div
            class="max-w-xl w-full
                    bg-white/20 backdrop-blur-lg border border-white/30
                    rounded-2xl shadow-xl
                    p-8">

            <div class="report-page-header">
                <img src="https://cdn-icons-png.flaticon.com/512/3360/3360417.png"
                    alt="Crying Cat Icon"
                    class="w-20 mb-2.5 block mx-auto">
                <h1 class="text-4xl font-bold text-[#502C58] text-center mb-6">Seen a cat in need?</h1>
                <p class="text-center text-gray-700 mb-8">
                    Help us help them — use this form to report any cat you've spotted on campus.
                </p>
            </div>

            <form method="POST" action="/report" class="space-y-6">
                <div> <!-- Basic Information -->
                    <h3 class="text-xl font-medium text-[#502C58] block mb-3">🐾 Basic Information</h3>

                    <!-- Required: Cat Description -->
                    <label
                        for="description"
                        class="block text-sm font-medium text-gray-700 mb-1">
                        Cat Description
                    </label>
                    <textarea
                        id="description"
                        name="description"
                        rows="2"
                        required
                        placeholder="e.g., color, size, breed if known, collar, behavior, etc."
                        class="w-full px-4 py-2
                                border border-gray-300 rounded-md
                                focus:outline-none focus:ring-1 focus:ring-[#E7AB39] focus:border-[#E7AB39]"></textarea>

                    <!-- Required: Location Seen -->
                    <label
                        for="location"
                        class="block text-sm font-medium text-gray-700 mb-1">
                        Location Seen
                    </label>
                    <input
                        type="text"
                        id="location"
                        name="location"
                        required
                        placeholder="e.g., Near Charlie Bldg., In Lagoon Park, Amphitheater, etc."
                        class="w-full px-4 py-2
                            border border-gray-300 rounded-md
                            focus:outline-none focus:ring-1 focus:ring-[#E7AB39] focus:border-[#E7AB39]">

                    <!-- Required: Date and Time Spotted -->
                    <label
                        for="seen-at"
                        class="block text-sm font-medium text-gray-700 mb-1">
                        Date & Time Spotted
                    </label>
                    <input
                        type="datetime-local"
                        id="seen-at"
                        name="seen-at"
                        required
                        class="w-full px-4 py-2
                            border border-gray-300 rounded-md
                            focus:outline-none focus:ring-1 focus:ring-[#E7AB39] focus:border-[#E7AB39]">
                </div>

                <div> <!-- Photo/Video Upload -->
                    <h3 class="text-xl font-medium text-[#502C58] block mb-3">📸 Photo Upload <span class="text-gray-400 text-sm">(optional but helpful)</span></h3>

                    <!-- Optional: File Upload -->
                    <label
                        for="media"
                        class="block text-sm font-medium text-gray-700 mb-1">
                        Upload Photo or Video
                    </label>
                    <p class="text-sm text-gray-500 mb-2">Accepted formats: JPG, PNG, MP4</p>
                    <input
                        type="file"
                        id="media"
                        name="media"
                        accept="image/*,video/*"
                        class="w-full px-4 py-2
                            border border-gray-300 rounded-md '
                            focus:outline-none focus:ring-1 focus:ring-[#E7AB39] focus:border-[#E7AB39]">
                </div>

                <div> <!-- Additional Details -->
                    <h3 class="text-xl font-medium text-[#502C58] block mb-3">📋 Additional Details</h3>

                    <!-- Optional: Condition/Behavior Observed -->
                    <label
                        for="observation"
                        class="block text-sm font-medium text-gray-700 mb-1">
                        Condition/Behavior Observed <span class="text-gray-400 text-sm">(optional)</span>
                    </label>
                    <textarea
                        id="observation"
                        name="observation"
                        rows="2"
                        required
                        placeholder="Was the cat injured, aggressive, friendly, scared, pregnant, with kittens, etc.?"
                        class="w-full px-4 py-2
                                border border-gray-300 rounded-md
                                focus:outline-none focus:ring-1 focus:ring-[#E7AB39] focus:border-[#E7AB39]"></textarea>

                    <!-- (Checkbox) Is this a recurring sight? -->
                    <label
                        for=""
                        class="block text-sm font-medium text-gray-700 mb-1">
                        Is this a recurring sight?
                    </label>
                    <p class="text-sm text-gray-500 mb-2">This will help us determine if the cat stays in the area.</p>
                    <div class="flex items-center space-x-6">
                        <label class="inline-flex items-center">
                            <input
                                type="radio"
                                name="injured"
                                value="yes"
                                class=" ">
                            <span class="ml-2 text-gray-700">Yes</span>
                        </label>

                        <label class="inline-flex items-center">
                            <input
                                type="radio"
                                name="injured"
                                value="no"
                                class=" ">
                            <span class="ml-2 text-gray-700">No</span>
                        </label>
                    </div>
                </div>

                <div> <!-- Reporter Information -->
                    <h3 class="text-xl font-medium text-[#502C58] block mb-3">👤 Reporter Information</h3>

                    <!-- Optional: Name -->
                    <label
                        for="reporter-name"
                        class="block text-sm font-medium text-gray-700 mb-1">
                        Name
                    </label>
                    <input
                        type="text"
                        id="reporter-name"
                        name="reporter-name"
                        {{-- required --}}
                        placeholder="Please enter your name"
                        class="w-full px-4 py-2
                            border border-gray-300 rounded-md
                            focus:outline-none focus:ring-1 focus:ring-[#E7AB39] focus:border-[#E7AB39]">

                    <!-- Optional: Email -->
                    <label
                        for="reporter-email"
                        class="block text-sm font-medium text-gray-700 mb-1">
                        Email Address
                    </label>
                    <input
                        type="text"
                        id="reporter-address"
                        name="reporter-address"
                        {{-- required --}}
                        placeholder="Please enter your email address"
                        class="w-full px-4 py-2
                            border border-gray-300 rounded-md
                            focus:outline-none focus:ring-1 focus:ring-[#E7AB39] focus:border-[#E7AB39]">

                    <!-- (Dropdown) Affiliation -->
                    <label
                        for="reporter-affiliation"
                        class="block text-sm font-medium text-gray-700 mb-1">
                        Affiliation
                    </label>
                    <select
                        id="reporter-affiliation"
                        name="reporter-affiliation"
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-1 focus:ring-[#E7AB39] focus:border-[#E7AB39]">
                            <option value="" disabled selected>Select your affiliation</option>
                            <option value="student">Student</option>
                            <option value="faculty">Faculty</option>
                            <option value="staff">Staff</option>
                            <option value="visitor">Visitor</option>
                    </select>
                </div>

                <div> <!-- Final Actions -->
                    <!-- Submit Report -->
                    <button type="submit"
                        class="bg-[#502C58] text-white px-6 py-3 rounded-md font-semibold hover:bg-[#3f2247] transition">
                        Submit Report
                    </button>

                    <!-- Privacy Notice (if needed) -->
                    <div class="flex items-start">
                        <input
                          type="checkbox"
                          id="privacy"
                          name="privacy"
                          required
                          class="h-4 w-4 text-[#E7AB39] focus:ring-[#E7AB39] border-gray-300 rounded"/>
                        <label
                            for="privacy"
                            class="ml-2 block text-sm text-gray-700">
                            I agree to the <a href="/privacy-policy" class="text-[#502C58] underline hover:text-[#3f2247]">privacy policy</a>.
                        </label>
                      </div>
                </div>
            </form>

        </div>
    </section>
</x-layout>
