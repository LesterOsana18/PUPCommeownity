<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table Scroll Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-screen-lg mx-auto p-4 bg-white shadow-md rounded-md">
        <h1 class="text-2xl font-bold text-[#502C58] mb-4">Scrollable Table</h1>

        <!-- SCROLLABLE CONTAINER -->
        <div class="overflow-x-auto">
            <table class="min-w-[1200px] table-auto border border-[#502C58] text-sm">
                <thead>
                    <tr>
                        @for ($i = 1; $i <= 15; $i++)
                            <th class="bg-[#E7AB39] text-[#502C58] font-bold px-4 py-2 border border-[#502C58]">Attr {{ $i }}</th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @for ($i = 1; $i <= 15; $i++)
                            <td class="px-4 py-2 border border-[#502C58]">Value {{ $i }}</td>
                        @endfor
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>