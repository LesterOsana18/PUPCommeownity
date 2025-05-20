<div id="supporters-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 px-4">
    <div class="bg-white rounded-2xl shadow-xl p-6 w-full max-w-5xl max-h-[90vh] overflow-y-auto relative">
        <!-- Close Button -->
        <button onclick="toggleModal('supporters-modal')"
            class="absolute top-4 right-4 text-gray-500 hover:text-black text-2xl leading-none focus:outline-none">
            &times;
        </button>

        <!-- Modal Header -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-[#502C58]">Our Supporters & Donors</h2>
            <p class="text-gray-600">Organizations and individuals who support our mission</p>
        </div>

        <!-- Modal Content -->
        @php
            $supporters = [
                ['name' => 'PUP College of Engineering', 'initials' => 'PCE'],
                ['name' => 'Student Council', 'initials' => 'SC'],
                ['name' => 'Cat Lovers', 'initials' => 'CL'],
                ['name' => 'KindHeart', 'initials' => 'KH'],
                ['name' => 'Animal Clinic', 'initials' => 'AC'],
                ['name' => 'Donors', 'initials' => 'DN'],
                // Add more here as needed
            ];

            $messages = [
                'Your technical guidance and innovation inspire our work.',
                'Thank you for amplifying our voice to more students.',
                'We appreciate your love and support for every stray.',
                'Your generosity fuels our mission to protect animals.',
                'Compassion like yours makes real change happen.',
                'Your support keeps tails wagging and hearts purring.',
                // Add more here as needed
            ];
        @endphp

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($supporters as $index => $supporter)
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:bg-[#502C58]/10 hover:shadow-md transition-shadow h-full">
                    <div
                        class="h-12 w-12 bg-[#502C58] rounded-full flex items-center justify-center text-white font-bold mb-4">
                        {{ $supporter['initials'] }}
                    </div>
                    <h3 class="font-semibold text-lg text-[#502C58] mb-2">{{ $supporter['name'] }}</h3>
                    <p class="text-sm text-gray-600">{{ $messages[$index] ?? 'Thank you for supporting our cause.' }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</div>
