@php
    $current = $paginator->currentPage();
    $last    = $paginator->lastPage();

    // Determine start/end for a 3-page window
    $start = max(1, min($current - 1, $last - 2));
    $end   = min($last, $start + 2);
@endphp

<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center items-center space-x-2 mt-6 font-poppins">
            {{-- First Page Link --}}
            @if ($current > 1)
                <button
                    type="button"
                    wire:click="gotoPage(1, '{{ $paginator->getPageName() }}')"
                    wire:loading.attr="disabled"
                    class="w-8 h-8 rounded-full bg-white border border-gray-300 text-[#502C58] flex items-center justify-center hover:bg-[#eee] transition"
                >&laquo;&laquo;</button>
            @else
                <span class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center cursor-not-allowed">&laquo;&laquo;</span>
            @endif

            {{-- Previous Page Link --}}
            @if ($current > 1)
                <button
                    type="button"
                    wire:click="previousPage('{{ $paginator->getPageName() }}')"
                    wire:loading.attr="disabled"
                    class="w-8 h-8 rounded-full bg-[#48BDAC] text-white flex items-center justify-center hover:bg-[#3da69d] transition"
                >&lsaquo;</button>
            @else
                <span class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center cursor-not-allowed">&lsaquo;</span>
            @endif

            {{-- Page Number Links (3 max) --}}
            @for ($page = $start; $page <= $end; $page++)
                @if ($page == $current)
                    <span
                        class="w-8 h-8 rounded-full bg-[#502C58] text-white flex items-center justify-center font-semibold"
                    >{{ $page }}</span>
                @else
                    <button
                        type="button"
                        wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                        wire:loading.attr="disabled"
                        class="w-8 h-8 rounded-full bg-white border border-gray-300 text-[#502C58] flex items-center justify-center hover:bg-[#eee] transition"
                    >{{ $page }}</button>
                @endif
            @endfor

            {{-- Next Page Link --}}
            @if ($current < $last)
                <button
                    type="button"
                    wire:click="nextPage('{{ $paginator->getPageName() }}')"
                    wire:loading.attr="disabled"
                    class="w-8 h-8 rounded-full bg-[#48BDAC] text-white flex items-center justify-center hover:bg-[#3da69d] transition"
                >&rsaquo;</button>
            @else
                <span class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center cursor-not-allowed">&rsaquo;</span>
            @endif

            {{-- Last Page Link --}}
            @if ($current < $last)
                <button
                    type="button"
                    wire:click="gotoPage({{ $last }}, '{{ $paginator->getPageName() }}')"
                    wire:loading.attr="disabled"
                    class="w-8 h-8 rounded-full bg-white border border-gray-300 text-[#502C58] flex items-center justify-center hover:bg-[#eee] transition"
                >&raquo;&raquo;</button>
            @else
                <span class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center cursor-not-allowed">&raquo;&raquo;</span>
            @endif
        </nav>
    @endif
</div>
