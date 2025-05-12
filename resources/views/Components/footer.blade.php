<footer class="bg-[#502C58] text-white px-6 py-8">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">

        <!-- Left column: logos + tagline + map -->
        <div class="flex flex-col space-y-4">
            <!-- Logos -->
            <div class="flex items-center space-x-2">
                <img src="/images/pup-logo.svg" alt="PUP Logo" class="h-20">
                <img src="/images/sintang-pusa-logo.svg" alt="Sintang Pusa Logo" class="h-20">
                <img src="/images/sintang-pusa-title.svg" alt="Sintang Pusa Title" class="h-20">
            </div>

            <!-- Tagline -->
            <p class="inline-block bg-[#E7AB39] font-semibold px-6 py-2 rounded-full w-full">
                For the cats of PUP, we serve
            </p>

            <!-- Map -->
            <div class="w-full rounded-lg overflow-hidden bg-[#3d2243] flex-shrink-0">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8181.291339801293!2d121.00257945568012!3d14.595926822042836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9dd976ededf%3A0xbaaa357c5585b8c2!2sPolytechnic%20University%20of%20the%20Philippines!5e0!3m2!1sen!2sph!4v1747059064980!5m2!1sen!2sph"
                class="w-full h-60"
                style="border:0;"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <!-- Middle column: Find Us & Operating Hours -->
        <div class="flex flex-col space-y-8">

            <!-- Find Us -->
            <div class="flex flex-col space-y-2">
                <h3 class="text-2xl font-bold text-[#E7AB39] mb-4">Find Us</h3>
                <div class="flex items-center space-x-2 text-sm">
                    <!-- placeholder icon -->
                    <div class="w-5 h-5 bg-[#E7AB39] rounded-sm"></div>
                    <span>Anonas Street, Sta. Mesa, Manila, Philippines</span>
                </div>
                <div class="flex items-center space-x-2 text-sm mt-2">
                    <!-- placeholder icon -->
                    <div class="w-5 h-5 bg-[#E7AB39] rounded-sm"></div>
                    <a href="mailto:pupsp.comss@gmail.com" class="underline hover:text-yellow-300">
                        pupsp.comss@gmail.com
                    </a>
                </div>
            </div>

            <!-- Operating Hours -->
            <div class="flex flex-col space-y-2">
                <h3 class="text-2xl font-bold text-[#E7AB39] mb-4">Operating Hours</h3>
                <table class="w-full text-left rounded-lg overflow-hidden shadow-md">
                    <thead class="bg-[#E7AB39] text-[#502C58]">
                        <tr>
                            <th class="px-4 py-2">Day</th>
                            <th class="px-4 py-2">Hours</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-[#502C58]">
                        <tr>
                            <td class="px-4 py-2">Weekdays</td>
                            <td class="px-4 py-2">9 AM &ndash; 6 PM</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Saturday</td>
                            <td class="px-4 py-2">9 AM &ndash; 5 PM</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Sunday</td>
                            <td class="px-4 py-2">Closed</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <!-- Right column: Social Media Icons -->
        <div class="flex flex-col md:flex-1 h-full">
            <div class="mt-auto w-full">
                <div class="flex flex-wrap justify-between gap-2">
                    <a href="#" class="w-12 h-12 bg-[#E7AB39] rounded-sm hover:bg-white transition"></a>
                    <a href="#" class="w-12 h-12 bg-[#E7AB39] rounded-sm hover:bg-white transition"></a>
                    <a href="#" class="w-12 h-12 bg-[#E7AB39] rounded-sm hover:bg-white transition"></a>
                    <a href="#" class="w-12 h-12 bg-[#E7AB39] rounded-sm hover:bg-white transition"></a>
                    <a href="#" class="w-12 h-12 bg-[#E7AB39] rounded-sm hover:bg-white transition"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom full-width: Copyright -->
    <div class="absolute bottom-0 left-0 right-0 bg-[#3d2243] text-center text-sm py-4">
        &copy; {{ date('Y') }} PUP Sintang Pusa. All rights reserved.
    </div>
</footer>


