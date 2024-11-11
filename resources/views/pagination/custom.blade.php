@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Página anterior --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">⬅️</span> <!-- Emoji de flecha hacia atrás -->
            </li>
        @else
            <li class="page-item">
                <a href="{{ $paginator->previousPageUrl() }}" class="page-link">⬅️</a> <!-- Emoji de flecha hacia atrás -->
            </li>
        @endif

        {{-- Páginas --}}
        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}">
                        <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                    </li>
                @endforeach
            @endif
        @endforeach

        {{-- Página siguiente --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a href="{{ $paginator->nextPageUrl() }}" class="page-link">➡️</a> <!-- Emoji de flecha hacia adelante -->
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">➡️</span> <!-- Emoji de flecha hacia adelante -->
            </li>
        @endif
    </ul>
@endif
