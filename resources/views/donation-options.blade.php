<x-layout>
    <section class="max-w-6xl mx-auto px-6 mb-12">
        <main class="bg-white bg-opacity-30 backdrop-blur-md border border-gray-200 rounded-lg shadow-md">
            <!-- Header -->
            <h1 class="text-5xl text-center font-extrabold text-[#E7AB39] mt-12 mb-4 text-outline-red" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">
                MONETARY DONATION OPTIONS
            </h1>

            <!-- Cards Grid -->
            @php
            $donateCards = [
                [
                    'img' => '/images/donate-gcash.jpg',
                    'alt' => 'Donate via GCash',
                    'title' => 'GCASH',
                    'name' => 'Charise Alberto',
                    'number' => '0929 243 6527',
                ],
                [
                    'img' => '/images/donate-maya.jpg',
                    'alt' => 'Donate via Maya',
                    'title' => 'MAYA',
                    'name' => 'Charise Alberto',
                    'number' => '0929 243 6527',
                ],
                [
                    'img' => '/images/donate-bank.png',
                    'alt' => 'Donate via Bank Transfer',
                    'title' => 'BANK TRANSFER',
                    'name' => 'For bank transfer,',
                    'number' => 'please contact us directly.',
                ],
            ];
            @endphp

            <div class="p-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($donateCards as $card)
                    <x-donate-card
                        :img="$card['img']"
                        :alt="$card['alt']"
                        :title="$card['title']"
                        :name="$card['name']"
                        :number="$card['number']"
                    />
                @endforeach
            </div>

            <!-- Button Style -->
            <div class="flex flex-col md:flex-row justify-center gap-4 mt-4 mb-12">
                <a href="/donate" class="inline-flex justify-center items-center h-12 w-64 mr-6 px-3 py-2 text-sm font-medium text-white bg-[#502C58] rounded-lg">
                    Back to Donations Page
                </a>
                <a href="/donation-form" class="inline-flex justify-center items-center h-12 w-64 ml-6 px-3 py-2 text-sm font-medium text-white bg-[#502C58] rounded-lg">
                    Continue to Donation Form
                </a>
            </div>
        </main>
    </section>
</x-layout>
