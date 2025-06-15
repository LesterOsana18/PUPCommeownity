@php use Illuminate\Support\Str; @endphp

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
            <p class="text-base text-gray-600 mb-4">
                If you're just looking for the adoption application form,
                <a href="/application" class="text-purple-700 hover:text-purple-900 underline">click here</a>.
            </p><br>
        </div>

        <div class="grid md:grid-cols-2 gap-4 mb-12">
            <div class="bg-teal-100 p-6 rounded-lg text-center relative" >
                <div class="absolute inset-0 bg-cover bg-center rounded-lg" style="background-image: url('{{ asset('/images/donate-now-cat.jpg') }}');"></div>
                <div class="absolute inset-0 bg-teal-100 opacity-60 rounded-lg"></div>
                <div class="relative z-10">
                    <h2 class="text-xl font-bold mb-2">Give Back!</h2>
                    <p class="text-sm mb-4">Your support would mean the world to us and the cats in our university.</p>
                    <a href="/donate" class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-900 transition">Donate Now</a>
                </div>
            </div>
            <div class="bg-yellow-100 p-6 rounded-lg text-center relative">
                <div class="absolute inset-0 bg-cover bg-center rounded-lg" style="background-image: url('{{ asset('/images/adopt-now-cat.jpg') }}');"></div>
                <div class="absolute inset-0 bg-yellow-100 opacity-60 rounded-lg"></div>
                <div class="relative z-10">
                    <h2 class="text-xl font-bold mb-2">Interested?</h2>
                    <p class="text-sm mb-4">See a cat and wonder if they're free to adopt?</p>
                    <a href="/adoptionprocess" class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-900 transition">Adopt Now</a>
                </div>
            </div>
        </div>

        {{-- Available Cats --}}
        <section class="mb-16">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold">Available Cats in the University</h2>
                <p class="text-sm text-gray-600 text-left mb-6">
                    A gallery of campus cats that are ready for a loving home!
                    </p>
                {{-- <select class="border rounded px-3 py-1 text-sm">
                    <option value="">Filter</option>
                </select> --}}
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
                @forelse($cats as $cat)
                    <a class="bg-white rounded-xl shadow p-4 text-center hover:bg-purple-50">
                        @php
                            $path = $cat->photo_path;
                            $image = match (true) {
                                Str::startsWith($path, 'http') => $path,
                                Str::startsWith($path, 'images/') => asset($path),
                                Str::startsWith($path, 'cats/') => asset('images/' . $path),
                                default => asset('images/def-img.svg'),
                            };
                        @endphp
                        <img src="{{ $image }}" alt="{{ $cat->name }}" class="mx-auto rounded mb-2">
                        <p class="font-bold">{{ $cat->name }}</p>
                        <p class="text-sm text-gray-600">{{ ucfirst($cat->sex) }} / {{ $cat->age }} year{{ $cat->age == 1 ? '' : 's' }}</p>
                        <p class="text-xs text-gray-500">{{ $cat->breed }}, {{ $cat->color }}</p>
                        <p class="text-xs text-gray-500">Weight: {{ $cat->weight }}kg</p>
                        <p class="text-xs text-gray-500">Sterilized: {{ $cat->sterilized ? 'Yes' : 'No' }}</p>
                        <p class="text-xs text-gray-500">
                            Location:
                            <span class="font-bold underline text-gray-700">{{ $cat->location }}</span>
                        </p>
                        @if($cat->additional_remarks)
                            <br><p class="text-xs text-gray-500">
                                Additional Remarks:
                                <span class="font-bold text-gray-800">{{ $cat->additional_remarks }}</span>
                            </p>
                        @endif
                    </a>
                @empty
                    <p class="col-span-full text-gray-500">No cats available for adoption at this time.</p>
                @endforelse
            </div>
        </section>

        {{-- Previous Cats --}}
        <section class="mb-16">
            <h2 class="text-2xl font-semibold text-left mb-4">Previous Cats in the University</h2>
            <p class="text-sm text-gray-600 text-left mb-6">
            A gallery of campus cats that were previously in the campus and have since been adopted or released since!
            </p>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
                @forelse($previousCats as $cat)
                    @php
                        $path = $cat->photo_path;
                        $image = match (true) {
                            Str::startsWith($path, 'http') => $path,
                            Str::startsWith($path, 'images/') => asset($path),
                            Str::startsWith($path, 'cats/') => asset('images/' . $path),
                            default => asset('images/def-img.svg'),
                        };
                    @endphp
                    <div class="bg-white rounded-xl shadow p-4 text-center hover:bg-purple-50">
                        <img src="{{ $image }}" alt="{{ $cat->name }}" class="mx-auto rounded mb-2">
                        <p class="font-bold">{{ $cat->name }}</p>
                        <p class="text-sm text-gray-600">{{ ucfirst($cat->sex) }}{{ $cat->breed ? ' • ' . $cat->breed : '' }}{{ $cat->color ? ' • ' . ucfirst($cat->color) : '' }}</p>
                        <p class="text-xs text-gray-500">Adopted at age {{ $cat->age }}</p>
                        @if($cat->additional_remarks)
                            <p class="text-xs text-gray-500 mt-2 italic">{{ $cat->additional_remarks }}</p>
                        @endif
                    </div>
                @empty
                    <p class="col-span-full text-gray-500">No previous cats to show at this time.</p>
                @endforelse
            </div>
        </section>

        {{-- Legacy Cats --}}
        <section class="mb-16">
            <h2 class="text-2xl font-semibold text-left mb-4">Legacy Cats in the University</h2>
            <p class="text-sm text-gray-600 text-left mb-6">A gallery of campus cats that have unfortunately passed away due to various circumstances, including a tabby cat named <em>Pogi</em>.</p>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
                @forelse($deceasedCats as $cat)
                    @php
                        $path = $cat->photo_path;
                        $image = match (true) {
                            Str::startsWith($path, 'http') => $path,
                            Str::startsWith($path, 'images/') => asset($path),
                            Str::startsWith($path, 'cats/') => asset('images/' . $path),
                            default => asset('images/def-img.svg'),
                        };
                    @endphp
                    <div class="bg-white rounded-xl shadow p-4 text-center hover:bg-purple-50">
                        <img src="{{ $image }}" alt="{{ $cat->name }}" class="mx-auto grayscale rounded mb-2">
                        <p class="font-bold">{{ $cat->name }}</p>
                        <p class="text-sm text-gray-600">
                            Year of Death:
                            @if($cat->date_of_death)
                                {{ \Carbon\Carbon::parse($cat->date_of_death)->format('Y') }}
                            @else
                                ????
                            @endif
                        </p>
                        @if($cat->additional_remarks)
                            <p class="text-xs text-gray-500 mt-2 italic">{{ $cat->additional_remarks }}</p>
                        @endif
                    </div>
                @empty
                    <p class="col-span-full text-gray-500">No legacy cats at this time.</p>
                @endforelse
            </div>

            {{-- Pogi Tribute --}}
            <div class="mt-10 max-w-md mx-auto bg-white p-6 rounded-xl shadow text-center hover:bg-purple-50">
                <img src="/images/legacy-pogi.jpg" alt="Pogi" class="mx-auto grayscale rounded mb-4" loading="lazy">
                <h3 class="font-bold text-lg">Pogi</h3>
                <p class="text-xs text-gray-600 mt-2">The tabby cat featured in our logo symbolizes our compassion and dedication to the PUPSP’s mission and vision.</p>
            </div>
        </section>
    </section>
</x-layout>
