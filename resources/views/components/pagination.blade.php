@if ($paginator->hasPages())
<ul class='pagination' role='navigation'>
  <li>Rows per page: {{ $paginator->perPage() }}</li>
  <li>
    {{ ($paginator->currentPage() - 1) * $paginator->perPage() + 1 }} -
    {{ ($paginator->currentPage() - 1) * $paginator->perPage() + $paginator->count() }}
    of {{ $paginator->total() }}
  </li>
  {{-- Previous Page Link --}}
  @if ($paginator->onFirstPage())
  <li class='page-item disabled' aria-disabled='true'>
    <span class='page-link'>@lang('pagination.previous')</span>
  </li>
  @else
  <li class='page-item'>
    <a class='page-link' href='{{ $paginator->previousPageUrl() }}' rel='prev'>@lang('pagination.previous')</a>
  </li>
  @endif

  {{-- Next Page Link --}}
  @if ($paginator->hasMorePages())
  <li class='page-item'>
    <a class='page-link' href='{{ $paginator->nextPageUrl() }}' rel='next'>@lang('pagination.next')</a>
  </li>
  @else
  <li class='page-item disabled' aria-disabled='true'>
    <span class='page-link'>@lang('pagination.next')</span>
  </li>
  @endif
</ul>
@endif
