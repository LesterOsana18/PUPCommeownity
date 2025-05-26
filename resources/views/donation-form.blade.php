<x-layout>
    <section class="max-w-4xl mx-auto px-6 mb-12">
        {{-- Success Confirmation Modal --}}
        @if(session('success'))
        <div
            x-data="{ show: true }"
            x-show="show"
            style="z-index:1000"
            class="mt-14 fixed inset-0 flex items-center justify-center bg-black bg-opacity-25 backdrop-blur-sm"
        >
            <div class="w-[770px] h-[500px] bg-white bg-opacity-80 rounded-2xl shadow-2xl border border-gray-300 p-8 mx-8 text-center relative flex flex-col items-center">
                <div class="absolute top-2 right-4">
                    <button @click="show = false" class="text-gray-600 hover:text-gray-900 text-2xl font-bold">&times;</button>
                </div>
                <div class="mb-6">
                    <span class="inline-block text-2xl align-middle">📩</span>
                    <span class="text-2xl font-extrabold text-[#502C58] align-middle">DONATION SUBMITTED!</span>
                </div>
                <img src="/images/donations-cat.jpg" alt="Cat" class="rounded-full w-32 h-32 mx-auto mb-6 border-4 border-white shadow-lg object-cover"/>
                <div class="text-lg text-gray-900">
                    <span class="font-bold italic block mb-6">Thank you for your generosity!</span>
                    <p class="mb-1 italic">
                        If you're donating cash, a confirmation email will be sent<br>once your donation has been received.
                    </p>
                    <p class="mb-1 italic">
                        For item donations (such as cat food, medical supplies, or<br> other goods), you'll receive an email with your appointment<br> date and time for drop-off at the campus.
                    </p>
                    <p class="italic">
                        We appreciate your support in caring for our campus cats! <span class="inline-block">🐾</span>
                    </p>
                </div>
            </div>
        </div>
        @endif

        <form method="POST"
                action="{{ url('/donation-form') }}"
                enctype="multipart/form-data"
                class="bg-white bg-opacity-30 backdrop-blur-md border border-gray-200 rounded-lg shadow-md p-8 grid grid-cols-1 gap-6">
            @csrf

            <h1 class="text-5xl font-extrabold text-[#502C58] mb-4 translate-y-1">
                Donation Form
            </h1>

            <!-- Full Name -->
            <div>
                <label for="full_name" class="block mb-2 text-sm font-medium text-gray-700">Full Name</label>
                <input
                    type="text"
                    name="full_name"
                    id="full_name"
                    placeholder="Enter your full name"
                    value="{{ old('full_name') }}"
                    required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
                @error('full_name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
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
                <label for="mobile_number" class="block mb-2 text-sm font-medium text-gray-700">Mobile Number</label>
                <input
                    type="text"
                    name="mobile_number"
                    id="mobile_number"
                    placeholder="Enter your mobile number"
                    value="{{ old('mobile_number') }}"
                    required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
                @error('mobile_number')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <!-- Donation Type -->
            <div>
                <label for="donation_type" class="block mb-2 text-sm font-medium text-gray-700">Donation Type</label>
                <select
                    name="donation_type"
                    id="donation_type"
                    required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
                    <option value="" disabled selected>Select donation type</option>
                    <option value="monetary">Monetary</option>
                    <option value="food">Food</option>
                    <option value="medicine">Medicine</option>
                    <option value="others">Others</option>
                </select>
                @error('donation_type')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <!-- Donation Amount -->
            <div id="donation-amount-field" class="hidden">
                <label for="donation_amount" class="block mb-2 text-sm font-medium text-gray-700">Donation Amount</label>
                <input
                    type="number"
                    name="donation_amount"
                    id="donation_amount"
                    placeholder="Enter donation amount"
                    min="1"
                    step="any"
                    class="w-full border border-gray-300 rounded-md px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
                @error('donation_amount')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <!-- Proof of Donation -->
            <div id="donation-proof-field" class="hidden">
                <label for="donation_proof" class="block mb-2 text-sm font-medium text-gray-700">Proof of Donation</label>
                <input
                    type="file"
                    name="donation_proof"
                    id="donation_proof"
                    accept="image/*"
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
                @error('donation_proof')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <!-- Donation Details -->
            <div>
                <label for="donation_details" class="block mb-2 text-sm font-medium text-gray-700">Donation Details</label>
                <input
                    type="text"
                    name="donation_details"
                    id="donation_details"
                    placeholder="Enter details about your donation"
                    value="{{ old('donation_details') }}"
                    required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >
                @error('donation_details')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <!-- Message or Note (Optional) -->
            <div>
                <label for="message" class="block mb-2 text-sm font-medium text-gray-700">Message or Note <i>(Optional)</i></label>
                <textarea
                    name="message"
                    id="message"
                    rows="4"
                    placeholder="Enter any message or note"
                    class="w-full border border-gray-300 rounded-md px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-[#502C58] focus:border-[#502C58] transition"
                >{{ old('message') }}</textarea>
            </div>

            <!-- Agreement and Submit Button -->
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input
                    type="checkbox"
                    name="agreement"
                    id="agreement"
                    required
                    class="h-4 w-4 text-[#502C58] border-gray-300 rounded focus:ring-[#502C58] transition">
                    <label for="agreement" class="ml-2 text-sm text-gray-700">
                        I agree to allow <b>PUP Sintang Pusa</b> to contact me regarding my donation.
                    </label>
                </div>

                <button
                    type="submit"
                    class="bg-[#502C58] text-white font-semibold px-6 py-2 rounded-md hover:bg-[#3f2247] transition">
                    Submit
                </button>
            </div>
        </form>
    </section>
    <script>
        // Toggle visibility of donation amount and proof fields based on donation type
        document.addEventListener('DOMContentLoaded', function () {
            const donationType = document.getElementById('donation_type');
            const amountField = document.getElementById('donation-amount-field');
            const proofField = document.getElementById('donation-proof-field');

            function toggleAmountField() {
                if (donationType.value === 'monetary') {
                    amountField.classList.remove('hidden');
                    proofField.classList.remove('hidden');
                } else {
                    amountField.classList.add('hidden');
                    proofField.classList.add('hidden');
                }
            }

            donationType.addEventListener('change', toggleAmountField);
            toggleAmountField(); // Set initial state on page load
        });

        // Modal functionality for success confirmation
        document.addEventListener('DOMContentLoaded', function () {
            var modal = document.getElementById('confirmation-modal');
            var closeBtn = document.getElementById('close-modal-btn');
            if(modal && closeBtn) {
                closeBtn.addEventListener('click', function() {
                    modal.style.display = 'none';
                });
                // Close on clicking outside the modal
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        modal.style.display = 'none';
                    }
                });
            }
        });
    </script>
</x-layout>

