@php
$scrollTo = false;

$scrollIntoViewJsSnippet = '';
$currentPage = $paginator->currentPage();
$lastPage = $paginator->lastPage();
$window = 2; // show currentPage ±2
@endphp

<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center items-center space-x-2 mt-6 font-poppins">

            {{-- First Page Link --}}
            @if (! $paginator->onFirstPage())
                <button
                    type="button"
                    wire:click="gotoPage(1)"
                    x-on:click="{{ $scrollIntoViewJsSnippet }}"
                    wire:loading.attr="disabled"
                    class="w-8 h-8 rounded-full bg-[#48BDAC] text-white flex items-center justify-center hover:bg-[#3da69d] transition"
                >&laquo;</button>
            @else
                <span class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center cursor-not-allowed">&laquo;</span>
            @endif

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center cursor-not-allowed">&lsaquo;</span>
            @else
                <button
                    type="button"
                    wire:click="previousPage('{{ $paginator->getPageName() }}')"
                    x-on:click="{{ $scrollIntoViewJsSnippet }}"
                    wire:loading.attr="disabled"
                    class="w-8 h-8 rounded-full bg-[#48BDAC] text-white flex items-center justify-center hover:bg-[#3da69d] transition"
                >&lsaquo;</button>
            @endif

            {{-- Page Number Buttons --}}
            @foreach ($elements as $element)
                @if (is_array($element))
                    {{-- Ellipsis before --}}
                    @if ($currentPage - $window > 2)
                        <span class="px-2 text-gray-400">...</span>
                    @endif

                    @foreach ($element as $page => $url)
                        @if ($page >= $currentPage - $window && $page <= $currentPage + $window)
                            @if ($page == $currentPage)
                                <span class="w-8 h-8 rounded-full bg-[#502C58] text-white flex items-center justify-center font-semibold">
                                    {{ $page }}
                                </span>
                            @else
                                <button
                                    type="button"
                                    wire:click="gotoPage({{ $page }})"
                                    x-on:click="{{ $scrollIntoViewJsSnippet }}"
                                    wire:loading.attr="disabled"
                                    class="w-8 h-8 rounded-full bg-white border border-gray-300 text-[#502C58] flex items-center justify-center hover:bg-[#eee] transition"
                                >
                                    {{ $page }}
                                </button>
                            @endif
                        @endif
                    @endforeach

                    {{-- Ellipsis after --}}
                    @if ($currentPage + $window < $lastPage - 1)
                        <span class="px-2 text-gray-400">...</span>
                    @endif
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <button
                    type="button"
                    wire:click="nextPage('{{ $paginator->getPageName() }}')"
                    x-on:click="{{ $scrollIntoViewJsSnippet }}"
                    wire:loading.attr="disabled"
                    class="w-8 h-8 rounded-full bg-[#48BDAC] text-white flex items-center justify-center hover:bg-[#3da69d] transition"
                >&rsaquo;</button>
            @else
                <span class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center cursor-not-allowed">&rsaquo;</span>
            @endif

            {{-- Last Page Link --}}
            @if ($paginator->hasMorePages())
                <button
                    type="button"
                    wire:click="gotoPage({{ $paginator->lastPage() }})"
                    x-on:click="{{ $scrollIntoViewJsSnippet }}"
                    wire:loading.attr="disabled"
                    class="w-8 h-8 rounded-full bg-[#48BDAC] text-white flex items-center justify-center hover:bg-[#3da69d] transition"
                >&raquo;</button>
            @else
                <span class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center cursor-not-allowed">&raquo;</span>
            @endif

        </nav>
    @endif
</div>
