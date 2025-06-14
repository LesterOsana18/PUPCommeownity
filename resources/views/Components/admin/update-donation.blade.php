<x-admin-layout>
    <div class="container mx-auto max-w-2xl p-8 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-bold mb-4 text-[#4ABDAC]">Edit Donation</h2>

        <a href="{{ route('tables') }}" class="inline-block mb-6 text-[#4ABDAC] hover:text-[#369688] font-semibold">
            ← Back to Donations
        </a>

        <form action="{{ route('donations.update', $donation->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Full Name -->
            <div class="mb-4">
                <label for="full_name" class="block text-gray-700">Full Name</label>
                <input id="full_name" name="full_name" type="text" class="form-input w-full" value="{{ old('full_name', $donation->full_name) }}" required>
                @error('full_name') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input id="email" name="email" type="email" class="form-input w-full" value="{{ old('email', $donation->email) }}" required>
                @error('email') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Mobile Number -->
            <div class="mb-4">
                <label for="mobile_number" class="block text-gray-700">Mobile Number</label>
                <input id="mobile_number" name="mobile_number" type="text" class="form-input w-full" value="{{ old('mobile_number', $donation->mobile_number) }}" required>
                @error('mobile_number') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Donation Type -->
            <div class="mb-4">
                <label for="donation_type" class="block text-gray-700">Donation Type</label>
                <select name="donation_type" id="donation_type" class="form-select w-full" required>
                    <option value="Monetary" {{ old('donation_type', $donation->donation_type) == 'Monetary' ? 'selected' : '' }}>Monetary</option>
                    <option value="Food" {{ old('donation_type', $donation->donation_type) == 'Food' ? 'selected' : '' }}>Food</option>
                    <option value="Medicine" {{ old('donation_type', $donation->donation_type) == 'Medicine' ? 'selected' : '' }}>Medicine</option>
                    <option value="Other" {{ old('donation_type', $donation->donation_type) == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('donation_type') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Donation Amount (Monetary Only) -->
            <div class="mb-4" id="amountGroup">
                <label for="donation_amount" class="block text-gray-700">Donation Amount (₱)</label>
                <input id="donation_amount" name="donation_amount" type="number" step="0.01" class="form-input w-full" value="{{ old('donation_amount', $donation->donation_amount) }}">
                @error('donation_amount') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Donation Proof (Monetary Only) -->
            <div class="mb-4" id="proofGroup">
                <label for="donation_proof" class="block text-gray-700">Donation Proof (Image)</label>
                @if (!empty($donation->donation_proof))
                    <div class="mb-2">
                        <span class="block text-sm text-gray-600 mb-1">Current proof:</span>
                        <img src="{{ asset('storage/' . $donation->donation_proof) }}" alt="Donation Proof" class="h-24 rounded border">
                    </div>
                @endif
                <input id="donation_proof" name="donation_proof" type="file" accept="image/*" class="form-input w-full">
                @error('donation_proof') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Donation Details -->
            <div class="mb-4">
                <label for="donation_details" class="block text-gray-700">Donation Details</label>
                <textarea id="donation_details" name="donation_details" class="form-input w-full">{{ old('donation_details', $donation->donation_details) }}</textarea>
                @error('donation_details') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Message (Optional) -->
            <div class="mb-4">
                <label for="message" class="block text-gray-700">Message (Optional)</label>
                <textarea id="message" name="message" class="form-input w-full">{{ old('message', $donation->message) }}</textarea>
                @error('message') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Agreement -->
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input id="agreement" name="agreement" type="checkbox" class="form-checkbox text-[#4ABDAC]" value="1" {{ old('agreement', $donation->agreement) ? 'checked' : '' }} required>
                    <span class="ml-2 text-gray-700">I agree to the terms and conditions.</span>
                </label>
                @error('agreement') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="mt-6 flex justify-end">
                <button type="submit" class="px-6 py-2 bg-[#4ABDAC] text-white rounded-lg font-semibold hover:bg-[#369688]">
                    Update Donation
                </button>
            </div>
        </form>
    </div>

    <script>
        // Show/hide donation amount and proof fields based on type
        function toggleMonetaryFields() {
            const type = document.getElementById('donation_type').value;
            document.getElementById('amountGroup').style.display = (type === 'Monetary') ? '' : 'none';
            document.getElementById('proofGroup').style.display = (type === 'Monetary') ? '' : 'none';
            // Set required attributes accordingly
            document.getElementById('donation_amount').required = (type === 'Monetary');
            document.getElementById('donation_proof').required = (type === 'Monetary' && !document.querySelector('#proofGroup img'));
        }

        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('donation_type').addEventListener('change', toggleMonetaryFields);
            toggleMonetaryFields();
        });
    </script>
</x-admin-layout>
