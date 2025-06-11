<!-- resources/views/components/modals/carousel.blade.php -->
<div id="carouselModal" class="fixed inset-0 z-50 bg-black/50 backdrop-blur-sm hidden items-center justify-center">
    <div class="relative bg-white rounded-2xl max-w-2xl w-full shadow-lg p-6">
        <!-- Close Button -->
        <button onclick="closeCarouselModal()" class="absolute top-4 right-4 text-gray-600 hover:text-black text-xl">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <!-- Title -->
        <h2 id="modal-title" class="text-2xl font-extrabold text-[#502C58] mb-2"></h2>

        <!-- Author and Date -->
        <p id="modal-author" class="text-sm text-gray-500 mb-4"></p>

        <!-- Image (if available) -->
        <div class="mb-4">
            <img id="modal-image" src="" alt="Announcement Image"
                class="w-full h-auto max-h-64 object-cover rounded-lg hidden" />
        </div>

        <!-- Scrollable Text Box -->
        <div
            id="modal-body"
            class="text-gray-600 text-sm leading-relaxed whitespace-pre-line max-h-48 overflow-y-auto pr-2 px-3 py-2 rounded-md border border-gray-200 bg-gray-50"
            style="line-height: 1.5;"
        ></div>
    </div>
</div>

<script>
    function openCarouselModal(button) {
        const item = JSON.parse(button.getAttribute('data-announcement'));

        const modal = document.getElementById('carouselModal');

        document.getElementById('modal-title').textContent = item.title;
        const date = new Date(item.created_at);

        const formattedDate = new Intl.DateTimeFormat('en-US', {
            month: 'long',
            day: 'numeric',
            year: 'numeric',
            hour: 'numeric',
            minute: '2-digit',
            hour12: true
        }).format(date);

        document.getElementById('modal-author').textContent =
            `By ${item.author} • ${formattedDate}`;
        document.getElementById('modal-body').textContent = item.content;

        const imageEl = document.getElementById('modal-image');

        if (item.image_path.startsWith('images/')) {
            // Temporary images in /public/images
            imageEl.src = '/' + item.image_path;
            imageEl.classList.remove('hidden');
        } else {
            // Uploaded images stored in /storage
            const cleanPath = item.image_path.replace(/^public[\\/]/, '');
            imageEl.src = '/storage/' + cleanPath;
            imageEl.classList.remove('hidden');
        }

        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeCarouselModal() {
        document.getElementById('carouselModal').classList.add('hidden');
    }
</script>
