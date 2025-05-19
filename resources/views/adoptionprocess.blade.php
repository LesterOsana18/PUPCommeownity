<x-layout>
    <section class="max-w-3xl mx-auto px-4 py-12 text-center">
        <div>
            <h1 class="text-4xl font-bold text-[#502C58] mb-4">Adoption Process</h1>
            <p class="text-lg text-gray-700 mb-6">
                Welcome to the adoption process page!
            </p>
            <p class="text-base text-gray-600 mb-4">
                PUP Sintang Pusa is delighted to know that you are interested in adopting one of our campus cats!
            </p>
            <p class="text-base text-gray-600 mb-4">
                If you're interested in adopting a cat, please fill out the adoption application form below.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-8 bg-white p-6 rounded-lg shadow text-left">
            <h2 class="text-2xl font-bold text-gray-900 mb-2 text-center">Get Started</h2>
            <p class="mb-4">
                Our organization provides two main ways to adopt our campus cats, with <span class="font-bold">in-person</span> applications or <span class="font-bold">online</span> applications.
            </p>

            <div class="mb-6">
                <p class="font-semibold mb-1">For our <span class="font-bold">in-person</span> applications, follow these steps:</p>
                <ol class="list-decimal list-inside mb-4 pl-4 text-gray-800">
                    <li>Visit us at (?) with <a href="https://www.gsis.gov.ph/ginhawa-for-all/list-of-acceptable-valid-ids/" target="_blank" class="text-purple-700 underline">at least 2 Valid ID’s</a></li>
                    <li>Prepare for a brief interview with our staff for us to assess if you are fit to adopt one of our cats.</li>
                    <li>Visit your chosen pet to confirm your choice.</li>
                    <li>Pay the adoption fee of ₱500.00 per cat.</li>
                    <li>Take your pet home! You may also bring a carrier, but it is not required.</li>
                </ol>

                <p class="font-semibold mb-1">For our <span class="font-bold">online</span> applications, follow these steps:</p>
                <ol class="list-decimal list-inside pl-4 text-gray-800">
                    <li>Fill up the <a href="#" class="font-bold text-purple-800 underline">online application form</a> in our website.</li>
                    <li>Schedule an online meeting with our staff to your availability for a brief interview.</li>
                    <li>
                        Once the application form and the online interview have both been accomplished, set a date for you to visit the cat of your choice here at (?)
                    </li>
                    <li>Pay the adoption fee of ₱500.00 per cat, if not already paid.</li>
                    <li>Take your pet home! You may also bring a carrier, but it is not required.</li>
                </ol>
            </div>
        </div>


        <div class="mt-6 grid grid-cols-1 gap-8 bg-white p-6 rounded-lg shadow">
            <h2 class="text-2xl font-bold text-gray-900 mb-3">Questions about the adoption process?</h2>
            <p class="mb-5">
                You may visit our <a href="#" class="font-bold underline text-gray-900">Adoption FAQ</a> or you may also directly send us a question or message below!
            </p>
            <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-4">
                    <div>
                        <label for="name" class="block font-semibold mb-1">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-base focus:ring-2 focus:ring-purple-300 outline-none" />
                    </div>
                    <div>
                        <label for="email" class="block font-semibold mb-1">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-base focus:ring-2 focus:ring-purple-300 outline-none" />
                    </div>
                    <div>
                        <label for="phone" class="block font-semibold mb-1">Phone</label>
                        <input type="text" id="phone" name="phone" placeholder="Enter your phone number" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-base focus:ring-2 focus:ring-purple-300 outline-none" />
                    </div>
                </div>
                <div class="flex flex-col h-full">
                    <label for="message" class="block font-semibold mb-1">Question or Message</label>
                    <textarea id="message" name="message" placeholder="Enter your message here" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-base min-h-[160px] resize-none focus:ring-2 focus:ring-purple-300 outline-none"></textarea>
                    <div class="flex-1"></div>
                    <div class="flex justify-end mt-4">
                        <button type="submit" class="bg-purple-900 text-white font-semibold px-8 py-2 rounded-lg shadow hover:bg-purple-800 transition">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-layout>
