<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Commeownity') }}</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind Config Override -->
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
</head>
<body class="relative text-gray-800 font-poppins min-h-screen overflow-x-hidden">

    @include('components.navbar')

    <main class="container mx-auto p-4 relative z-0">
        {{ $slot }}
    </main>

    <!-- Background image -->
    <img src="/images/main-bg.svg"
        alt="Decorative background"
        class="fixed bottom-0 left-0 w-full max-w-full z-[-1] pointer-events-none select-none">

</body>
</html>
