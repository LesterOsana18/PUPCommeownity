<x-layout>
    <section class="max-w-8xl mx-auto px-6 mb-12">
        <main class="bg-white bg-opacity-30 backdrop-blur-md border border-gray-200 rounded-lg shadow-md">
            <!-- Header -->
            <h1 class="text-5xl text-center font-extrabold text-[#E7AB39] mt-12 mb-5">
                WHAT WOULD YOU LOVE <br> TO GIVE TODAY?
            </h1>

            <!-- Cards Grid -->
            <div class="p-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach([
                    [
                        'img' => '/images/donations-monetary.jpg',
                        'alt' => 'Donate Cash',
                        'title' => 'DONATE CASH',
                        'desc' => 'Helps fund veterinary care, feeding supplies, and emergency needs for campus cats.',
                    ],
                    [
                        'img' => '/images/donations-food.jpeg',
                        'alt' => 'Donate Food',
                        'title' => 'DONATE FOOD',
                        'desc' => 'Provides daily nourishment for the rescued and community cats under the organization’s care.',
                    ],
                    [
                        'img' => '/images/donations-medicine.jpg',
                        'alt' => 'Donate Medicine',
                        'title' => 'DONATE MEDICINE',
                        'desc' => 'Supports treatment, vaccination, and first-aid needs for injured or sick cats.',
                    ],
                ] as $card)
                <div class="bg-white border border-gray-200 rounded-lg shadow-md text-center flex flex-col">
                    <a href="#">
                        <img src="{{ $card['img'] }}" class="rounded-t-lg w-full" alt="{{ $card['alt'] }}"/>
                    </a>
                    <div class="p-5 flex-1 flex flex-col">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-gray-900">{{ $card['title'] }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 flex-1">{{ $card['desc'] }}</p>
                        <a href="#" class="inline-flex justify-center items-center px-3 py-2 text-sm font-medium text-white bg-[#502C58] rounded-lg">
                            Learn more
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Button Style -->
            <div class="flex flex-col md:flex-row justify-center gap-4 mt-4 mb-12">
                <a href="#" class="inline-flex justify-center items-center h-12 w-64 mr-6 px-3 py-2 text-sm font-medium text-white bg-[#502C58] rounded-lg">
                    View Monetary Donation Options
                </a>
                <a href="#" class="inline-flex justify-center items-center h-12 w-64 ml-6 px-3 py-2 text-sm font-medium text-white bg-[#502C58] rounded-lg">
                    Continue to Donation Form
                </a>
            </div>
        </main>
    </section>
</x-layout>
