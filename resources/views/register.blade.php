<x-layout>
    <section class="max-w-md mx-auto py-16 px-6">
        <h1 class="text-4xl font-bold text-center text-[#502C58] mb-6">Create an Account</h1>
        <p class="text-center text-gray-600 mb-8">
            Join the Commeownity and start connecting with fellow cat lovers on campus.
        </p>

        <form method="POST" action="/register" class="bg-white shadow-md rounded-md p-6 space-y-6">
            @csrf

            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Full Name</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    required
                    value="{{ old('name') }}"
                    class="w-full border border-gray-300 px-4 py-2 rounded-md focus:ring-[#E7AB39] focus:border-[#E7AB39] transition"
                >
            </div>

            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email Address</label>
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

            <div>
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-700">Confirm Password</label>
                <input
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    required
                    class="w-full border border-gray-300 px-4 py-2 rounded-md focus:ring-[#E7AB39] focus:border-[#E7AB39] transition"
                >
            </div>

            <div class="text-center">
                <button type="submit"
                        class="bg-[#502C58] text-white font-semibold px-6 py-2 rounded-md hover:bg-[#3f2247] transition">
                    Register
                </button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <p class="text-sm text-gray-700">Already have an account?</p>
            <a href="/login"
                class="inline-block mt-2 border border-[#E7AB39] text-[#E7AB39] px-5 py-2 rounded-md text-sm font-semibold hover:bg-[#fff3d5] transition">
                Log In
            </a>
        </div>
    </section>
</x-layout>
