<div id="resources-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 px-4">
    <div class="bg-white rounded-2xl shadow-xl p-6 w-full max-w-5xl max-h-[90vh] overflow-y-auto relative">
        <!-- Close Button -->
        <button onclick="toggleModal('resources-modal')"
            class="absolute top-4 right-4 text-gray-500 hover:text-black text-2xl leading-none focus:outline-none">
            &times;
        </button>

        <!-- Modal Header -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-[#502C58]">Educational Resources</h2>
            <p class="text-gray-600">Complete collection of our learning materials</p>
        </div>

        <!-- Modal Content -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $resources = [
                    [
                        'title' => 'Cat Care Basics',
                        'description' => 'Essential guide for new cat owners covering nutrition, grooming, and health.',
                        'image' => asset('/images/legacy-pogi.jpg'),
                        'link' => '#',
                    ],
                    [
                        'title' => 'TNR Handbook',
                        'description' => 'Complete guide to Trap-Neuter-Return programs for community cats.',
                        'image' => asset('/images/about-us-sample-pic-1.jpg'),
                        'link' => '#',
                    ],
                    [
                        'title' => 'Feline First Aid',
                        'description' => 'Emergency procedures and first aid tips for cat injuries and illnesses.',
                        'image' => asset('/images/about-us-sample-pic-2.jpg'),
                        'link' => '#',
                    ],
                    [
                        'title' => 'Adoption Process',
                        'description' => 'Step-by-step guide to our cat adoption procedures and requirements.',
                        'image' => asset('/images/about-us-sample-pic-3.jpg'),
                        'link' => '#',
                    ],
                    [
                        'title' => 'Behavior Guide',
                        'description' => 'Understanding and correcting common feline behavior issues.',
                        'image' => asset('/images/about-us-sample-pic-4.jpg'),
                        'link' => '#',
                    ],
                    [
                        'title' => 'Volunteer Manual',
                        'description' => 'Handbook for PUP Cat Coalition volunteers with policies and procedures.',
                        'image' => asset('/images/about-us-sample-pic-5.jpg'),
                        'link' => '#',
                    ],
                    // Add more here as needed
                ];
            @endphp

            @foreach ($resources as $resource)
                <div
                    class="group flex flex-col h-full border border-gray-200 rounded-xl hover:bg-[#502C58]/10 overflow-hidden shadow-sm hover:shadow-lg transition-all">

                    <div class="w-full bg-gray-100 overflow-hidden relative aspect-video">
                        <img
                            src="{{ $resource['image'] }}"
                            alt="{{ $resource['title'] }}"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>

                    <div class="flex flex-col justify-between flex-1 p-4">
                        <div>
                            <h3
                                class="font-bold text-lg text-gray-700 mb-2 group-hover:text-[#502C58] transition-colors">
                                {{ $resource['title'] }}
                            </h3>
                            <p class="text-sm text-gray-600 line-clamp-3">
                                {{ $resource['description'] }}
                            </p>
                        </div>
                        <a href="{{ $resource['link'] }}"
                            class="mt-4 text-sm font-medium text-[#502C58] hover:text-[#3f2247] flex items-center transition-colors">
                            View Resource
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
