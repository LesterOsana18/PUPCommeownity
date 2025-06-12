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
            <a href="{{ $paginator->url(1) }}#posts"
               class="w-8 h-8 rounded-full bg-white border border-gray-300 text-[#502C58] flex items-center justify-center hover:bg-[#eee] transition">
               &laquo;&laquo;
            </a>
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
            <a href="{{ $paginator->previousPageUrl() }}#posts"
               class="w-8 h-8 rounded-full bg-[#48BDAC] text-white flex items-center justify-center hover:bg-[#3da69d] transition">
               &lsaquo;
            </a>
        @endif

        {{-- Page Numbers --}}
        @for ($page = $start; $page <= $end; $page++)
            @if ($page == $current)
                <span class="w-8 h-8 rounded-full bg-[#502C58] text-white flex items-center justify-center font-semibold">
                    {{ $page }}
                </span>
            @else
                <a href="{{ $paginator->url($page) }}#posts"
                   class="w-8 h-8 rounded-full bg-white border border-gray-300 text-[#502C58] flex items-center justify-center hover:bg-[#eee] transition">
                    {{ $page }}
                </a>
            @endif
        @endfor

        {{-- Next Page --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}#posts"
               class="w-8 h-8 rounded-full bg-[#48BDAC] text-white flex items-center justify-center hover:bg-[#3da69d] transition">
               &rsaquo;
            </a>
        @else
            <span class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center cursor-not-allowed">
                &rsaquo;
            </span>
        @endif

        {{-- Last Page --}}
        @if ($current < $last)
            <a href="{{ $paginator->url($last) }}#posts"
               class="w-8 h-8 rounded-full bg-white border border-gray-300 text-[#502C58] flex items-center justify-center hover:bg-[#eee] transition">
               &raquo;&raquo;
            </a>
        @else
            <span class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center cursor-not-allowed">
                &raquo;&raquo;
            </span>
        @endif
    </nav>
@endif
