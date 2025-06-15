<x-admin-layout>
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl text-[#502C58]">
            Moderation
            <b> / Report</b>
        </h1>
        <a href="/moderation"
            class="flex items-center rounded-lg px-4 py-2 bg-[#502C58] text-white text-sm font-semibold hover:bg-[#2e1a33]">
            <i class="fa-solid fa-arrow-left mr-2"></i> Back to Moderation
        </a>
    </div>

    <div class="space-y-6">
        <div class="rounded-xl bg-white/50 p-5 shadow-md border border-gray-200 space-y-4">
            <h2 class="text-lg font-bold text-[#502C58] flex items-center gap-2">
                <i class="fa-solid fa-circle-info text-[#502C58]"></i> Report Summary
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-sm">
                <div class="flex items-center gap-2">
                    <span class="font-bold">Status:</span>
                    <form action="{{ route('reports.resolve', $report->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit"
                            class="rounded-md px-3 py-1 font-semibold text-white text-xs
                                {{ $report->is_resolved ? 'bg-[#815F20] hover:bg-[#6b4d1a]' : 'bg-[#4ABDAC] hover:bg-[#379e9f]' }}">
                            {{ $report->is_resolved ? 'RESOLVED' : 'MARK AS RESOLVED' }}
                        </button>
                    </form>
                </div>
                <div class="flex items-center gap-2">
                    <span class="font-bold">Date & Time Spotted:</span>
                    <span>{{ \Carbon\Carbon::parse($report->seen_at)->format('F j, Y, g:i A') }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="font-bold">Report No.:</span>
                    <span>{{ $report->id }}</span>
                </div>
            </div>
        </div>

        <div class="rounded-xl bg-white/50 p-5 shadow-md border border-gray-200">
            <h2 class="text-lg font-bold text-[#502C58] mb-4 flex items-center gap-2">
                <i class="fa-solid fa-image text-[#502C58]"></i> Uploaded Media
            </h2>
            <div class="flex justify-center">
                <div class="w-full max-w-lg aspect-[3/2]">
                    @if ($report->media && file_exists(public_path('storage/' . $report->media)))
                        <img src="{{ asset('storage/' . $report->media) }}" alt="Cat Report"
                            class="w-full h-full object-cover rounded-lg border border-gray-300 shadow">
                    @else
                        <p class="text-center text-gray-500">No media uploaded or file missing.</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="rounded-xl bg-white/50 p-5 shadow-md border border-gray-200 space-y-3">
            <h2 class="text-lg font-bold text-[#502C58] flex items-center gap-2">
                <i class="fa-solid fa-cat text-[#502C58]"></i> Cat's Details
            </h2>
            <div>
                <p class="font-semibold">Description:</p>
                <p>{{ $report->description }}</p>
            </div>
            <div>
                <p class="font-semibold">Location:</p>
                <p>{{ $report->location }}</p>
            </div>
        </div>

        <div class="rounded-xl bg-white/50 p-5 shadow-md border border-gray-200 space-y-3">
            <h2 class="text-lg font-bold text-[#502C58] flex items-center gap-2">
                <i class="fa-solid fa-clipboard-list text-[#502C58]"></i> Additional Details
            </h2>
            <div>
                <p class="font-semibold">Condition/Behavior Observed:</p>
                <p>{{ $report->observation }}</p>
            </div>
            <div class="flex gap-2">
                <p class="font-semibold">Is this a Recurring Sight?</p>
                <p>{{ ucfirst($report->recurring) }}</p>
            </div>
        </div>

        <div class="rounded-xl bg-white/50 p-5 shadow-md border border-gray-200 space-y-3">
            <h2 class="text-lg font-bold text-[#502C58] flex items-center gap-2">
                <i class="fa-solid fa-user text-[#502C58]"></i> Reporter’s Details
            </h2>
            @if (!$report->privacy)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                    <div>
                        <p class="font-semibold">Name:</p>
                        <p>{{ $report->reporter_name }}</p>
                    </div>
                    <div>
                        <p class="font-semibold">Email:</p>
                        <p>{{ $report->reporter_email }}</p>
                    </div>
                    <div>
                        <p class="font-semibold">Affiliation:</p>
                        <p>{{ ucfirst($report->reporter_affiliation) }}</p>
                    </div>
                </div>
            @else
                <p class="italic text-gray-500">Reporter chose to stay anonymous.</p>
            @endif
        </div>
    </div>
</x-admin-layout>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.status-toggle').forEach(function(btn) {
            btn.addEventListener('click', function() {
                const openText = btn.getAttribute('data-open-text');
                const closedText = btn.getAttribute('data-closed-text');
                const openClass = btn.getAttribute('data-open-class');
                const closedClass = btn.getAttribute('data-closed-class');
                if (btn.textContent.trim() === openText) {
                    btn.textContent = closedText;
                    btn.classList.remove(openClass);
                    btn.classList.add(closedClass);
                } else {
                    btn.textContent = openText;
                    btn.classList.remove(closedClass);
                    btn.classList.add(openClass);
                }
            });
        });
    });
</script>
