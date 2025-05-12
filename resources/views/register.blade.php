<x-layout>
    <section class="max-w-4xl mx-auto py-16 px-6">
        <form method="POST"
                action="{{ url('/register') }}"
                enctype="multipart/form-data"
                class="bg-white bg-opacity-30 backdrop-blur-md border border-gray-200 rounded-lg shadow-md p-8 grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf

            <h1 class="text-5xl font-extrabold text-[#502C58] mb-7 translate-y-1 md:col-span-2">
                Registration
            </h1>

            <!-- First Name -->
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-700">First Name</label>
                <input
                    type="text"
                    name="first_name"
                    id="first_name"
                    placeholder="Enter your first name"
                    value="{{ old('first_name') }}"
                    required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
                @error('first_name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <!-- Last Name -->
            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-700">Last Name</label>
                <input
                    type="text"
                    name="last_name"
                    id="last_name"
                    placeholder="Enter your last name"
                    value="{{ old('last_name') }}"
                    required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
                @error('last_name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <!-- Middle Name -->
            <div>
                <label for="middle_name" class="block mb-2 text-sm font-medium text-gray-700">Middle Name</label>
                <input
                    type="text"
                    name="middle_name"
                    id="middle_name"
                    placeholder="Enter your middle name"
                    value="{{ old('middle_name') }}"
                    class="w-full border border-gray-300 rounded-md px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
            </div>

            <!-- Suffix -->
            <div>
                <label for="suffix" class="block mb-2 text-sm font-medium text-gray-700">Suffix</label>
                <input
                    type="text"
                    name="suffix"
                    id="suffix"
                    placeholder="Enter suffix (e.g., Jr., Sr., III)"
                    value="{{ old('suffix') }}"
                    class="w-full border border-gray-300 rounded-md px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
            </div>

            <!-- Email Address -->
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email Address</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Enter your email address"
                    value="{{ old('email') }}"
                    required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
                @error('email')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <!-- Mobile Number -->
            <div>
                <label for="mobile" class="block mb-2 text-sm font-medium text-gray-700">Mobile Number</label>
                <input
                    type="text"
                    name="mobile"
                    id="mobile"
                    placeholder="Enter your mobile number"
                    value="{{ old('mobile') }}"
                    required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
                @error('mobile')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <!-- Upload Profile Picture -->
            <div>
                <label for="profile_picture" class="block mb-2 text-sm font-medium text-gray-700">Upload Profile Picture</label>
                <input
                    type="file"
                    name="profile_picture"
                    id="profile_picture"
                    accept="image/*"
                    class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
                @error('profile_picture')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <!-- Address -->
            <div>
                <label for="address" class="block mb-2 text-sm font-medium text-gray-700">Address</label>
                <input
                    type="text"
                    name="address"
                    id="address"
                    placeholder="Enter your full address"
                    value="{{ old('address') }}"
                    required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
                @error('address')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Create a password"
                    required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
                @error('password')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-700">Confirm Password</label>
                <input
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    placeholder="Confirm your password"
                    required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
            </div>

            <!-- Preferred Volunteer Role -->
            <div>
                <label for="volunteer_role" class="block mb-2 text-sm font-medium text-gray-700">Preferred Volunteer Role</label>
                <select
                    name="volunteer_role"
                    id="volunteer_role"
                    required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 bg-white focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
                    <option value="" disabled selected>Choose a volunteer role</option>
                    {{-- @foreach($roles as $role) --}}
                    {{-- <option value="{{ $role->id }}">{{ $role->name }}</option>--}}
                    {{-- @endforeach --}}
                    <option value="event_coordinator">Event Coordinator</option>
                    <option value="foster_caregiver">Foster Caregiver</option>
                    <option value="adoption_counselor">Adoption Counselor</option>
                </select>
            </div>

            <!-- Availability -->
            <div>
                <label for="availability" class="block mb-2 text-sm font-medium text-gray-700">Availability</label>
                <select
                    name="availability"
                    id="availability"
                    required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 bg-white focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
                    <option value="" disabled selected>Select your available schedule</option>
                    <option value="weekdays_mornings">Weekdays – Mornings</option>
                    <option value="weekdays_evenings">Weekdays – Evenings</option>
                    <option value="weekends">Weekends</option>
                </select>
            </div>

            <!-- Motivation Statement -->
            <div class="md:col-span-2">
                <label for="motivation" class="block mb-2 text-sm font-medium text-gray-700">Motivation Statement</label>
                <textarea
                    name="motivation"
                    id="motivation"
                    rows="4"
                    placeholder="Share why you want to volunteer"
                    required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >{{ old('motivation') }}</textarea>
            </div>

            <!-- Terms & Conditions -->
            <div class="flex items-center md:col-span-2">
                <input
                    type="checkbox"
                    name="terms"
                    id="terms"
                    required
                    class="h-4 w-4 text-[#502C58] border-gray-300 rounded focus:ring-[#502C58] transition"
                >
                <label for="terms" class="ml-2 text-sm text-gray-700">
                    I agree to the <a href="#" class="text-[#502C58] underline">terms and conditions</a>
                </label>
            </div>

            <!-- Submit -->
            <div class="md:col-span-2 text-right">
                <button
                    type="submit"
                    class="bg-[#502C58] text-white font-semibold px-6 py-2 rounded-md hover:bg-[#3f2247] transition"
                >
                    Submit
                </button>
            </div>
        </form>
    </section>
</x-layout>

