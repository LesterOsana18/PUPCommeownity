<x-layout>
    <section class="max-w-3xl mx-auto px-4 py-12 text-center">
        <div>
            <h1 class="text-4xl font-bold text-[#502C58] mb-4">Adopt a Cat</h1>
            <p class="text-lg text-gray-700 mb-6">
                Welcome to the adoption page!
            </p>
            <p class="text-base text-gray-600 mb-4">
                Here you can find all the information you need to adopt a cat from our shelter.
            </p>
            <p class="text-base text-gray-600 mb-4">
                We have a variety of cats available for adoption, each with their own unique personality and story.
            </p>
            <p class="text-base text-gray-600">
                If you're interested in adopting a cat, please fill out the adoption application form below.
            </p><br>
        </div>

        <div class="grid md:grid-cols-2 gap-4 mb-12">
            <div class="bg-teal-100 p-6 rounded-lg text-center relative">
                <h2 class="text-xl font-bold mb-2">Give Back!</h2>
                <p class="text-sm mb-4">Your support would mean the world to us and the cats in our university.</p>
                <a href="/donate" class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-900 transition">Donate Now</a>
            </div>
            <div class="bg-yellow-100 p-6 rounded-lg text-center relative">
                <h2 class="text-xl font-bold mb-2">Interested?</h2>
                <p class="text-sm mb-4">See a cat and wonder if they're free to adopt?</p>
                <a href="#" class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-900 transition">Adopt Now</a>
            </div>
        </div>

        {{-- Available Cats --}}
        <section class="mb-16">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold">Available Cats in the University</h2>
                <select class="border rounded px-3 py-1 text-sm">
                    <option value="">Filter</option>
                </select>
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach(range(1,9) as $id)
                <a href="/catprofile" class="bg-white rounded-xl shadow p-4 text-center hover:bg-purple-50">
                    <img src="https://placecats.com/neo_banana/300/200" alt="Cat Photo" class="mx-auto rounded mb-2">
                    <p class="font-bold">Cat Name</p>
                    <p class="text-sm text-gray-600">Sex / Age</p>
                    <p class="text-xs text-gray-500">Other Info…</p>
                </a>
                @endforeach
            </div>
        </section>

        {{-- Previous Cats --}}
        <section class="mb-16">
            <h2 class="text-2xl font-semibold text-left mb-4">Previous Cats in the University</h2>
            <p class="text-sm text-gray-600 text-left mb-6">A gallery of campus cats that were previously in the campus and have since been adopted or released since!</p>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach(range(1,9) as $id)
                <a href="#" class="bg-white rounded-xl shadow p-4 text-center hover:bg-purple-50">
                    <img src="https://placecats.com/bella/300/200" alt="Cat Photo" class="mx-auto rounded mb-2">
                    <p class="font-bold">Cat Name</p>
                    <p class="text-sm text-gray-600">Sex / Age</p>
                    <p class="text-xs text-gray-500">Other Info…</p>
                </a>
                @endforeach
            </div>
        </section>

        {{-- Legacy Cats --}}
        <section class="mb-16">
            <h2 class="text-2xl font-semibold text-left mb-4">Legacy Cats in the University</h2>
            <p class="text-sm text-gray-600 text-left mb-6">A gallery of campus cats that have unfortunately passed away due to various circumstances, including a tabby cat named <em>Pogi</em>.</p>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach(range(1,3) as $id)
                <div class="bg-white rounded-xl shadow p-4 text-center hover:bg-purple-50">
                    <img src="https://placecats.com/g/300/200" alt="Legacy Cat" class="mx-auto grayscale rounded mb-2">
                    <p class="font-bold">Cat Name</p>
                    <p class="text-sm text-gray-600">XXXX - XXXX</p>
                </div>
                @endforeach
            </div>

            {{-- Pogi Tribute --}}
            <div class="mt-10 max-w-md mx-auto bg-white p-6 rounded-xl shadow text-center hover:bg-purple-50">
                <img src="/images/legacy-pogi.jpg" alt="Pogi" class="mx-auto grayscale rounded mb-4">
                <h3 class="font-bold text-lg">Pogi</h3>
                <p class="text-xs text-gray-600 mt-2">The tabby cat featured in our logo symbolizes our compassion and dedication to the PUPSP’s mission and vision.</p>
            </div>
        </section>
    </section>
</x-layout>
