<x-layout>
    <main class="flex flex-col md:flex-row gap-8 px-4 md:px-12 py-8 max-w-7xl mx-auto">

        <!-- Main Content -->
        <div class="flex-1 space-y-12">

            <!-- About Us -->
            <section id="about-us">
                <h1 class="text-4xl font-bold text-[#502C58] mb-3">About PUP Sintang Pusa</h1>

                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Our Story</h2>
                    <p class="text-gray-700 mb-6">PUP Sintang Pusa, established in 2019, began as a Facebook page
                        dedicated to
                        the campus cats of PUP Sta. Mesa. The group gained attention when Pogi, a beloved tabby, was
                        tragically killed before his adoption. His death sparked a movement among students, faculty, and
                        alumni to raise awareness and protect the cats. The organization, now comprised of faculty,
                        staff, alumni, and students, is focused on charitable efforts to save and care for the remaining
                        cats on campus, with Pogi's memory honored in its logo.</p>
                </div>

                <!-- Mission Section -->
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Our Mission</h2>
                    <p class="text-gray-700 mb-4">We are committed to ensuring the welfare, safety, and visibility of
                        PUP's campus cats through:</p>

                    <div class="flex flex-col lg:flex-row gap-8 items-start">
                        <ul class="list-disc list-inside text-gray-700 space-y-2 flex-1">
                            <li>Raising awareness about the lives and needs of the cats;</li>
                            <li>Providing daily feeding and medical care;</li>
                            <li>Monitoring and safeguarding campus cats regularly;</li>
                            <li>Managing donations to fund feeding, rescue, and health care efforts;</li>
                            <li>Mobilizing volunteers to sustain operations and outreach;</li>
                            <li>Building partnerships with organizations and the broader community;</li>
                            <li>Launching fundraising projects to support our programs sustainably.</li>
                        </ul>
                        <img src=" " alt="PUP Sintang Pusa" class="w-full lg:w-1/3 rounded shadow-md">
                    </div>
                </div>
            </section>

            <!-- Team & Committees -->
            <section>
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Our Leadership & Committees</h2>
                <p class="text-gray-700 mb-4">Meet the passionate people behind Sintang Pusa:</p>

                <div class="overflow-x-auto">
                    <table class="min-w-full border text-sm text-left text-gray-700">
                        <thead class="bg-gray-100 text-gray-900 font-semibold">
                            <tr>
                                <th class="p-3 border">Office/Committee</th>
                                <th class="p-3 border">Contact Email</th>
                                <th class="p-3 border">Person in Charge</th>
                                <th class="p-3 border">Role</th>
                            </tr>
                        </thead>
                        <tbody>
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
                                <tr class="hover:bg-gray-50">
                                    <td class="p-3 border">{{ $entry[0] }}</td>
                                    <td class="p-3 border">{{ $entry[1] }}</td>
                                    <td class="p-3 border">{{ $entry[2] }}</td>
                                    <td class="p-3 border">{{ $entry[3] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Educational Resources -->
            <section id="resources">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Educational Resources</h2>
                <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3">
                    @foreach (range(1, 6) as $i)
                        <div class="bg-white border shadow rounded p-4 text-center">
                            <img src="#" alt="Resource {{ $i }}"
                                class="w-full h-40 object-cover mb-3">
                            <h3 class="font-bold text-lg">Resource Title {{ $i }}</h3>
                            <p class="text-sm text-gray-600">Short description about the resource.</p>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- Support Us -->
            <section class="space-y-6">
                <h2 class="text-2xl font-semibold text-gray-800">How You Can Help</h2>
                <p class="text-gray-600">Together, we can make PUP a safer, kinder home for cats. Here's how you can
                    support:</p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <!-- Volunteer -->
                    <div class="flex flex-col items-center text-center bg-white p-4 rounded-lg shadow">
                        <img src=" " alt="Volunteer Page" class="w-full max-h-[400px] object-cover">
                        <a
                            class="w-full bg-[#502C58] text-white px-6 py-3 rounded-md font-semibold hover:bg-[#3f2247] transition">
                            Volunteer
                        </a>
                        <p class="text-gray-600 text-sm">Join us for feeding drives, cat monitoring, and special events.
                        </p>
                    </div>

                    <!-- Donate -->
                    <div class="flex flex-col items-center text-center bg-white p-4 rounded-lg shadow">
                        <img src=" " alt="Donation Page" class="w-full max-h-[400px] object-cover">
                        <a
                            class="w-full bg-[#502C58] text-white px-6 py-3 rounded-md font-semibold hover:bg-[#3f2247] transition">
                            Donate
                        </a>
                        <p class="text-gray-600 text-sm">Contribute funds or supplies to sustain daily operations.</p>
                    </div>

                    <!-- Partner -->
                    <div class="flex flex-col items-center text-center bg-white p-4 rounded-lg shadow">
                        <img src=" " alt="Partnership Page" class="w-full max-h-[400px] object-cover">
                        <a
                            class="w-full bg-[#502C58] text-white px-6 py-3 rounded-md font-semibold hover:bg-[#3f2247] transition">
                            Partner
                        </a>
                        <p class="text-gray-600 text-sm">Collaborate with us to expand our programs and advocacy
                            efforts.</p>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="space-y-6">
                <h2 class="text-2xl font-semibold text-gray-800">Contact Us</h2>
                <p class="text-gray-600">Have questions, suggestions, or want to get involved? Reach out to us below.
                </p>

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Contact Form -->
                    <form class="space-y-4 bg-white p-6 rounded shadow" method="POST" action="#">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" class="mt-1 w-full border border-gray-300 rounded p-2"
                                required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" class="mt-1 w-full border border-gray-300 rounded p-2"
                                required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea name="message" rows="4" class="mt-1 w-full border border-gray-300 rounded p-2" required></textarea>
                        </div>
                        <button type="submit"
                            class="bg-[#502C58] text-white px-6 py-2 rounded hover:bg-[#3f2247] transition">
                            Send Message
                        </button>
                    </form>

                    <!-- Static Contact Info -->
                    <div class="bg-gray-50 p-6 rounded shadow space-y-4">
                        <h3 class="text-lg font-semibold text-gray-800">Get in Touch</h3>
                        <p class="text-gray-700">📧 Email: <a href="mailto:sintangpusa2019@gmail.com"
                                class="text-blue-600 hover:underline">sintangpusa2019@gmail.com</a></p>
                        <p class="text-gray-700">📍 Location: PUP Sta. Mesa Campus, Manila</p>
                        <p class="text-gray-700">💬 Facebook: <a href="https://facebook.com/SintangPusa"
                                class="text-blue-600 hover:underline" target="_blank">facebook.com/SintangPusa</a></p>
                    </div>
                </div>
            </section>

            <!-- Supporters & Donors -->
            <section id="supporters" class="space-y-6">
                <h2 class="text-2xl font-semibold text-gray-800">Our Supporters & Donors</h2>
                <p class="text-gray-600">We are grateful to the individuals and organizations who believe in our mission
                    and continue to support us.</p>

                <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach (['PUP College of Engineering', 'PUP Student Council', 'Cat Lovers Club', 'KindHeart Foundation', 'Local Animal Clinic', 'Anonymous Donors'] as $supporter)
                        <div class="bg-white border rounded p-4 shadow text-center">
                            <h3 class="font-semibold text-[#502C58] text-lg">{{ $supporter }}</h3>
                            <p class="text-sm text-gray-600">Thank you for your continued support!</p>
                        </div>
                    @endforeach
                </div>
            </section>


        </div>
    </main>
</x-layout>
