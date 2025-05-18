<x-layout>
    <main class="flex flex-col md:flex-row gap-8 px-4 md:px-12 py-8 max-w-7xl mx-auto">

        <!-- Main Content -->
        <div class="flex-1 space-y-16">

            <!-- About Us -->
            <section id="about-us" class="bg-white rounded-xl shadow-sm p-6 md:p-8">
                <div class="mb-8">
                    <h1 class="text-4xl font-bold text-[#502C58] mb-4">About PUP Sintang Pusa</h1>
                    <div class="h-1 w-20 bg-[#502C58] rounded-full mb-6"></div>
                </div>

                <div class="space-y-8">
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-[#502C58]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            Our Story
                        </h2>
                        <p class="text-gray-700 leading-relaxed">PUP Sintang Pusa, established in 2019, began as a Facebook page dedicated to the campus cats of PUP Sta. Mesa. The group gained attention when Pogi, a beloved tabby, was tragically killed before his adoption. His death sparked a movement among students, faculty, and alumni to raise awareness and protect the cats. The organization, now comprised of faculty, staff, alumni, and students, is focused on charitable efforts to save and care for the remaining cats on campus, with Pogi's memory honored in its logo.</p>
                    </div>

                    <!-- Mission Section -->
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-[#502C58]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            Our Mission
                        </h2>
                        <p class="text-gray-700 mb-6 leading-relaxed">We are committed to ensuring the welfare, safety, and visibility of PUP's campus cats through:</p>

                        <div class="flex flex-col lg:flex-row gap-8 items-start">
                            <ul class="list-inside text-gray-700 space-y-3 flex-1">
                                @foreach ([
                                    'Raising awareness about the lives and needs of the cats',
                                    'Providing daily feeding and medical care',
                                    'Monitoring and safeguarding campus cats regularly',
                                    'Managing donations to fund feeding, rescue, and health care efforts',
                                    'Mobilizing volunteers to sustain operations and outreach',
                                    'Building partnerships with organizations and the broader community',
                                    'Launching fundraising projects to support our programs sustainably'
                                ] as $item)
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-[#502C58] mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ $item }}</span>
                                </li>
                                @endforeach
                            </ul>
                            <div class="w-full lg:w-1/3">
                                <img src="#" alt="PUP Sintang Pusa" class="w-full h-auto rounded-lg shadow-md object-cover">
                                <p class="text-sm text-gray-500 mt-2 text-center">Our team caring for campus cats</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Team & Committees -->
            <section class="bg-white rounded-xl shadow-sm p-6 md:p-8">
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Our Leadership & Committees</h2>
                    <p class="text-gray-600">Meet the passionate people behind Sintang Pusa</p>
                    <div class="h-1 w-20 bg-[#502C58] rounded-full mt-3"></div>
                </div>

                <div class="overflow-x-auto rounded-lg border border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-[#502C58]">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Office/Committee</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Contact Email</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Person in Charge</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Role</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ([
                                ['Office of the President', 'op.pupsp2019@gmail.com', 'Yelen Nepomuceno', 'Event proposals, resolutions, memoranda'],
                                ['Office of the Vice President', 'pupsp.comms@gmail.com', 'Anna Maria J. Sengco', 'External inquiries and partnerships'],
                                ['Office of the Secretary General', 'sintangpusa2019@gmail.com', 'Kristylle Ann F. De Vera', 'Internal communications'],
                                ['Office of the Treasurer', 'sp.officeofthetreasurer@gmail.com', 'Shammyzel Ashley A. Lucina', 'Reimbursement reports'],
                                ['Office of the Auditor', 'pupsp.officeoftheauditor@gmail.com', 'Danna Althea S. Teh', 'Financial audits'],
                                ['Adoption & Fostering Committee', 'pupspadoptionandfoster23@gmail.com', 'Alaiza C. Dela Cruz', 'Adoption and foster arrangements'],
                                ['Cat Monitoring & Feeding Committee', 'pupsp.catmonfeedcomms@gmail.com', 'Kyla Marie Moral', 'Campus cat welfare monitoring'],
                                ['Creatives Committee', 'pupsp.creatives@gmail.com', 'Ivy Myuki S. Añovert', 'Visuals and content creation'],
                                ['Marketing Committee', 'pupsp.mktg@gmail.com', 'Martin Jay T. Pollicar', 'External outreach and sponsorships'],
                                ['Membership & Recruitment Committee', 'pupsp.membership@gmail.com', 'Rhea Janell H. Orocio', 'Volunteer and member management'],
                                ['Publications Committee', 'pubcom.pupsp@gmail.com', 'Reynalyn R. Bawag', 'Publication materials and releases'],
                            ] as $entry)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $entry[0] }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <a href="mailto:{{ $entry[1] }}" class="text-[#502C58] hover:underline">{{ $entry[1] }}</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $entry[2] }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $entry[3] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Educational Resources -->
            <section id="resources" class="bg-white rounded-xl shadow-sm p-6 md:p-8">
                <div class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Educational Resources</h2>
                    <div class="h-1 w-20 bg-[#502C58] rounded-full"></div>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach (range(1, 6) as $i)
                        <div class="group border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                            <div class="h-48 bg-gray-100 overflow-hidden">
                                <img src="#" alt="Resource {{ $i }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg text-gray-800 mb-2 group-hover:text-[#502C58] transition-colors">Resource Title {{ $i }}</h3>
                                <p class="text-sm text-gray-600 mb-4">Short description about the resource.</p>
                                <button class="text-sm text-[#502C58] font-medium hover:underline flex items-center">
                                    View Resource
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- Support Us -->
            <section class="bg-white rounded-xl shadow-sm p-6 md:p-8 space-y-8">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">How You Can Help</h2>
                    <div class="h-1 w-20 bg-[#502C58] rounded-full"></div>
                </div>

                <p class="text-gray-600 text-lg">Together, we can make PUP a safer, kinder home for cats.</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ([
                        ['Volunteer', 'Join us for feeding drives, cat monitoring, and special events.', '#'],
                        ['Donate', 'Contribute funds or supplies to sustain daily operations.', '#'],
                        ['Partner', 'Collaborate with us to expand our programs and advocacy efforts.', '#']
                    ] as $action)
                    <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                        <div class="h-48 bg-gray-100 overflow-hidden">
                            <img src="#" alt="{{ $action[0] }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ $action[0] }}</h3>
                            <p class="text-gray-600 text-sm mb-4">{{ $action[1] }}</p>
                            <a href="{{ $action[2] }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-[#502C58] hover:bg-[#3f2247] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#502C58] transition-colors">
                                {{ $action[0] }} Now
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="bg-white rounded-xl shadow-sm p-6 md:p-8 space-y-8">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Contact Us</h2>
                    <div class="h-1 w-20 bg-[#502C58] rounded-full"></div>
                </div>

                <p class="text-gray-600 text-lg">Have questions, suggestions, or want to get involved? Reach out to us below.</p>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Contact Form -->
                    <form class="space-y-5" method="POST" action="#">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                            <input type="text" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#502C58] focus:ring focus:ring-[#502C58] focus:ring-opacity-50 p-2 border" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#502C58] focus:ring focus:ring-[#502C58] focus:ring-opacity-50 p-2 border" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#502C58] focus:ring focus:ring-[#502C58] focus:ring-opacity-50 p-2 border" required></textarea>
                        </div>
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#502C58] hover:bg-[#3f2247] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#502C58] transition-colors">
                            Send Message
                        </button>
                    </form>

                    <!-- Static Contact Info -->
                    <div class="bg-gray-50 p-6 rounded-lg space-y-5">
                        <h3 class="text-lg font-semibold text-gray-800">Get in Touch</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#502C58] mr-3 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="text-gray-700 font-medium">Email</p>
                                    <a href="mailto:sintangpusa2019@gmail.com" class="text-[#502C58] hover:underline">sintangpusa2019@gmail.com</a>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#502C58] mr-3 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <div>
                                    <p class="text-gray-700 font-medium">Location</p>
                                    <p class="text-gray-600">PUP Sta. Mesa Campus, Manila</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#502C58] mr-3 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                                <div>
                                    <p class="text-gray-700 font-medium">Social Media</p>
                                    <a href="https://facebook.com/SintangPusa" class="text-[#502C58] hover:underline" target="_blank">facebook.com/SintangPusa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Supporters & Donors -->
            <section id="supporters" class="bg-white rounded-xl shadow-sm p-6 md:p-8 space-y-8">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Our Supporters & Donors</h2>
                    <div class="h-1 w-20 bg-[#502C58] rounded-full"></div>
                </div>

                <p class="text-gray-600 text-lg">We are grateful to the individuals and organizations who believe in our mission and continue to support us.</p>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach (['PUP College of Engineering', 'PUP Student Council', 'Cat Lovers Club', 'KindHeart Foundation', 'Local Animal Clinic', 'Anonymous Donors'] as $supporter)
                        <div class="border border-gray-200 rounded-lg p-5 hover:shadow-md transition-shadow">
                            <div class="h-12 w-12 bg-[#502C58] rounded-full flex items-center justify-center text-white font-bold mb-4">
                                {{ substr($supporter, 0, 1) }}
                            </div>
                            <h3 class="font-semibold text-lg text-[#502C58] mb-2">{{ $supporter }}</h3>
                            <p class="text-sm text-gray-600">Thank you for your continued support!</p>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </main>
</x-layout>
