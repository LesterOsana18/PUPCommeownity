<x-admin-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl font-bold text-[#502C58]">Moderation</h1>
    </div>

    <div class="flex flex-col gap-5">
        @include('components.admin.moderation-reports')
        @include('components.admin.moderation-posts')
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
