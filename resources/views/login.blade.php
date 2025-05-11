<x-layout>
    <section class="max-w-md mx-auto py-12 px-4">
        <h1 class="text-4xl font-bold text-center text-[#502C58] mb-8">Log in</h1>

        <form method="POST" action="/login" class="bg-white shadow-md rounded-md p-6 space-y-6">
            @csrf

            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    required
                    value="{{ old('email') }}"
                    class="w-full border border-gray-300 px-4 py-2 rounded-md focus:ring-[#E7AB39] focus:border-[#E7AB39] transition"
                >
            </div>

            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    required
                    class="w-full border border-gray-300 px-4 py-2 rounded-md focus:ring-[#E7AB39] focus:border-[#E7AB39] transition"
                >
            </div>

            <div class="text-center">
                <button type="submit"
                        class="bg-[#502C58] text-white font-semibold px-6 py-2 rounded-md hover:bg-[#3f2247] transition">
                    Log In
                </button>
            </div>
        </form>
    </section>
</x-layout>
