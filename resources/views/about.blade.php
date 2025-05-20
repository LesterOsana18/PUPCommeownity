<x-layout>

    {{-- Hero Section --}}
    <section class="py-0">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-10">
                <div class="lg:w-1/2 text-center lg:text-left">
                    <h1 class="text-5xl font-extrabold text-[#502C58] sm:text-6xl">
                        <span class="text-[#2e2e2e]">Welcome to</span><br><span
                            class="text-4xl font-extrabold text-[#e7ab39] sm:text-5xl">PUP Sintang Pusa</span>
                    </h1>
                    <p class="mt-4 text-lg text-gray-700 max-w-2xl">
                        Protecting and caring for campus cats since 2019.
                    </p>
                    <div class="flex flex-wrap gap-3 mt-5">
                        <a href="#about-us"
                            class="px-5 py-2 bg-[#502C58] text-white font-medium rounded-lg hover:bg-[#3f2247] transition-colors">
                            Learn About Us
                        </a>
                        <a href="#support"
                            class="px-5 py-2 border-2 border-[#502C58] text-[#502C58] font-medium rounded-lg hover:bg-[#502C58] hover:text-white transition-colors">
                            Support Our Cause
                        </a>

                    </div>
                </div>

                <div id="slideshow" class="relative w-full max-w-xl lg:max-w-2xl mx-auto" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-96 overflow-hidden rounded-lg">
                        @foreach ([
                            [
                                'image' => '/images/carousel-temp-1.jpg',
                                'title' => 'Latest Community Event Success',
                            ],
                            [
                                'image' => '/images/carousel-temp-2.png',
                                'title' => 'New Partnership Announcement',
                            ],
                            [
                                'image' => '/images/carousel-temp-3.png',
                                'title' => 'Upcoming Workshop Series',
                            ],
                            [
                                'image' => '/images/carousel-temp-4.jpg',
                                'title' => 'Annual Fundraiser Results',
                            ],
                            [
                                'image' => '/images/carousel-temp-5.jpg',
                                'title' => 'Technology Innovation Award',
                            ],
                        ] as $index => $item)
                            <!-- Item {{ $index + 1 }} -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="absolute inset-0">
                                    <img src="{{ $item['image'] }}" class="absolute block w-full h-full object-cover"
                                        alt="{{ $item['title'] }}">
                                    <div
                                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-6">
                                        <h3 class="text-xl font-medium text-white">{{ $item['title'] }}</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-1/2 start-0 z-30 flex items-center justify-center h-full px-4 -translate-y-1/2 px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#502C58]/30 dark:bg-[#502C58]/30 group-hover:bg-[#502C58]/50 dark:group-hover:bg-[#502C58]/60 group-focus:ring-4 group-focus:ring-[#502C58]/70 dark:group-focus:ring-[#502C58]/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-black dark:text-[#774383] rtl:rotate-180"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-1/2 end-0 z-30 flex items-center justify-center h-full px-4 -translate-y-1/2 px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#502C58]/30 dark:bg-[#502C58]/30 group-hover:bg-[#502C58]/50 dark:group-hover:bg-[#502C58]/60 group-focus:ring-4 group-focus:ring-[#502C58]/70 dark:group-focus:ring-[#502C58]/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-black dark:text-[#774383] rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
    </section>

    <main class="flex flex-col md:flex-row gap-8 px-6 lg:px-8 py-8 max-w-7xl mx-auto relative">

        <!-- Main Content -->
        <div class="flex-1 space-y-10">

            <!-- About Us Section -->
            <section id="about-us" class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-[#502C58] to-[#3f2247] p-6 text-white">
                    <h1 class="text-3xl font-bold mb-1">About PUP Sintang Pusa</h1>
                    <p class="text-white/90">Our journey to protect and care for campus cats</p>
                </div>

                <div class="p-6 md:p-8 space-y-8">
                    <!-- Our Story -->
                    <div class="flex flex-col md:flex-row gap-6 items-center">
                        <div class="w-full lg:w-1/3 group">
                            <div
                                class="relative overflow-hidden rounded-xl shadow-lg aspect-[4/3] bg-gray-100 transition-all duration-300 ease-in-out transform group-hover:scale-105 group-hover:shadow-xl">
                                <!-- Image with grayscale effect that removes on hover -->
                                <img src="/images/legacy-pogi.jpg" alt="Pogi"
                                    class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 ease-in-out">
                                <!-- Bottom gradient overlay with text -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent flex flex-col justify-end p-4">
                                    <!-- Description text -->
                                    <p
                                        class="text-white/90 text-xs transition-all duration-500 delay-75 group-hover:translate-y-1 group-hover:opacity-100 opacity-90">
                                        Pogi, the tabby cat featured in our logo symbolizes our compassion and
                                        dedication to the PUPSP's mission and vision.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="md:w-2/3">
                            <h2 class="text-2xl font-bold text-[#502C58] mb-4 flex items-center">
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#502C58]/10 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#502C58]"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                Our Story
                            </h2>
                            <p class="text-gray-700 leading-relaxed">
                                PUP Sintang Pusa, established in 2019, began as a Facebook page dedicated to the campus
                                cats of PUP Sta. Mesa.
                                The group gained attention when Pogi, a beloved tabby, was tragically killed before his
                                adoption.
                                His death sparked a movement among students, faculty, and alumni to raise awareness and
                                protect the cats.
                                The organization, now comprised of faculty, staff, alumni, and students, is focused on
                                charitable efforts
                                to save and care for the remaining cats on campus, with Pogi's memory honored in its
                                logo.
                            </p>
                        </div>
                    </div>

                    <!-- Our Mission -->
                    <div>
                        <h2 class="text-2xl font-bold text-[#502C58] mb-6 flex items-center">
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#502C58]/10 mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#502C58]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </span>
                            Our Mission
                        </h2>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            We are committed to ensuring the welfare, safety, and visibility of PUP's campus cats
                            through:
                        </p>

                        <div class="flex flex-col lg:flex-row gap-8 items-start">
                            <ul class="list-inside text-gray-700 space-y-3 flex-1">
                                @foreach (['Raising awareness about the lives and needs of the cats', 'Providing daily feeding and medical care', 'Monitoring and safeguarding campus cats regularly', 'Managing donations to fund feeding, rescue, and health care efforts', 'Mobilizing volunteers to sustain operations and outreach', 'Building partnerships with organizations and the broader community', 'Launching fundraising projects to support our programs sustainably'] as $item)
                                    <li class="flex items-start">
                                        <span
                                            class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-[#502C58]/10 mr-3 mt-0.5 flex-shrink-0">
                                            <svg class="h-4 w-4 text-[#502C58]" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                        </span>
                                        <span>{{ $item }}</span>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="w-full lg:w-1/3 group">
                                <div
                                    class="relative overflow-hidden rounded-xl shadow-lg aspect-[4/3] bg-gray-100 transition-all duration-300 ease-in-out transform group-hover:scale-105 group-hover:shadow-xl">
                                    <!-- Image with grayscale effect that removes on hover -->
                                    <img src="/images/about-us-sample-pic-4.jpg" alt="PUP Sintang Pusa in Action"
                                        class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 ease-in-out">
                                    <!-- Bottom gradient overlay with text -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent flex flex-col justify-end p-4">
                                        <!-- Description text -->
                                        <p
                                            class="text-white/90 text-xs transition-all duration-500 delay-75 group-hover:translate-y-1 group-hover:opacity-100 opacity-90">
                                            Our team caring for the campus cats.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Leadership & Resources - Side by Side -->
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Team & Committees -->
                <section class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-[#502C58] to-[#3f2247] p-6 text-white border-b border-gray-200">
                        <h2 class="text-2xl font-bold mb-1">Our Leadership</h2>
                        <p class="text-white/90">Meet the passionate people behind Sintang Pusa</p>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Office</th>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Contact</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ([['Office of the President', 'op.pupsp2019@gmail.com'], ['Office of the VP', 'pupsp.comms@gmail.com'], ['Secretary General', 'sintangpusa2019@gmail.com'], ['Treasurer', 'sp.officeofthetreasurer@gmail.com'], ['Auditor', 'pupsp.officeoftheauditor@gmail.com']] as $entry)
                                    <tr class="hover:bg-[#48BDAC]/30 transition-colors">
                                        <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $entry[0] }}</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                            <a href="mailto:{{ $entry[1] }}"
                                                class="text-[#502C58] hover:underline">{{ $entry[1] }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="p-4 bg-gray-50 text-center flex items-center justify-center">
                        <button onclick="toggleModal('teams-modal')"
                            class="flex flex-center text-sm text-[#502C58] font-medium hover:underline focus:outline-none">
                            View all committees
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </section>

                <!-- Supporters Section -->
                <section
                    class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-lg overflow-hidden flex flex-col h-full">
                    <div class="bg-gradient-to-r from-[#502C58] to-[#3f2247] p-6 border-b border-gray-200 text-white">
                        <h2 class="text-2xl font-bold mb-1">Our Supporters</h2>
                        <p class="text-white/90">Organizations who believe in our mission</p>
                    </div>

                    <div class="p-4 grid grid-cols-2 sm:grid-cols-3 gap-4 flex-grow">
                        @foreach (['PUP Engineering', 'Student Council', 'Cat Lovers', 'KindHeart', 'Animal Clinic', 'Donors'] as $name)
                            <div class="text-center p-3 bg-gray-50 rounded-lg hover:bg-[#48BDAC]/30 transition-colors">
                                <div
                                    class="mx-auto w-12 h-12 bg-[#502C58] rounded-full flex items-center justify-center text-white font-semibold mb-3 text-base">
                                    {{ substr($name, 0, 1) }}
                                </div>
                                <h3 class="text-sm font-medium text-gray-800">{{ $name }}</h3>
                            </div>
                        @endforeach
                    </div>


                    <!-- CTA pinned at the bottom -->
                    <div class="p-4 bg-gray-50 text-center">
                        <button onclick="toggleModal('supporters-modal')"
                            class="inline-flex items-center text-sm text-[#502C58] font-medium hover:underline focus:outline-none">
                            View all supporters
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </section>

            </div>

            <!-- Educational Resources -->
            <section class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-[#502C58] to-[#3f2247] p-6 border-b border-gray-200 text-white">
                    <h2 class="text-2xl font-bold mb-1">Educational Resources</h2>
                    <p class="text-white/90">Learn more about cat care and welfare</p>
                </div>
                <div class="bg-white">
                    <div class="grid grid-cols-4 gap-0 border-b border-gray-200">
                        {{-- Should accomodate up to 3 only --}}
                        @php
                            $cards = [
                                [
                                    'image' => '/images/legacy-pogi.jpg',
                                    'title' => 'Cat Care Basics',
                                    'description' =>
                                        'Essential guide for new cat owners covering nutrition, grooming, and health.',
                                ],
                                [
                                    'image' => '/images/about-us-sample-pic-1.jpg',
                                    'title' => 'TNR Handbook',
                                    'description' =>
                                        'Complete guide to Trap-Neuter-Return programs for community cats.',
                                ],
                                [
                                    'image' => '/images/about-us-sample-pic-2.jpg',
                                    'title' => 'Feline First Aid',
                                    'description' =>
                                        'Emergency procedures and first aid tips for cat injuries and illnesses.',
                                ],
                                [
                                    'image' => '/images/about-us-sample-pic-3.jpg',
                                    'title' => 'Adoption Process',
                                    'description' =>
                                        'Step-by-step guide to our cat adoption procedures and requirements.',
                                ],
                            ];
                        @endphp

                        @foreach ($cards as $card)
                            <div
                                class="p-4 border-r border-b border-gray-200 hover:bg-[#48BDAC]/30 transition-colors flex flex-col h-full">
                                <!-- Image Container -->
                                <div class="h-32 bg-gray-100 rounded mb-3 flex items-center justify-center">
                                    <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}"
                                        class="h-full w-full object-cover rounded">
                                </div>
                                <!-- Title and Description -->
                                <div class="flex-grow min-h-[60px]">
                                    <h3 class="font-medium text-gray-800 text-sm mb-1">{{ $card['title'] }}</h3>
                                    <p class="text-xs text-gray-500 mb-1">{{ $card['description'] }}</p>
                                </div>
                                <a href="#" class="text-xs text-[#502C58] hover:underline mt-auto">View →</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="p-4 bg-gray-50 text-center flex items-center justify-center">
                    <button onclick="toggleModal('resources-modal')"
                        class="flex flex-center text-sm text-[#502C58] font-medium hover:underline focus:outline-none">
                        View all resources
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </span>
                    </button>
                </div>
            </section>

            <!-- Support Us Section -->
            <section id="support" class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-[#502C58] to-[#3f2247] p-6 text-white">
                    <h2 class="text-2xl font-bold mb-1">How You Can Help</h2>
                    <p class="text-white/90">Together, we can make PUP a safer, kinder home for cats</p>
                </div>

                <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ([
                        [
                            'title' => 'Volunteer',
                            'description' => 'Join us for feeding drives, cat monitoring, and special events.',
                            'link' => '/volunteer',
                            'image' => '/images/about-us-sample-pic-5.jpg',
                            'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z',
                        ],
                        [
                            'title' => 'Donate',
                            'description' => 'Contribute funds or supplies to sustain daily operations.',
                            'link' => '/donate',
                            'image' => '/images/about-us-sample-pic-4.jpg',
                            'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                        ],
                        [
                            'title' => 'Partner',
                            'description' => 'Collaborate with us to expand our programs and advocacy efforts.',
                            'link' => '/login',
                            'image' => '/images/about-us-sample-pic-3.jpg',
                            'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                        ],
                    ] as $action)
                        <div
                            class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all">
                            <!-- Main Image -->
                            <div class="h-48 flex items-center justify-center overflow-hidden">
                                <img src="{{ $action['image'] }}" alt="{{ $action['title'] }}"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center mb-3">
                                    <!-- SVG Thumbnail -->
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#502C58]/10 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#502C58]"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="{{ $action['icon'] }}" />
                                        </svg>
                                    </span>
                                    <h3
                                        class="text-xl font-semibold text-gray-800 group-hover:text-[#502C58] transition-colors">
                                        {{ $action['title'] }}
                                    </h3>
                                </div>
                                <p class="text-gray-600 text-sm mb-4">{{ $action['description'] }}</p>
                                <a href="{{ $action['link'] }}"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium rounded-lg text-white bg-[#502C58] hover:bg-[#3f2247] focus:outline-none focus:ring-2 focus:ring-[#502C58] transition-colors">
                                    {{ $action['title'] }} Now
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- Contact Section -->
            <section class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-[#502C58] to-[#3f2247] p-6 text-white">
                    <h2 class="text-2xl font-bold mb-1">Contact Us</h2>
                    <p class="text-white/90">Have questions or want to get involved? Reach out below.</p>
                </div>

                <div class="p-6 grid md:grid-cols-2 gap-8">
                    <!-- Contact Form -->
                    <form class="space-y-4" method="POST" action="#">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                            <input type="text" name="name"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#E7AB39] focus:ring focus:ring-[#E7AB39] focus:ring-opacity-50 p-2 border""
                                required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" name="email"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#E7AB39] focus:ring focus:ring-[#E7AB39] focus:ring-opacity-50 p-2 border""
                                required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea name="message" rows="4"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#E7AB39] focus:ring focus:ring-[#E7AB39] focus:ring-opacity-50 p-2 border""
                                required></textarea>
                        </div>
                        <button type="submit"
                            class="w-full py-2 px-4 bg-[#502C58] text-white font-medium rounded-lg hover:bg-[#3f2247] transition-colors">
                            Send Message
                        </button>
                    </form>

                    <!-- Contact Info -->
                    <div class="space-y-4 pt-10">
                        <div class="bg-gray-50 p-4 rounded-lg flex items-start">
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#502C58]/10 mr-3 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#502C58]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-gray-700 font-medium">Email</p>
                                <a href="mailto:pupsp.comss@gmail.com"
                                    class="text-[#502C58] hover:underline">pupsp.comss@gmail.com</a>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg flex items-start">
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#502C58]/10 mr-3 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#502C58]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-gray-700 font-medium">Location</p>
                                <p class="text-gray-600">PUP Sta. Mesa Campus, Manila</p>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg flex items-start">
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#502C58]/10 mr-3 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#502C58]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-gray-700 font-medium">Social Media</p>
                                <a href="https://facebook.com/SintangPusa" target="_blank"
                                    class="text-[#502C58] hover:underline">facebook.com/SintangPusa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer CTA -->
            <section class="bg-gradient-to-r from-[#502C58] to-[#3f2247] rounded-2xl p-8 text-white text-center">
                <div class="w-28 mx-auto mb-3">


                    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 384 384">
                        <defs>
                            <style>
                                .st0 {
                                    fill: #fff;
                                }

                                .st1 {
                                    fill: #e7ab39;
                                }
                            </style>
                        </defs>
                        <circle class="st1" cx="192" cy="192" r="187" />
                        <path class="st0"
                            d="M202.97,330.35c-.91-.74-1.67-2.93-1.59-4.14,1.39-23.09-1.7-48.05.02-70.92.52-6.92,3.11-14.12,7.47-19.52,17.71-16.4,38.07-29.87,56.97-44.91,5.57-22,1.92-48.99,24.03-62.33,14.92-9,30.94-9.68,35.63,10.14-2.38,42.48,9.94,88.26-20.19,123.38-18.45,21.51-43,24.94-48.37,57.56-.62,3.78.85,8.09-2.5,10.99l-51.47-.25ZM247.3,322.46c1.28-15.68,8.56-30.34,20.23-40.83,7-6.29,15.53-11,22.6-17.21,38.03-33.43,23.04-79.75,26.03-124.5-.7-7.26-6.93-9.9-13.45-7.66l-4.7,53.6c2.74,5.96,3.13,13.23-.88,18.74l-38.31,51.42c-3.63,3.96-9.37.78-7.97-4.58l39.8-53.99c2.2-5.69-2.8-10.84-8.49-7.82l-62.14,47.83c-3.36,2.73-9.13,10.94-9.13,15.16v69.83h36.43ZM293.18,138.28c-1.38-1.12-7.66,6.94-8.38,8.14-5.73,9.73-5.32,24.07-7.81,35.02,3.88-1.27,8.02-3.19,12.14-1.34l4.06-41.83h0Z" />
                        <path class="st0"
                            d="M117.93,190.74l51.43,39.31c7.79,6.52,12.43,15.01,13.2,25.26,1.74,23.07-1.38,48.27,0,71.57l-2.21,3.91-50.83-.18c-3.35-2.91-1.88-7.21-2.5-10.99-5.4-32.74-30.2-36.24-48.74-57.86-29.42-34.3-17.45-79.7-19.93-121.15,3.03-20.93,19.58-21.59,35.32-12.32,22.24,13.09,19.15,40.37,24.25,62.45h0ZM136.65,322.46h36.43v-69.83c0-4-5.48-12.27-8.76-14.85l-62.78-48.54c-5.73-2.18-10.38,2.62-8.21,8.22l39.8,53.99c1.4,5.36-4.34,8.54-7.97,4.58-13.35-18.93-28.68-36.69-40.8-56.36-.9-4.84-.5-9.4,1.6-13.81l-4.7-53.6c-6.52-2.25-12.75.4-13.45,7.66,3.03,44.13-11.94,90.66,25.35,123.82,10.74,9.55,23.13,15.43,31.91,27.46,6.71,9.19,10.45,19.89,11.6,31.25h0ZM95.26,141.2c-.53-.52-3.97-3.36-4.49-2.93l3.47,40.72.88.94c4.31-1.54,7.92.07,11.83,1.52-2.9-12.74-1.87-30.5-11.7-40.24h0Z" />
                        <path class="st0"
                            d="M193.15,113.42c3.19-.67,6.82,2.74,9.27,4.62,11.87,9.12,37.69,33.98,39.41,48.97,2.94,25.65-25.28,45.29-47.5,29.97-20.35,14.04-46.01-1.17-47.47-24.74-.96-15.38,17.23-34.22,27.9-44.13,2.55-2.37,16.21-14.25,18.39-14.71h0ZM193.8,124.17c-10.44,8.63-36.19,30.47-37.59,44.12-1.71,16.8,15.43,31.03,31.23,21.8,3.34-1.95,4.83-5.33,9.22-3.54,1.09.44,3.18,2.75,4.53,3.56,16.9,9.98,35.07-6.91,30.79-24.72-2.28-9.51-22.58-29.76-30.57-36.23-1.47-1.19-6.15-5.36-7.63-4.98Z" />
                        <path class="st0"
                            d="M139.17,106.72c25.24-4.31,29.38,31.89,7.1,35.44-24.27,3.87-28.41-31.8-7.1-35.44ZM143.06,115.71c-11.56,0-11.74,18.54,1.36,17.18,10.12-1.05,9.48-17.18-1.36-17.18Z" />
                        <path class="st0"
                            d="M241.72,106.72c25.13-4.31,29.12,31.9,7.1,35.44-24.38,3.91-28.49-31.76-7.1-35.44ZM251.8,130.63c8.85-8.85-6.41-21.2-13.27-11.59-6.65,9.33,6.13,18.73,13.27,11.59Z" />
                        <path class="st0"
                            d="M170.89,75.69c26.11-4.1,28.23,35.41,3.33,35.34-21.88-.07-23.75-32.12-3.33-35.34ZM167.91,87.22c-8.53,8.92,6.93,21.18,13.57,10.53,5.5-8.81-6.68-17.74-13.57-10.53Z" />
                        <path class="st0"
                            d="M210.69,75.69c26.33-4.52,28.59,35.71,3.32,35.34-21.89-.31-22.8-32-3.32-35.34ZM211.35,85.11c-9.06,2.07-6.31,18.95,4.97,16.44,10.58-2.36,7.92-19.39-4.97-16.44Z" />
                        <path class="st0"
                            d="M56.78,19.5c3.87-3.62,12.7-2.2,14.12,4.23,1.7,7.69,2.66,29.31-9.84,27.09-9.63-1.71-8.8-27.06-4.28-31.32Z" />
                        <path class="st0"
                            d="M23.78,52.6c3.52-2.86,28.05-3.44,30.01,2.92,4.39,14.26-17.62,14.56-26.49,11.8-6.56-2.04-8.68-10.54-3.52-14.74v.02Z" />
                        <path class="st0"
                            d="M76.93,51.26c5.56-1.27,24.54-1.99,26.73,4.55,4.41,13.25-13.41,13.32-22.1,12.32-12.65-1.45-13.69-14.78-4.63-16.87Z" />
                        <path class="st0"
                            d="M56.78,69.68c3.87-3.62,12.7-2.2,14.12,4.23,1.66,7.57,2.42,29.23-9.84,27.09-9.63-1.68-8.8-27.07-4.28-31.32Z" />
                        <path class="st0"
                            d="M139.84,53.39c8.89-1.95,8.16,11.88-.53,9.01-3.81-1.25-3.66-8.1.53-9.01Z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-4">Ready to make a difference?</h2>
                <p class="mb-6 max-w-2xl mx-auto">Join our community of cat lovers and help us protect PUP's campus
                    cats.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/volunteer"
                        class="px-6 py-2 bg-white text-[#502C58] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                        Become a Volunteer
                    </a>
                    <a href="/donate"
                        class="px-6 py-2 border-2 border-white text-white font-medium rounded-lg hover:bg-white hover:text-[#502C58] transition-colors">
                        Make a Donation
                    </a>
                </div>
            </section>
        </div>
    </main>

    <script>
        // Toggle modal visibility
        function toggleModal(modalId) {
            document.getElementById(modalId).classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        }

        // Close modal when clicking outside content
        window.addEventListener('click', function(event) {
            const modals = ['teams-modal', 'resources-modal', 'supporters-modal'];
            modals.forEach(modalId => {
                const modal = document.getElementById(modalId);
                if (event.target === modal) {
                    toggleModal(modalId);
                }
            });
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const modals = ['teams-modal', 'resources-modal', 'supporters-modal'];
                modals.forEach(modalId => {
                    const modal = document.getElementById(modalId);
                    if (!modal.classList.contains('hidden')) {
                        toggleModal(modalId);
                    }
                });
            }
        });
    </script>
</x-layout>

<!-- Modals -->
@include('components.modals.teams')
@include('components.modals.resources')
@include('components.modals.supporters')
