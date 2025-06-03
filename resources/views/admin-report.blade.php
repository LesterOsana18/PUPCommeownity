<x-admin-layout>
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl text-[#502C58]">
            Moderation
            <b> / Report</b>
        </h1>
    </div>
    <div class="flex flex-col gap-5 rounded-xl bg-white/10 backdrop-blur-lg shadow-md p-6 border border-gray-200">
        <div class="flex">
            <a href="/moderation" class="flex items-center rounded-lg px-3 py-2 bg-[#502C58] text-white text-sm font-semibold hover:bg-[#2e1a33]">
                <i class="fa-solid fa-arrow-up-right-from-square mr-2"></i>
                Go Back
            </a>
        </div>
        <div class="flex flex-col text-sm lg:flex-row lg:items-center lg:gap-20 gap-2">
            <div class="flex items-center gap-2">
                <p class="font-bold">Status:</p>
                <button
                class="status-toggle rounded-lg w-28 py-1 font-semibold text-white bg-[#4ABDAC] hover:bg-[#E7AB39]"
                data-open-text="OPEN"
                data-closed-text="CLOSED"
                data-open-class="bg-[#4ABDAC]"
                data-closed-class="bg-[#815F20]"
                >OPEN</button>
            </div>
            <div class="flex items-center gap-2">
                <p class="font-bold">Date & Time Spotted:</p>
                <p id="">April 30, 2025, 8:00 AM</p>
            </div>
            <div class="flex items-center gap-2">
                <p class="font-bold">Report No.:</p>
                <p id="">1</p>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <div class="w-lg aspect-[3/2]">
                <img src="images/carousel-temp-1.jpg" alt="Cat 1" class="w-full h-full object-cover rounded-[15px]">
            </div>
        </div>
        <div class="flex flex-col gap-2 text-sm">
            <p class="font-bold text-lg">Cat's Details</p>
            <div>
                <p class="font-bold">Cat Description:</p>
                <p id="">Lorem ipsum dolor sit amet consectetur adipiscing elit. Ex sapien vitae pellentesque sem placerat in id. Pretium tellus duis convallis tempus leo eu aenean. Urna tempor pulvinar vivamus fringilla lacus nec metus. Iaculis massa nisl malesuada lacinia integer nunc posuere. Semper vel class aptent taciti sociosqu ad litora. Conubia nostra inceptos himenaeos orci varius natoque penatibus. Dis parturient montes nascetur ridiculus mus donec rhoncus. Nulla molestie mattis scelerisque maximus eget fermentum odio. Purus est efficitur laoreet mauris pharetra vestibulum fusce.</p>
            </div>
            <div class="flex flex-col lg:flex-row lg:gap-2">
                <p class="font-bold">Location:</p>
                <p id="">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="flex flex-col gap-2 text-sm">
            <p class="font-bold text-lg">Additional Details</p>
            <div>
                <p class="font-bold">Condition/Behavior Observed:</p>
                <p id="">Lorem ipsum dolor sit amet consectetur adipiscing elit. Ex sapien vitae pellentesque sem placerat in id. Pretium tellus duis convallis tempus leo eu aenean. Urna tempor pulvinar vivamus fringilla lacus nec metus. Iaculis massa nisl malesuada lacinia integer nunc posuere. Semper vel class aptent taciti sociosqu ad litora. Conubia nostra inceptos himenaeos orci varius natoque penatibus. Dis parturient montes nascetur ridiculus mus donec rhoncus. Nulla molestie mattis scelerisque maximus eget fermentum odio. Purus est efficitur laoreet mauris pharetra vestibulum fusce.</p>
            </div>
            <div class="flex flex-row gap-2">
                <p class="font-bold">Is this a Recurring Sight?:</p>
                <p id="">No</p>
            </div>
        </div>
        <div class="flex flex-col gap-2 text-sm">
            <p class="font-bold text-lg">Reporter's Details</p>
            <div class="flex flex-row gap-2">
                <p class="font-bold">Reporter By:</p>
                <p id="">Paula Sanchez</p>
            </div>
            <div class="flex flex-row gap-2">
                <p class="font-bold">Email Address:</p>
                <p id="">paulasanchez@gmail.com</p>
            </div>
            <div class="flex flex-row gap-2">
                <p class="font-bold">Affliation:</p>
                <p id="">Student</p>
            </div>
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