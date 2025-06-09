{{-- resources/views/update.blade.php --}}
<x-admin-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl font-bold text-[#502C58]">Update</h1>
    </div>
    <div class="flex flex-col gap-5">
        @include('Components.admin.update-announcements')
        @include('Components.admin.update-educational')
        @include('Components.admin.update-gallery')
    </div>
</x-admin-layout>
