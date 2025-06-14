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

            @livewire('current-events')
            @livewire('past-events')
        </div>
    </section>
</x-layout>

@livewire('event-modal')