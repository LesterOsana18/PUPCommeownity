<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Commeownity') }}</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/commeownity-icon.svg') }}">

    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css"/>

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
        html { scroll-behavior: smooth; }

        body { font-family: 'Poppins', sans-serif; }

        .bg-image-container {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -10;
            pointer-events: none;
        }
        .bg-image-container.content-bottom {
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen font-poppins">
    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content -->
    <div id="main-content" class="flex flex-col min-h-screen md:ml-64">
        <!-- Mobile Burger Menu -->
        <div class="md:hidden flex items-center p-4 bg-[#502C58] shadow-sm">
            <button id="sidebar-toggle-btn" class="text-white hover:text-[#E7AB39] focus:outline-none mr-2">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        <main class="flex-1 p-4 sm:p-6 md:p-8">
            {{ $slot }}
        </main>
        <div id="bg-image" class="bg-image-container">
            <img src="/images/main-bg.svg" alt="Decorative background" class="w-full h-auto object-contain object-bottom">
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            sidebar.classList.toggle('-translate-x-full');
            if (overlay) overlay.classList.toggle('hidden');
        }
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile burger menu
            const toggleBtn = document.getElementById('sidebar-toggle-btn');
            if(toggleBtn) {
                toggleBtn.addEventListener('click', toggleSidebar);
            }
            // Overlay click to close sidebar
            const overlay = document.getElementById('sidebar-overlay');
            if (overlay) {
                overlay.addEventListener('click', toggleSidebar);
            }
            // Submenu toggling
            document.querySelectorAll('.submenu-toggle').forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const submenu = this.nextElementSibling;
                    submenu.classList.toggle('hidden');
                });
            });
        });
    </script>
</body>
</html>