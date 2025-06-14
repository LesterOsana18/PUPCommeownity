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

        <script>
            window.EVENTS_DATA = {};
            @foreach($currentEvents as $event)
                window.EVENTS_DATA[{{ $event['id'] }}] = @json($event);
            @endforeach
            window.isLoggedIn = {{ $user ? 'true' : 'false' }};
            window.userId = {{ $user ? $user->id : 'null' }};
            window.userName = {!! $user ? json_encode($user->first_name . ' ' . $user->last_name) : 'null' !!};
        </script>

        <div class="flex flex-col md:flex-col gap-8 px-6 lg:px-8 py-8 max-w-7xl mx-auto relative">
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-lg overflow-hidden max-w-7xl mx-auto w-full mb-10">
                <div class="bg-gradient-to-r from-[#502C58] to-[#3f2247] p-6 text-white">
                    <h2 class="text-2xl font-bold">Volunteer Roles</h2>
                </div>
                <div class="p-6 bg-white/80">
                    <ul class="space-y-6">
                        <li>
                            <h3 class="text-lg font-semibold text-[#502C58]">Event Coordinator</h3>
                            <p class="text-gray-700">
                                Organizes and manages events and activities for the organization, including planning, logistics, and volunteer coordination.
                            </p>
                        </li>
                        <li>
                            <h3 class="text-lg font-semibold text-[#502C58]">Foster Caregiver</h3>
                            <p class="text-gray-700">
                                Provides temporary homes and care for animals, ensuring their well-being until they are adopted.
                            </p>
                        </li>
                        <li>
                            <h3 class="text-lg font-semibold text-[#502C58]">Adoption Counselor</h3>
                            <p class="text-gray-700">
                                Assists prospective adopters through the adoption process, conducts interviews, and ensures suitable matches for animals.
                            </p>
                        </li>
                        <li>
                            <h3 class="text-lg font-semibold text-[#502C58]">Site Administrator</h3>
                            <p class="text-gray-700">
                                Manages the organization’s website, updates content, and ensures smooth online operations and communication.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>

            @include('events.current-events')
            @include('events.past-events')
        </div>
    </section>

    <script>
        function toggleModal(modalId) {
            document.getElementById(modalId).classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        }

        function openEventModal(eventId) {
            const data = window.EVENTS_DATA[eventId];
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
            document.getElementById('event-modal-volunteer-btn').setAttribute('data-event-id', data.id);
            // Progress bar
            const progress = Math.min(100, (data.current / data.target) * 100);
            document.getElementById('event-modal-progress').style.width = progress + '%';
            toggleModal('events-modal');
        }

        // Handle Volunteer Now button click
        function handleVolunteerNow(e) {
            if (window.isLoggedIn) {
                // Submit volunteer via AJAX
                const eventId = e.target.getAttribute('data-event-id');
                fetch(`/admin/events/${eventId}/volunteers`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        name: window.userName
                    })
                })
                .then(res => res.json())
                .then(data => {
                    alert('Thank you for volunteering!');
                    toggleModal('events-modal');
                    location.reload(); // Refresh to update volunteer count
                })
                .catch(err => {
                    alert('An error occurred while submitting your volunteer request.');
                });
            } else {
                window.location.href = "/register";
            }
        }
    </script>
</x-layout>

@include('components.modals.events')