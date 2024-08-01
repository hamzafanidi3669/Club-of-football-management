{{-- 
<style>
    /* .pagination{
        display: grid;
        justify-content: center
    } */
    .pagination a,
.pagination span {
    display: inline-block;
    padding: 10px 20px;
    margin-right: 5px;
    border: 1px solid #156927;
    border-radius: 3px;
    color: #13892D;
    text-decoration: none;
    background-color: #ffffff;
    transition: all 0.2s ease-in-out;
}

.pagination a:hover {
    background-color: #13892D;
    color: #ffff;
}

.pagination span.active {
    background-color: #13892D;
    color: #fff;
    position: relative;
    bottom: 3px;

    border-color: #156927;

}

.pagination span.disabled,
.pagination a.disabled {
    pointer-events: none;
    color: #bbb;
    background-color: #13892D;
    /* background-color: #13892D; */

    border-color: #156927;
}
.pagination{
    display: flex;
    justify-content: center
}
/* .voirplus,precedent{
    width: 300px;
    font-weight: 700;
    font-size: 19px;
} */ --}}
{{-- </style> --}}


<div class="pagination">
    @if ($paginator->hasPages())
        {{-- Bouton précédent --}}
        @if ($paginator->onFirstPage())
            <span class="disabled">&laquo; Précédent</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="precedent" rel="prev">&laquo; Précédent</a>
        @endif

        {{-- Boutons de pagination --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="disabled">{{ $element }}</span>
            @endif

            {{-- Lien vers la page actuelle --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="active">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Bouton suivant --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="voirplus" rel="next">Voir plus &raquo;</a>
        @else
            <span class="disabled">Voir plus &raquo;</span>
        @endif
    @endif
</div>
