{{-- resources/views/Components/admin/update-gallery.blade.php --}}
<div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200" id="gallery">
    <h1 class="text-xl text-[#4ABDAC] font-bold">Gallery</h1>
    <div class="flex justify-between">
        <div class="flex gap-2">
            <button id="edit-button" class="rounded-lg px-3 py-2 bg-blue-500 text-white text-sm font-semibold hover:bg-blue-600 flex items-center">
                <i class="fa-regular fa-pen-to-square mr-2"></i> Edit
            </button>
            <button class="rounded-lg px-3 py-2 bg-red-500 text-white text-sm font-semibold hover:bg-red-600 flex items-center">
                <i class="fa-regular fa-trash-can mr-2"></i> Delete
            </button>
        </div>
        <label for="image-upload" class="rounded-lg px-3 py-2 bg-[#E7AB39] text-white text-sm font-semibold hover:bg-[#815F20] flex items-center cursor-pointer">
            <i class="fa-solid fa-upload mr-2"></i> Upload
        </label>
        <input type="file" id="image-upload" class="hidden">
    </div>
    <div class="flex items-center gap-2">
        <p class="text-base font-bold">Images:</p>
        <button id="select-button" class="rounded-lg px-3 py-2 bg-[#502C58] text-white text-sm font-semibold hover:bg-[#2e1a33] flex items-center">Select</button>
        <button id="select-all-button" class="rounded-lg px-3 py-2 bg-[#502C58] text-white text-sm font-semibold hover:bg-[#2e1a33] flex items-center">Select All</button>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        @for($i=1; $i<=12; $i++)
            <div class="aspect-[3/2] bg-gray-200 rounded-lg overflow-hidden relative">
                <img src="images/carousel-temp-{{ $i }}.jpg" alt="Image {{ $i }}" class="w-full h-full object-cover">
                <input type="checkbox" class="absolute top-2 left-2 w-5 h-5 hidden" />
            </div>
        @endfor
    </div>
    <div class="flex justify-center text-sm space-x-2">
        <button class="w-8 h-8 text-white bg-[#0a9396] rounded-full hover:bg-[#0a9396]/80 font-bold">1</button>
        <button class="w-8 h-8 text-[#0a9396] bg-white rounded-full hover:bg-[#0a9396]/20">2</button>
        <button class="w-8 h-8 text-[#0a9396] bg-white rounded-full hover:bg-[#0a9396]/20">3</button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const editBtn = document.getElementById('edit-button'),
            selectBtn = document.getElementById('select-button'),
            selectAllBtn = document.getElementById('select-all-button'),
            checkboxes = document.querySelectorAll('#gallery input[type="checkbox"]');
    let visible = false, all = false;

    editBtn.addEventListener('click', () => {
        visible = !visible;
        checkboxes.forEach(cb => cb.classList.toggle('hidden', !visible));
    });
    selectAllBtn.addEventListener('click', () => {
        if (!visible) { editBtn.click(); }
        all = !all;
        checkboxes.forEach(cb => cb.checked = all);
    });
});
</script>
