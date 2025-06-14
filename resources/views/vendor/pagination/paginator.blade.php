@php
    $current = $paginator->currentPage();
    $last = $paginator->lastPage();
    $start = max(1, min($current - 1, $last - 2));
    $end = min($last, $start + 2);
@endphp

@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center items-center space-x-2 mt-6 font-poppins">
        {{-- First Page --}}
        @if ($current > 1)
            <button wire:click="gotoPage(1)"
                class="w-8 h-8 rounded-full bg-white border border-gray-300 text-[#502C58] flex items-center justify-center hover:bg-[#eee] transition">
                &laquo;&laquo;
            </button>
        @else
            <span class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center cursor-not-allowed">
                &laquo;&laquo;
            </span>
        @endif

        {{-- Previous Page --}}
        @if ($paginator->onFirstPage())
            <span class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center cursor-not-allowed">
                &lsaquo;
            </span>
        @else
            <button wire:click="previousPage"
               class="w-8 h-8 rounded-full bg-[#48BDAC] text-white flex items-center justify-center hover:bg-[#3da69d] transition">
               &lsaquo;
            </button>
        @endif

        {{-- Page Numbers --}}
        @for ($page = $start; $page <= $end; $page++)
            @if ($page == $current)
                <span class="w-8 h-8 rounded-full bg-[#502C58] text-white flex items-center justify-center font-semibold">
                    {{ $page }}
                </span>
            @else
                <button wire:click="gotoPage({{ $page }})"
                   class="w-8 h-8 rounded-full bg-white border border-gray-300 text-[#502C58] flex items-center justify-center hover:bg-[#eee] transition">
                    {{ $page }}
                </button>
            @endif
        @endfor

        {{-- Next Page --}}
        @if ($paginator->hasMorePages())
            <button wire:click="nextPage"
               class="w-8 h-8 rounded-full bg-[#48BDAC] text-white flex items-center justify-center hover:bg-[#3da69d] transition">
               &rsaquo;
            </button>
        @else
            <span class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center cursor-not-allowed">
                &rsaquo;
            </span>
        @endif

        {{-- Last Page --}}
        @if ($current < $last)
            <button wire:click="gotoPage({{ $last }})"
               class="w-8 h-8 rounded-full bg-white border border-gray-300 text-[#502C58] flex items-center justify-center hover:bg-[#eee] transition">
               &raquo;&raquo;
            </button>
        @else
            <span class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center cursor-not-allowed">
                &raquo;&raquo;
            </span>
        @endif
    </nav>
@endif