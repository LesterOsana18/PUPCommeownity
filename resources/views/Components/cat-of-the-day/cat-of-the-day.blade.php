@props(['day'])

<div class="cat-of-the-day-wrapper overflow-visible" id="{{ $day }}-cat-wrapper">
    @include("components.cat-of-the-day.days.{$day}")

    <script>
        (function(){
            const wrapper = document.getElementById('{{ $day }}-cat-wrapper');
            const svgRoot  = wrapper.querySelector('svg');

            // configuration: change these to control how much movement overall
            const DEFAULT_MAX_X = 8; // max ±px horizontally
            const DEFAULT_MAX_Y = 5; // max ±px vertically

            // pick all shape/container elements you want animated:
            const candidates = svgRoot.querySelectorAll('path, circle, rect, ellipse, polygon, polyline, g');

            // build our movables array just like before
            const movables = Array.from(candidates).map(el => {
            // each element gets its own random maxX/Y between 0.5× and 1.5× the defaults
            const maxX = DEFAULT_MAX_X * (0.5 + Math.random());
            const maxY = DEFAULT_MAX_Y * (0.5 + Math.random());
            // random bias direction
            const angle = Math.random() * Math.PI * 2;
            return {
                el,
                maxX,
                maxY,
                biasX: Math.cos(angle),
                biasY: Math.sin(angle),
                targetX: 0, targetY: 0,
                currentX: 0, currentY: 0
            };
            });

            // keep wrapper bounds up to date
            let rect = wrapper.getBoundingClientRect();
            window.addEventListener('resize', () => rect = wrapper.getBoundingClientRect());
            window.addEventListener('scroll', () => rect = wrapper.getBoundingClientRect());

            // on every mousemove, compute global relX/relY
            window.addEventListener('mousemove', e => {
            let relX = (e.clientX - rect.left)  / rect.width  - 0.5;
            let relY = (e.clientY - rect.top)   / rect.height - 0.5;
            relX = Math.max(-0.5, Math.min(0.5, relX));
            relY = Math.max(-0.5, Math.min(0.5, relY));

            movables.forEach(item => {
                // dot against each element’s bias
                const influence = relX * item.biasX + relY * item.biasY;
                item.targetX = influence * item.maxX * 2;
                item.targetY = influence * item.maxY * 2;
            });
            });

            // smooth lerp loop
            function animate() {
            movables.forEach(item => {
                item.currentX += (item.targetX - item.currentX) * 0.1;
                item.currentY += (item.targetY - item.currentY) * 0.1;
                item.el.style.transform =
                `translate3d(${item.currentX.toFixed(2)}px, ${item.currentY.toFixed(2)}px, 0)`;
            });
            requestAnimationFrame(animate);
            }
            animate();

            // reset on blur
            window.addEventListener('blur', () => {
            movables.forEach(i => i.targetX = i.targetY = 0);
            });
        })();
    </script>
</div>
