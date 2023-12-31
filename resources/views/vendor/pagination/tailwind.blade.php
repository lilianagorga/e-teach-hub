@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="bg-medium text-dark flex items-center justify-between rounded">
        <div class="flex justify-between flex-1">
            @if ($paginator->onFirstPage())
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-dark bg-light border border-light cursor-default leading-5 rounded-md">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-dark bg-light border border-light leading-5 rounded-md hover-medium focus:outline-none focus:ring ring-light ring-inset focus-border-light active-bg-light active-dark transition ease-in-out duration-150">
                    {!! __('pagination.previous') !!}
                </a>
            @endif
              <div class="max-[900px]:hidden md:max-2xl">
                <span class="relative z-0 inline-flex shadow-sm rounded-md">
{{--                     Previous Page Link --}}
                  @if ($paginator->onFirstPage())
                    <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-dark bg-light border border-light cursor-default rounded-l-md leading-5" aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                  @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-dark bg-light border border-light rounded-l-md leading-5 hover-medium focus:z-10 focus:outline-none focus:ring ring-light ring-inset focus-border-light active-bg-light active-dark transition ease-in-out duration-150" aria-label="{{ __('pagination.previous') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                  @endif

{{--                   Pagination Elements --}}
                  @foreach ($elements as $element)
{{--                     "Three Dots" Separator --}}
                    @if (is_string($element))
                      <span aria-disabled="true">
                                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-dark bg-light border border-light cursor-default leading-5">{{ $element }}</span>
                            </span>
                    @endif

{{--                     Array Of Links --}}
                    @if (is_array($element))
                      @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                          <span aria-current="page">
                                        <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-dark bg-light border border-light cursor-default leading-5">{{ $page }}</span>
                                    </span>
                        @else
                          <a href="{{ $url }}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-dark bg-light border border-light leading-5 hover-medium focus:z-10 focus:outline-none focus:ring ring-light ring-inset focus-border-light active-bg-light active-dark transition ease-in-out duration-150" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                        @endif
                      @endforeach
                    @endif
                  @endforeach

{{--                   Next Page Link --}}
                  @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-medium bg-light border border-light rounded-r-md leading-5 hover-medium focus:z-10 focus:outline-none focus:ring ring-light ring-inset focus-border-light  active-bg-dark active-medium transition ease-in-out duration-150" aria-label="{{ __('pagination.next') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                  @else
                    <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <span class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-dark bg-light border border-light cursor-default rounded-r-md leading-5" aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                  @endif
                </span>
              </div>
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-6 py-2 text-sm font-medium text-dark bg-light border border-light leading-5 rounded-md hover-medium focus:outline-none focus:ring ring-light ring-inset focus-border-light active-bg-light active-dark transition ease-in-out duration-150">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="relative inline-flex items-center px-6 py-2 text-sm font-medium text-dark bg-light border border-light cursor-default leading-5 rounded-md">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>


    </nav>
@endif
