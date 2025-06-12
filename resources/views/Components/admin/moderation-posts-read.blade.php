<x-admin-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl text-[#502C58]">
            Moderation <b> / Post</b>
        </h1>
    </div>

    {{-- Flash Message --}}
    @if (session('message'))
        <div class="mb-4 px-4 py-2 bg-green-100 border border-green-400 text-green-800 rounded">
            {{ session('message') }}
        </div>
    @endif

    {{-- Button Row --}}
    <div class="flex gap-2 mb-4">
        <a href="{{ route('moderation') }}" class="flex items-center rounded-lg px-3 py-2 bg-[#502C58] text-white text-sm font-semibold hover:bg-[#2e1a33]">
            <i class="fa-solid fa-arrow-left mr-2"></i> Go Back
        </a>
        <form method="POST" action="{{ route('moderation.posts.delete', $post) }}" onsubmit="return confirm('Are you sure you want to delete this post?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="rounded-lg px-3 py-2 bg-red-500 text-white text-sm font-semibold hover:bg-red-600 flex items-center">
                <i class="fa-regular fa-trash-can mr-2"></i> Delete
            </button>
        </form>
    </div>

    {{-- Toggle Status --}}
    <div class="flex items-center gap-2 mb-6">
        <p class="font-bold">Status:</p>
        <form id="toggle-form" action="{{ route('moderation.posts.toggle', $post) }}" method="POST" onsubmit="return confirmToggleStatus()">
            @csrf
            @method('PUT')
            <button
                type="submit"
                class="rounded-lg px-3 py-1 text-white font-semibold
                    {{ $post->is_approved ? 'bg-[#4ABDAC]' : 'bg-[#815F20]' }} hover:bg-[#E7AB39]">
                {{ $post->is_approved ? 'OPEN' : 'CLOSED' }}
            </button>
        </form>
    </div>

    {{-- Main Content --}}
    <form method="POST" action="{{ route('moderation.posts.update', $post) }}" enctype="multipart/form-data"
        class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200">
        @csrf

        <div class="flex flex-col gap-2 text-sm">
            <p class="font-bold text-lg">Title</p>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" class="rounded-lg bg-[#F1EAEA] p-2" disabled>
        </div>

        <div class="flex flex-col justify-between text-sm lg:flex-row lg:items-center lg:gap-20 gap-2">
            <div class="flex items-center gap-2">
                <p class="font-bold">Date & Time Posted:</p>
                <input type="datetime-local" value="{{ $post->created_at->format('Y-m-d\TH:i') }}" class="rounded-lg bg-[#F1EAEA] p-2" readonly>
            </div>
            <div class="flex items-center gap-2">
                <p class="font-bold">Post ID:</p>
                <input type="text" value="{{ $post->id }}" class="rounded-lg bg-[#F1EAEA] p-2" readonly>
            </div>
        </div>

        @if ($post->image_path && file_exists(public_path($post->image_path)) && $post->image_path !== 'images/def-img.svg')
            <div class="flex items-center justify-center">
                <img src="{{ asset($post->image_path) }}" alt="Post Image"
                    class="rounded-[15px] w-full max-h-64 object-cover" />
            </div>
        @endif

        <div class="flex flex-col gap-2 text-sm">
            <p class="font-bold text-lg">Body Content</p>
            <textarea name="content" rows="5" class="rounded-lg bg-[#F1EAEA] p-2" disabled>{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="flex flex-col gap-2 text-sm">
            <p class="font-bold text-lg">Poster's Details</p>
            <div class="flex flex-row items-center gap-2">
                <p class="font-bold">Posted By:</p>
                <input type="text" value="{{ $post->user ? $post->user->first_name . ' ' . $post->user->last_name : 'Unknown' }}" class="rounded-lg bg-[#F1EAEA] p-2 w-64" disabled>
            </div>
            <div class="flex flex-row items-center gap-2">
                <p class="font-bold">Email Address:</p>
                <input type="email" value="{{ $post->user->email ?? 'N/A' }}" class="rounded-lg bg-[#F1EAEA] p-2 w-64" disabled>
            </div>
        </div>
    </form>

    <script>
        function confirmToggleStatus() {
            return confirm("Are you sure you want to toggle the status of this post?");
        }
    </script>
</x-admin-layout>
