<x-admin-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl font-bold text-[#502C58]">Tables</h1>
    </div>
    <div class="flex flex-col gap-5">
        @include('Components.admin.table-adoption')
        @include('Components.admin.table-donation')
        @include('Components.admin.table-application')
    </div>
</x-admin-layout>
