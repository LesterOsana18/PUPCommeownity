<x-admin-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl font-bold text-[#502C58]">Moderation</h1>
    </div>

    <div class="flex flex-col gap-5">
        @include('components.admin.moderation-reports') {{-- ['reports' => $reports]) --}}

        <div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="posts">
            <h1 class="text-xl text-[#4ABDAC] font-bold">Posts</h1>
            <div class="flex items-center gap-2 mb-4">
                <a href="{{ route('moderation') }}"
                class="px-4 py-2 rounded-lg text-sm font-semibold {{ is_null($filter) ? 'bg-[#502C58] text-white' : 'bg-gray-200 text-gray-700' }}">
                    All
                </a>
                <a href="{{ route('moderation', ['filter' => 'open']) }}"
                class="px-4 py-2 rounded-lg text-sm font-semibold {{ $filter === 'open' ? 'bg-[#4ABDAC] text-white' : 'bg-gray-200 text-gray-700' }}">
                    OPEN
                </a>
                <a href="{{ route('moderation', ['filter' => 'closed']) }}"
                class="px-4 py-2 rounded-lg text-sm font-semibold {{ $filter === 'closed' ? 'bg-[#815F20] text-white' : 'bg-gray-200 text-gray-700' }}">
                    CLOSED
                </a>
            </div>

            <div class="overflow-x-auto w-full">
                <table class="table-fixed min-w-full border border-collapse text-sm">
                    @include('components.admin.moderation-posts')
                </table>
            </div>
        </div>

        @include('components.admin.moderation-messages')

    </div>
</x-admin-layout>
