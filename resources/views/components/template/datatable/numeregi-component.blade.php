<div>
    @if ($paginator->hasPages())
        <div class="d-flex justify-content-between align-items-center pt-2 pb-2 pr-2">
            <span class="text-muted ml-2">
                Mostrando <strong>{{ $paginator->firstItem() }}</strong> - <strong>{{ $paginator->lastItem() }}</strong> de <strong>{{ $paginator->total() }}</strong> registros
            </span>
            <nav>
                <ul class="pagination pagination-sm mb-0">
                @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <span class="page-link">&laquo; Anterior</span>
        </li>
        @else
        <li class="page-item">
            <a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev">&laquo; Anterior</a>
        </li>
        @endif

        {{-- Números de página --}}
        @foreach ($paginator->links()->elements as $element)
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="page-item active">
            <span class="page-link">{{ $page }}</span>
        </li>
        @else
        <li class="page-item">
            <a href="{{ $url }}" class="page-link">{{ $page }}</a>
        </li>
        @endif
        @endforeach
        @endforeach

        {{-- Botón "Siguiente" --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next">Siguiente &raquo;</a>
        </li>
        @else
        <li class="page-item disabled">
            <span class="page-link">Siguiente &raquo;</span>
        </li>
        @endif
                </ul>
            </nav>
        </div>
    @endif
</div>
