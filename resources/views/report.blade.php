<x-layout>
    <section class="max-w-xl mx-auto px-4 py-12">
        <h1 class="text-4xl font-bold text-[#502C58] text-center mb-6">Report a Cat</h1>
        <p class="text-center text-gray-700 mb-8">
            Use this form to report a cat that you have seen on campus.
        </p>

        <form method="POST" action="/report" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                    Cat's Name
                </label>
                <input type="text" id="name" name="name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#E7AB39] focus:border-[#E7AB39]">
            </div>

            <div>
                <label for="location" class="block text-sm font-medium text-gray-700 mb-1">
                    Location
                </label>
                <input type="text" id="location" name="location" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#E7AB39] focus:border-[#E7AB39]">
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">
                    Description
                </label>
                <textarea id="description" name="description" required rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#E7AB39] focus:border-[#E7AB39]"></textarea>
            </div>

            <div class="text-center">
                <button type="submit"
                        class="bg-[#502C58] text-white px-6 py-3 rounded-md font-semibold hover:bg-[#3f2247] transition">
                    Submit Report
                </button>
            </div>
        </form>
    </section>
</x-layout>
