<x-layouts.app title="Новости университета">
    <x-slot name="content">
        <x-title-header title="Новости" />
        <div class="container">
            @role('ADMIN')
            <div class="row pt-2">
                <a class="btn btn-dark mr-2" href="{{ route('news', ['type_published'=>'published']) }}">Опубликованные</a>
                <a class="btn btn-dark mr-2" href="{{ route('news', ['type_published'=>'notPublished']) }}">Не опубликованные</a>
                <a class="btn btn-dark mr-2" href="{{ route('news', ['type_published'=>'allPublished']) }}">Все</a>
            </div>
            @endrole

            {{-- {{dd(boolval($news[11231]))}} --}}
            @if ($currentPage === 1 && count($news) >= $pageSize)
            <div class="row">
                <div class="col-md-6 p-0">
                    <h2 class="pt-3">Последние новости</h2>
                    @include('components.cards.main-preview-news', ['item' => $news[0]])
                </div>
                <div class="col-md-6 p-0">
                    <div class="row">
                        <div class="col-md-12">@include('components.cards.preview-news-small', ['item' => $news[2]])
                        </div>
                        <div class="col-md-12">@include('components.cards.preview-news-small', ['item' => $news[3]])
                        </div>
                        <div class="col-md-12">@include('components.cards.preview-news-small', ['item' => $news[4]])
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 p-0">@include('components.cards.preview-news-small', ['item' => $news[1]])</div>
                <div class="col-md-6 p-0">@include('components.cards.preview-news-small', ['item' => $news[5]])</div>
            </div>

            <hr />

            <div class="row row-cols-1 row-cols-md-2">
                @for ($i = 6; $i < $pageSize; $i++) @include('components.cards.preview-news', ['item'=> $news[$i]])
                    @endfor
            </div>
            @else
            <div class="row row-cols-1 row-cols-md-2">
                @foreach ($news as $item)
                @include('components.cards.preview-news', ['item' => $item])
                @endforeach
            </div>
            @endif

            <div class="d-flex justify-content-center">{{ $news->links() }} </div>

        </div>
        </div>
    </x-slot>
</x-layouts.app>
