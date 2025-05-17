<x-layout>
    <section class="max-w-xl mx-auto px-4 py-12">

        <div
            class="max-w-xl w-full bg-white/20 backdrop-blur-lg border border-white/30 rounded-2xl shadow-xl p-8 transition-all duration-700 ease-in-out">

            <h1 class="text-4xl font-bold text-[#502C58] text-center mb-6">Seen a cat in need? 🐾</h1>
            <p class="text-center text-gray-700 mb-8">
                Help us help them — use this form to report any cat you've spotted on campus.
            </p>
            <form method="POST" action="/report" class="space-y-6">
                @csrf

                <div class="form-group">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                        Cat's Name
                    </label>
                    <input type="text" id="name" name="name" required placeholder="e.g., Whiskers"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#E7AB39] focus:border-[#E7AB39]">
                </div>

                <div class="form-group">
                    <label for="location" class="block text-sm font-medium text-gray-700 mb-1">
                        Location
                    </label>
                    <input type="text" id="location" name="location" required placeholder="e.g., Near Library"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#E7AB39] focus:border-[#E7AB39]">
                </div>
                <div class="form-group">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea id="description" name="description" rows="4" required
                        placeholder="Describe what the cat looked like or was doing."
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#E7AB39] focus:border-[#E7AB39]"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="bg-[#502C58] text-white px-6 py-3 rounded-md font-semibold hover:bg-[#3f2247] transition">
                        Submit Report
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
