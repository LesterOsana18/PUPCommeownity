<section class="py-0">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-10 relative z-10">
            <!-- Text Column -->
            <div class="lg:w-1/2 text-center lg:text-left relative z-10">
                <h1 class="text-5xl font-extrabold text-[#502C58] sm:text-7xl">
                    <span class="text-[#2e2e2e]">For the cats of PUP,</span> we serve
                </h1>
                <p class="mt-4 text-lg text-gray-700 max-w-2xl">
                    <span class="font-bold text-[#E7AB39]">PUP Commeownity</span> is a student-led platform dedicated to caring for, protecting, and celebrating the campus cats of PUP.
                    From adoption to education, we’re building a digital home where advocacy meets action— <span class="font-bold text-[#E7AB39]">one paw at a time.</span>
                </p>
                <div class="mt-8 flex flex-wrap justify-end gap-4">
                    <a href="/register"
                        class="inline-block bg-[#502C58] text-white px-6 py-3 rounded-md text-sm font-semibold hover:bg-[#3f2247] transition relative z-20">
                        <i class="fas fa-user-plus mr-1"></i>
                        Join Now
                    </a>
                    <a href="/about"
                        class="inline-block bg-[#48BDAC] text-white px-6 py-3 rounded-md text-sm font-semibold hover:bg-[#407c73] transition relative z-20">
                        <i class="fas fa-info-circle mr-1"></i>
                        Learn More
                    </a>
                </div>
            </div>

            <!-- Cat of the Day -->
            @php
                $day = strtolower(now()->addHours(8)->format('l'));
            @endphp

            <style>
                .cat-of-the-day img {
                    pointer-events: none;
                    max-width: 100%;
                    max-height: 400px;
                    overflow: hidden;
                }
            </style>

            <div class="cat-of-the-day relative z-0">
                <x-cat-of-the-day :day="$day" />
            </div>
        </div>
    </div>
</section>
