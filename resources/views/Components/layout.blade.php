<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Commeownity') }}</title>

    <!-- Include Tailwind CSS from CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Include Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind Config Override for Custom Fonts -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* Set custom positioning for the background image */
        .bg-image-container {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -10;
            pointer-events: none;
        }

        /* Applied when footer is reached */
        .bg-image-container.content-bottom {
            position: absolute;
            bottom: 0;
        }

        #transition-loader {
            position: fixed;
            inset: 0;
            z-index: 50;
            background-color: #FACC15; /* yellow-400 */
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom-left-radius: 50% 40px;
            border-bottom-right-radius: 50% 40px;
            transition: transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
            transform: translateY(-100%);
            will-change: transform;
        }

        #transition-loader.slide-down {
            transform: translateY(0);
        }

        #transition-loader.slide-up {
            transform: translateY(-100%);
        }
    </style>
</head>
<body class="flex flex-col min-h-screen text-gray-800 font-poppins overflow-x-hidden">
    <!-- Transition Screen Loader -->
    <div id="transition-loader" class="fixed inset-0 bg-yellow-400 z-50 flex items-center justify-center">
        <div class="flex flex-col items-center">
            <h1 class="text-3xl font-bold text-white">Loading...</h1>
            <div class="mt-3 flex space-x-2">
                <div class="w-3 h-3 bg-white rounded-full animate-bounce" style="animation-delay: 0s"></div>
                <div class="w-3 h-3 bg-white rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                <div class="w-3 h-3 bg-white rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
            </div>
        </div>
    </div>

    @include('components.navbar')

    <div id="content-wrapper" class="flex-grow relative">
        <!-- Main content above the background -->
        <main class="relative z-0">
            <div class="container mx-auto p-4">
                {{ $slot }}
            </div>
        </main>

        <!-- Background image with dynamic positioning -->
        <div id="bg-image" class="bg-image-container">
            <img src="/images/main-bg.svg" alt="Decorative background" class="w-full h-auto object-contain object-bottom">
        </div>
    </div>

    <footer id="main-footer" class="relative z-10">
        @include('components.footer')
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const bgImage = document.getElementById('bg-image');
            const contentWrapper = document.getElementById('content-wrapper');
            const footer = document.getElementById('main-footer');

            // Switch background image between fixed and absolute positioning
            function checkBackgroundPosition() {
                const footerRect = footer.getBoundingClientRect();
                const viewportHeight = window.innerHeight;

                // Change to absolute when footer is visible
                if (footerRect.top <= viewportHeight) {
                    bgImage.classList.add('content-bottom');
                } else {
                    bgImage.classList.remove('content-bottom');
                }
            }

            // Listen to scroll event
            window.addEventListener('scroll', checkBackgroundPosition);

            // Listen to resize event
            window.addEventListener('resize', checkBackgroundPosition);

            // Initial position check
            checkBackgroundPosition();
        });
    </script>

    <script>
        // Handle loader animations
        document.addEventListener('DOMContentLoaded', () => {
            const loader = document.getElementById('transition-loader');

            // Initial page load animation
            // Start with loader visible (slides down when page begins loading)
            loader.classList.add('slide-down');

            // Hide the loader when page is fully loaded
            window.addEventListener('load', () => {
                setTimeout(() => {
                    loader.classList.remove('slide-down');
                    loader.classList.add('slide-up');
                }, 600);
            });

            // Handle tab/navigation transitions
            document.querySelectorAll('.tab-button, a[href]:not([href^="#"]):not([target="_blank"])').forEach(element => {
                element.addEventListener('click', (e) => {
                    // Only handle internal navigation links
                    if (element.getAttribute('href') &&
                        (element.getAttribute('href').startsWith('/') ||
                        element.getAttribute('href').startsWith(window.location.origin) ||
                        !element.getAttribute('href').includes('://'))) {

                        e.preventDefault();
                        const targetUrl = element.getAttribute('href');

                        // Show loader (slide down)
                        loader.classList.remove('slide-up');
                        loader.classList.add('slide-down');

                        // Navigate after animation completes
                        setTimeout(() => {
                            window.location.href = targetUrl;
                        }, 400);
                    }
                });
            });
        });
    </script>
</body>
</html>

