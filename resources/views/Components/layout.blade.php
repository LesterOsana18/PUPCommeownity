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

        /* Applied via JavaScript when the footer is reached */
        .bg-image-container.content-bottom {
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen text-gray-800 font-poppins overflow-x-hidden">
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
</body>
</html>

