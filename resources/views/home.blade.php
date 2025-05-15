<style>
    [data-carousel-slide-to][aria-current="true"] {
        background-color: #774383;
        opacity: 1;
    }
    [data-carousel-slide-to][aria-current="false"] {
        background-color: #502C58;
        opacity: 0.5;
    }

    #default-carousel .carousel-wrapper {
    height: 30rem;
    }
    @media (min-width: 768px) {
        #default-carousel .carousel-wrapper {
        height: 35rem;
        }
    }
</style>

<x-layout>
    <!-- Hero with Cat of the Day -->
    <section class="py-0">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-10">
                <div class="lg:w-1/2 text-center lg:text-left">
                    <h1 class="text-5xl font-extrabold text-[#502C58] sm:text-7xl">
                        <span class="text-[#2e2e2e]">For the cats of PUP,</span> we serve
                    </h1>
                    <p class="mt-4 text-lg text-gray-700 max-w-2xl">
                        <span class="font-bold text-[#E7AB39]">PUP Commeownity</span> is a student-led platform dedicated to caring for, protecting, and celebrating the campus cats of PUP.
                        From adoption to education, we’re building a digital home where advocacy meets action— <span class="font-bold text-[#E7AB39]">one paw at a time.</span>
                    </p>
                    <div class="mt-8 flex flex-wrap justify-end gap-4">
                        <a href="/register"
                            class="inline-block bg-[#502C58] text-white px-6 py-3 rounded-md text-sm font-semibold hover:bg-[#3f2247] transition">
                            Join Now
                        </a>
                        <a href="/about"
                            class="inline-block bg-[#48BDAC] text-white px-6 py-3 rounded-md text-sm font-semibold hover:bg-[#407c73] transition">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Cat of the Day Section -->
                <div class="lg:w-1/2 mt-10 lg:mt-0 text-center">
                    <img src="/images/cod-group.svg" alt="Cat of the Day" class="mx-auto w-full max-w-[550px]">
                </div>
            </div>
        </div>
    </section>

    <!-- News & Events Carousel -->
    <section class="w-full py-8" style="background-image: url('/images/carousel-waves.svg'); background-size: cover;">
        <div class="h-12"></div>
        <!-- Main content -->
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-5xl font-extrabold text-center mb-8">
                <span class="text-[#502C58]">News</span> <span class="text-[#ffffff]">&</span> <span class="text-[#502C58]">Events</span>
            </h2>
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative carousel-wrapper overflow-hidden rounded-lg">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="absolute w-full h-full flex flex-col">
                            <!-- Banner Image -->
                            <div class="relative w-full h-2/3">
                                <img src="/images/carousel-temp-1.jpg" class="w-full h-full object-cover" alt="News Item 1">
                            </div>
                            <!-- Content Area -->
                            <div class="w-full h-1/3 bg-white p-6 overflow-y-auto">
                                <h3 class="text-2xl font-bold text-[#502C58] mb-2">Latest Community Event Success</h3>
                                <p class="text-sm text-gray-500 mb-3">By Jane Smith</p>
                                <div class="text-gray-700 mb-4">
                                    <p class="mb-2">Our recent community gathering exceeded all expectations with over 300 attendees joining us for an afternoon of connection and celebration.</p>
                                    <p>The event featured local artists, food vendors, and activities for all ages, creating a vibrant atmosphere that truly embodied our community spirit.</p>
                                </div>
                                <button type="button" class="text-[#502C58] font-medium hover:underline flex items-center" data-modal-target="articleModal1" data-modal-toggle="articleModal1">
                                    Read more
                                    <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="absolute w-full h-full flex flex-col">
                            <!-- Banner Image -->
                            <div class="relative w-full h-2/3">
                                <img src="/images/carousel-temp-2.png" class="w-full h-full object-cover" alt="News Item 2">
                            </div>
                            <!-- Content Area -->
                            <div class="w-full h-1/3 bg-white p-6 overflow-y-auto">
                                <h3 class="text-2xl font-bold text-[#502C58] mb-2">New Partnership Announcement</h3>
                                <p class="text-sm text-gray-500 mb-3">By Michael Johnson</p>
                                <div class="text-gray-700 mb-4">
                                    <p class="mb-2">We're excited to announce our new strategic partnership with Green Futures Initiative, combining our resources to make a greater impact in sustainability efforts.</p>
                                    <p>This collaboration will focus on implementing eco-friendly practices across our community and creating educational opportunities for sustainable living.</p>
                                </div>
                                <button type="button" class="text-[#502C58] font-medium hover:underline flex items-center" data-modal-target="articleModal2" data-modal-toggle="articleModal2">
                                    Read more
                                    <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="absolute w-full h-full flex flex-col">
                            <!-- Banner Image -->
                            <div class="relative w-full h-2/3">
                                <img src="/images/carousel-temp-3.png" class="w-full h-full object-cover" alt="News Item 3">
                            </div>
                            <!-- Content Area -->
                            <div class="w-full h-1/3 bg-white p-6 overflow-y-auto">
                                <h3 class="text-2xl font-bold text-[#502C58] mb-2">Upcoming Workshop Series</h3>
                                <p class="text-sm text-gray-500 mb-3">By Sarah Williams</p>
                                <div class="text-gray-700 mb-4">
                                    <p class="mb-2">Join us for our new workshop series focused on professional development and personal growth, starting next month with six weekly sessions.</p>
                                    <p>Each workshop will be led by industry experts and will include practical exercises, networking opportunities, and take-home resources.</p>
                                </div>
                                <button type="button" class="text-[#502C58] font-medium hover:underline flex items-center" data-modal-target="articleModal3" data-modal-toggle="articleModal3">
                                    Read more
                                    <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="absolute w-full h-full flex flex-col">
                            <!-- Banner Image -->
                            <div class="relative w-full h-2/3">
                                <img src="/images/carousel-temp-4.jpg" class="w-full h-full object-cover" alt="News Item 4">
                            </div>
                            <!-- Content Area -->
                            <div class="w-full h-1/3 bg-white p-6 overflow-y-auto">
                                <h3 class="text-2xl font-bold text-[#502C58] mb-2">Annual Fundraiser Results</h3>
                                <p class="text-sm text-gray-500 mb-3">By Robert Chang</p>
                                <div class="text-gray-700 mb-4">
                                    <p class="mb-2">Thanks to your generosity, our annual fundraiser surpassed its goal by 40%, raising over $85,000 for our youth education programs.</p>
                                    <p>These funds will directly support scholarships, after-school activities, and new educational resources for underserved communities in our area.</p>
                                </div>
                                <button type="button" class="text-[#502C58] font-medium hover:underline flex items-center" data-modal-target="articleModal4" data-modal-toggle="articleModal4">
                                    Read more
                                    <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="absolute w-full h-full flex flex-col">
                            <!-- Banner Image -->
                            <div class="relative w-full h-2/3">
                                <img src="/images/carousel-temp-5.jpg" class="w-full h-full object-cover" alt="News Item 5">
                            </div>
                            <!-- Content Area -->
                            <div class="w-full h-1/3 bg-white p-6 overflow-y-auto">
                                <h3 class="text-2xl font-bold text-[#502C58] mb-2">Technology Innovation Award</h3>
                                <p class="text-sm text-gray-500 mb-3">By Eliza Martinez</p>
                                <div class="text-gray-700 mb-4">
                                    <p class="mb-2">We're proud to announce that our team has been recognized with the Regional Technology Innovation Award for our community engagement platform.</p>
                                    <p>This platform has connected over 5,000 members and facilitated more than 200 community projects since its launch last year.</p>
                                </div>
                                <button type="button" class="text-[#502C58] font-medium hover:underline flex items-center" data-modal-target="articleModal5" data-modal-toggle="articleModal5">
                                    Read more
                                    <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 top-[calc(66.67%-2.25rem)] left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button"
                        class="w-3 h-3 rounded-full bg-[#502C58] opacity-100"
                        aria-current="true"
                        aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button"
                        class="w-3 h-3 rounded-full bg-[#502C58] opacity-50"
                        aria-current="false"
                        aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button"
                        class="w-3 h-3 rounded-full bg-[#502C58] opacity-50"
                        aria-current="false"
                        aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button"
                        class="w-3 h-3 rounded-full bg-[#502C58] opacity-50"
                        aria-current="false"
                        aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button"
                        class="w-3 h-3 rounded-full bg-[#502C58] opacity-50"
                        aria-current="false"
                        aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>

                <!-- Slider controls -->
                <button type="button" class="absolute top-[-5.5rem] start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#502C58]/30 dark:bg-[#502C58]/30 group-hover:bg-[#502C58]/50 dark:group-hover:bg-[#502C58]/60 group-focus:ring-4 group-focus:ring-[#502C58]/70 dark:group-focus:ring-[#502C58]/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-black dark:text-[#774383] rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-[-5.5rem] end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#502C58]/30 dark:bg-[#502C58]/30 group-hover:bg-[#502C58]/50 dark:group-hover:bg-[#502C58]/60 group-focus:ring-4 group-focus:ring-[#502C58]/70 dark:group-focus:ring-[#502C58]/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-black dark:text-[#774383] rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>

    <!-- Be Updated Section -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between mb-10">
                <!-- Section Title -->
                <h2 class="text-5xl font-extrabold text-[#48BDAC] mb-4 md:mb-0 mr-4 md:flex md:items-baseline md:whitespace-nowrap">
                    <span class="text-gray-800">Be</span>
                    <span class="text-[#48BDAC]">Updated</span>
                </h2>

                <!-- Search Form -->
                <form role="search" action="/search" method="get" class="w-full max-w-md sm:max-w-xl md:max-w-2xl">
                    <label for="be-updated-search" class="sr-only">Search articles, events, and more</label>
                    <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" aria-hidden="true">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 19l-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input
                        type="search"
                        id="be-updated-search"
                        name="q"
                        class="block w-full pl-10 pr-24 py-3 text-sm text-gray-900 border border-primary rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-[#48BDAC] focus:border-transparent transition"
                        placeholder="Search for articles, events, and more…"
                        required
                        aria-label="Search for articles, events, and more"
                    />
                    <button
                        type="submit"
                        class="absolute inset-y-0 right-0 px-4 flex items-center text-sm font-medium text-white bg-[#48BDAC] rounded-r-lg hover:bg-[#48BDAC]/90 focus:outline-none focus:ring-2 focus:ring-[#48BDAC] focus:ring-offset-1 transition"
                    >
                        Search
                    </button>
                    </div>
                </form>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-6 rounded-lg shadow border border-gray-200 backdrop-blur-md bg-white/60 hover:bg-[#0a9396]/10">
                    <img src="/images/carousel-temp-1.jpg" class="w-full h-40 object-cover rounded-t-lg" alt="Card 1">
                    <h3 class="text-lg font-semibold text-[#502C58] mt-4">PUP Commeownity: A Year in Review</h3>
                    <p class="text-sm text-gray-500 mb-3">By Eliza Martinez</p>
                    <div class="text-gray-700 mb-4">
                        <p>We've grown to over 5,000 members in just a year.</p>
                    </div>
                    <button type="button" class="text-[#502C58] font-medium hover:underline flex items-center" data-modal-target="articleModal1" data-modal-toggle="articleModal1">
                        Read more
                        <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
                <div class="p-6 rounded-lg shadow border border-gray-200 backdrop-blur-md bg-white/60 hover:bg-[#0a9396]/10">
                    <img src="/images/carousel-temp-2.png" class="w-full h-40 object-cover rounded-t-lg" alt="Card 2">
                    <h3 class="text-lg font-semibold text-[#502C58] mt-4">From Stray to Adopted: The Story of Whiskers</h3>
                    <p class="text-sm text-gray-500 mb-3">By Jane Smith</p>
                    <div class="text-gray-700 mb-4">
                        <p>Whiskers found a forever home through our community.</p>
                    </div>
                    <button type="button" class="text-[#502C58] font-medium hover:underline flex items-center" data-modal-target="articleModal2" data-modal-toggle="articleModal2">
                        Read more
                        <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
                <div class="p-6 rounded-lg shadow border border-gray-200 backdrop-blur-md bg-white/60 hover:bg-[#0a9396]/10">
                    <img src="/images/carousel-temp-3.png" class="w-full h-40 object-cover rounded-t-lg" alt="Card 3">
                    <h3 class="text-lg font-semibold text-[#502C58] mt-4">Cat Cafe Launches New Menu</h3>
                    <p class="text-sm text-gray-500 mb-3">By Eliza Martinez</p>
                    <div class="text-gray-700 mb-4">
                        <p>We launched a new menu at our cat cafe.</p>
                    </div>
                    <button type="button" class="text-[#502C58] font-medium hover:underline flex items-center" data-modal-target="articleModal3" data-modal-toggle="articleModal3">
                        Read more
                        <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
                <div class="p-6 rounded-lg shadow border border-gray-200 backdrop-blur-md bg-white/60 hover:bg-[#0a9396]/10">
                    <img src="/images/carousel-temp-4.jpg" class="w-full h-40 object-cover rounded-t-lg" alt="Card 4">
                    <h3 class="text-lg font-semibold text-[#502C58] mt-4">Our Community Partners</h3>
                    <p class="text-sm text-gray-500 mb-3">By Jane Smith</p>
                    <div class="text-gray-700 mb-4">
                        <p>We partner with local businesses and organizations.</p>
                    </div>
                    <button type="button" class="text-[#502C58] font-medium hover:underline flex items-center" data-modal-target="articleModal4" data-modal-toggle="articleModal4">
                        Read more
                        <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
                <div class="p-6 rounded-lg shadow border border-gray-200 backdrop-blur-md bg-white/60 hover:bg-[#0a9396]/10">
                    <img src="/images/carousel-temp-5.jpg" class="w-full h-40 object-cover rounded-t-lg" alt="Card 5">
                    <h3 class="text-lg font-semibold text-[#502C58] mt-4">Cat of the Month: Meet Luna</h3>
                    <p class="text-sm text-gray-500 mb-3">By Eliza Martinez</p>
                    <div class="text-gray-700 mb-4">
                        <p>Luna is a beautiful calico cat who loves to cuddle.</p>
                    </div>
                    <button type="button" class="text-[#502C58] font-medium hover:underline flex items-center" data-modal-target="articleModal5" data-modal-toggle="articleModal5">
                        Read more
                        <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
                <div class="p-6 rounded-lg shadow border border-gray-200 backdrop-blur-md bg-white/60 hover:bg-[#0a9396]/10">
                    <img src="/images/carousel-temp-1.jpg" class="w-full h-40 object-cover rounded-t-lg" alt="Card 6">
                    <h3 class="text-lg font-semibold text-[#502C58] mt-4">TNR Efforts Continue</h3>
                    <p class="text-sm text-gray-500 mb-3">By Jane Smith</p>
                    <div class="text-gray-700 mb-4">
                        <p>We've spayed/neutered over 50 cats in the past month.</p>
                    </div>
                    <button type="button" class="text-[#502C58] font-medium hover:underline flex items-center" data-modal-target="articleModal6" data-modal-toggle="articleModal6">
                        Read more
                        <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Pagination -->
            <div class="mt-8 flex justify-center space-x-2 font-poppins">
                <button class="w-8 h-8 text-white bg-[#0a9396] rounded-full hover:bg-[#0a9396]/80 font-bold">1</button>
                <button class="w-8 h-8 text-[#0a9396] bg-white rounded-full hover:bg-[#0a9396]/20">2</button>
                <button class="w-8 h-8 text-[#0a9396] bg-white rounded-full hover:bg-[#0a9396]/20">3</button>
            </div>
        </div>
    </section>
</x-layout>
