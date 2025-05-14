<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Commeownity') }}</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/commeownity-icon.svg') }}">

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

        /* Drop transition (before navigating away) */
        #transition-drop {
            position: fixed;
            inset: 0;
            z-index: 50;
            background-color: #3d2243;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translateY(-100%);
            transition:
                transform 0.8s cubic-bezier(0.22, 1, 0.36, 1),
                border-bottom-left-radius 0.8s cubic-bezier(0.22, 1, 0.36, 1),
                border-bottom-right-radius 0.8s cubic-bezier(0.22, 1, 0.36, 1);
            will-change: transform, border-bottom-left-radius, border-bottom-right-radius;
            border-bottom-left-radius: 99% 1000px;
            border-bottom-right-radius: 99% 1000px;
        }

        #transition-drop.active {
            transform: translateY(0%);
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        /* Upward transition (after page load) */
        #transition-up {
            position: fixed;
            inset: 0;
            z-index: 50;
            background-color: #3d2243;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translateY(0%);
            transition:
                transform 0.8s cubic-bezier(0.22, 1, 0.36, 1),
                border-bottom-left-radius 0.8s cubic-bezier(0.22, 1, 0.36, 1),
                border-bottom-right-radius 0.8s cubic-bezier(0.22, 1, 0.36, 1);
            will-change: transform, border-bottom-left-radius, border-bottom-right-radius;
        }

        #transition-up.hide {
            transform: translateY(-100%);
            border-bottom-left-radius: 99% 1000px;
            border-bottom-right-radius: 99% 1000px;
        }

        @keyframes pawBounce {
            0%, 100% {
                transform: translateY(0) scale(1);
            }
            50% {
                transform: translateY(-12px) scale(1.05);
            }
        }

        .paw-animate {
            animation: pawBounce 0.8s ease-in-out infinite;
            transform-origin: bottom center;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen text-gray-800 font-poppins overflow-x-hidden bg-white">
    <!-- Loader shown AFTER navigation (starts visible, goes up) -->
    <div id="transition-up">
        <div class="flex flex-col items-center">
            <h1 class="text-3xl font-bold text-white">Loading...</h1>
            <div class="mt-3 flex space-x-2">
                <img src="/images/loader-paw.svg" class="w-6 h-6 paw-animate" style="animation-delay: 0s;">
                <img src="/images/loader-paw.svg" class="w-6 h-6 paw-animate" style="animation-delay: 0.15s;">
                <img src="/images/loader-paw.svg" class="w-6 h-6 paw-animate" style="animation-delay: 0.3s;">
            </div>
        </div>
    </div>

    <!-- Loader shown BEFORE navigation (starts hidden, drops down) -->
    <div id="transition-drop">
        <div class="flex flex-col items-center">
            <h1 class="text-3xl font-bold text-white">Loading...</h1>
            <div class="mt-3 flex space-x-2">
                <img src="/images/loader-paw.svg" class="w-6 h-6 paw-animate" style="animation-delay: 0s;">
                <img src="/images/loader-paw.svg" class="w-6 h-6 paw-animate" style="animation-delay: 0.15s;">
                <img src="/images/loader-paw.svg" class="w-6 h-6 paw-animate" style="animation-delay: 0.3s;">
            </div>
        </div>
    </div>

    @include('components.navbar')

    <div class="py-12"></div>

    <div id="content-wrapper" class="flex-grow relative">
        <!-- Main content above the background -->
        <main class="relative z-0">
            {{ $slot }}
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
        document.addEventListener('DOMContentLoaded', () => {
            const dropLoader = document.getElementById('transition-drop');
            const upLoader = document.getElementById('transition-up');

            // On full page load, slide UP the visible loader
            window.addEventListener('load', () => {
                setTimeout(() => {
                    upLoader.classList.add('hide');
                }, 300); // Optional delay for visual continuity
            });

            // Intercept navigation and trigger drop-down loader
            document.querySelectorAll('a[href]:not([href^="#"]):not([target="_blank"])').forEach(link => {
                link.addEventListener('click', (e) => {
                    const href = link.getAttribute('href');

                    if (
                        href &&
                        (href.startsWith('/') ||
                        href.startsWith(window.location.origin) ||
                        !href.includes('://'))
                    ) {
                        e.preventDefault();

                        // Show drop loader
                        dropLoader.classList.add('active');

                        // Wait before redirecting
                        setTimeout(() => {
                            window.location.href = href;
                        }, 500);
                    }
                });
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>
</html>


