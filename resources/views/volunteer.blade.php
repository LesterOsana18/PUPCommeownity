<x-layout>
    <section class="mx-auto">
        <div class="max-w-3xl mx-auto px-4 py-12">
            <h1 class="text-4xl text-center font-bold text-[#502C58] mb-4">Volunteer</h1>
            <p class="text-lg text-center text-gray-700 mb-6">
                Welcome to the volunteer page!
            </p>
            <p class="text-base text-gray-600 mb-4">
                Join us in making a difference for the campus cats of PUP. We offer various opportunities for you to get involved and contribute to our cause.
            </p>
            <p class="text-base text-gray-600 mb-4">
                Whether you have a few hours to spare or want to commit to a regular schedule, we have roles that suit your availability and interests.
            </p>
            <p class="text-base text-gray-600 mb-10">
                Fill out the volunteer application form below to get started and become part of our Com-meow-nity!
            </p>
        </div>

        @php
            $events = [
                [
                    'title' => 'Paw-sitive Adoption Day',
                    'description' => 'Help our campus cats find loving forever homes through a one-day adoption drive featuring meet-and-greets and adoption education booths.',
                    'date' => 'June 20, 2025',
                    'time' => '9:00 AM',
                    'location' => 'Anonas St., Sta. Mesa, Manila',
                    'image' => '/images/about-us-sample-pic-1.jpg',
                    'current' => 12,
                    'target' => 20,
                ],
                [
                    'title' => 'Fur-tography Contest',
                    'description' => 'Show off your photography skills by capturing our feline residents at their finest. Winning entries will be featured on our official pages and printed for a charity exhibit!',
                    'date' => 'July 10, 2025',
                    'time' => '1:00 PM',
                    'location' => 'PUP Main Auditorium',
                    'image' => '/images/about-us-sample-pic-2.jpg',
                    'current' => 5,
                    'target' => 15,
                ],
                [
                    'title' => 'Whisker Wellness Week',
                    'description' => 'A week-long campaign offering free spay/neuter services, vet checkups, and a mini-seminar on feline health for both students and our campus cats.',
                    'date' => 'August 3-9, 2025',
                    'time' => 'Whole Day',
                    'location' => 'PUP Clinic',
                    'image' => '/images/about-us-sample-pic-3.jpg',
                    'current' => 18,
                    'target' => 25,
                ],
            ];
        @endphp

        <script>
            window.EVENTS_DATA = @json($events);
        </script>

        <div class="flex flex-col md:flex-col gap-8 px-6 lg:px-8 py-8 max-w-7xl mx-auto relative">
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-lg overflow-hidden max-w-7xl mx-auto mb-10">
                <div class="bg-gradient-to-r from-[#502C58] to-[#3f2247] p-6 text-white">
                    <h2 class="text-2xl font-bold">Current Events</h2>
                </div>

                <div class="pt-4 px-4 pb-0 grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($events as $i => $event)
                        @php
                            $current = $event['current'];
                            $target = $event['target'];
                            $progress = min(100, ($current / $target) * 100);
                        @endphp
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all">
                            <div class="h-48 flex items-center justify-center overflow-hidden">
                                <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="p-6">
                                <div class="flex flex-col items-center mb-3 w-full">
                                    <h3
                                        class="text-xl font-semibold text-gray-800 group-hover:text-[#502C58] transition-colors w-full text-left">
                                        {{ $event['title'] }}
                                    </h3>
                                    <div class="mt-2 flex flex-col items-center w-full">
                                        <div class="flex justify-center gap-x-4 mb-1 text-sm">
                                            <span class="font-semibold text-[#502C58]">
                                                Volunteers: <span class="font-bold">{{ $current }}</span>
                                            </span>
                                            <span class="font-semibold text-[#502C58]">
                                                Target: <span class="font-bold">{{ $target }}</span>
                                            </span>
                                        </div>
                                        <div class="w-4/5 bg-gray-200 rounded-full h-4">
                                            <div class="bg-[#502C58] h-4 rounded-full transition-all duration-500"
                                                style="width: {{ $progress }}%"></div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-gray-600 text-sm mb-4">{{ $event['description'] }}</p>
                                <button onclick="openEventModal({{ $i }})"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium rounded-lg text-white bg-[#502C58] hover:bg-[#3f2247] focus:outline-none focus:ring-2 focus:ring-[#502C58] transition-colors">
                                    Volunteer Now
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="p-6 flex justify-center space-x-2 font-poppins">
                    <button class="w-8 h-8 text-white bg-[#0a9396] rounded-full hover:bg-[#0a9396]/80 font-bold">1</button>
                    <button class="w-8 h-8 text-[#0a9396] bg-white rounded-full hover:bg-[#0a9396]/20">2</button>
                    <button class="w-8 h-8 text-[#0a9396] bg-white rounded-full hover:bg-[#0a9396]/20">3</button>
                </div>
            </div>

            <div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-lg overflow-hidden max-w-7xl mx-auto mb-10">
                <div class="bg-gradient-to-r from-[#502C58] to-[#3f2247] p-6 text-white">
                    <h2 class="text-2xl font-bold">Past Events</h2>
                </div>

                <div class="pt-4 px-4 pb-0 grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ([
                        [
                            'title' => 'Cat Café for a Cause',
                            'description' => 'Attendees enjoyed drinks and pastries while bonding with rescued cats in a cozy setup, raising funds for their food, shelter, and medical needs.',
                            'image' => '/images/about-us-sample-pic-4.jpg',
                        ],
                        [
                            'title' => 'TNR 101 Workshop',
                            'description' => 'We held an educational session that introduced the Trap-Neuter-Return method, emphasizing its importance in managing the campus cat population humanely.',
                            'image' => '/images/about-us-sample-pic-5.jpg',
                        ],
                        [
                            'title' => 'Meowmorial Day',
                            'description' => 'We honored our departed feline companions with a touching candle-lighting ceremony and a memorial wall where students shared photos and messages.',
                            'image' => '/images/carousel-temp-5.jpg',
                        ],
                    ] as $action)
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all">
                            <div class="h-48 flex items-center justify-center overflow-hidden">
                                <img src="{{ $action['image'] }}" alt="{{ $action['title'] }}"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="p-6">
                                <div class="flex flex-col items-start mb-3">
                                    <h3
                                        class="text-xl font-semibold text-gray-800 group-hover:text-[#502C58] transition-colors">
                                        {{ $action['title'] }}
                                    </h3>
                                </div>
                                <p class="text-gray-600 text-sm mb-4">{{ $action['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="p-6 flex justify-center space-x-2 font-poppins">
                    <button class="w-8 h-8 text-white bg-[#0a9396] rounded-full hover:bg-[#0a9396]/80 font-bold">1</button>
                    <button class="w-8 h-8 text-[#0a9396] bg-white rounded-full hover:bg-[#0a9396]/20">2</button>
                    <button class="w-8 h-8 text-[#0a9396] bg-white rounded-full hover:bg-[#0a9396]/20">3</button>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Toggle modal visibility
        function toggleModal(modalId) {
            document.getElementById(modalId).classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        }

        // Open event modal and fill content
        function openEventModal(eventIndex) {
            const data = window.EVENTS_DATA[eventIndex];
            if (!data) return;
            document.getElementById('event-modal-image').src = data.image;
            document.getElementById('event-modal-image').alt = data.title;
            document.getElementById('event-modal-title').textContent = data.title;
            document.getElementById('event-modal-date').textContent = data.date || '';
            document.getElementById('event-modal-time').textContent = data.time || '';
            document.getElementById('event-modal-location').textContent = data.location || '';
            document.getElementById('event-modal-description').textContent = data.description;
            document.getElementById('event-modal-current').textContent = data.current;
            document.getElementById('event-modal-target').textContent = data.target;
            // Progress bar
            const progress = Math.min(100, (data.current / data.target) * 100);
            document.getElementById('event-modal-progress').style.width = progress + '%';
            toggleModal('events-modal');
        }

        // Close modal when clicking outside content
        window.addEventListener('click', function(event) {
            const modals = ['events-modal'];
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
                const modals = ['events-modal'];
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

@include('components.modals.events')