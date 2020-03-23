@if ($paginator->hasPages())
<style>
.page-link{
    color:#797979;
}
</style>

    <div class="container">
        <div class="row">

            <div class="col-12 col-md-3">
                <p>Mostrando {{$paginator->firstItem()}}-{{$paginator->lastItem()}} de {{$paginator->total()}} Registros</p>
            </div>
            
            <div class="col-12 col-md-9">
                <ul class="pagination justify-content-end" role="navigation">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active" aria-current="page"><span style="background-color:#4ecdc4; border-color:#48bcb4" class="page-link">{{ $page }}</span></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-link" aria-hidden="true">&rsaquo;</span>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@else
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-3">
                @if(isset($busqueda))
                    <p>Resultado de: {{$busqueda}}</p>
                @endif
                <p>Mostrando {{$paginator->firstItem()}}-{{$paginator->lastItem()}} de {{$paginator->total()}} Registros</p>
            </div>
        </div>
    </div>
@endif
