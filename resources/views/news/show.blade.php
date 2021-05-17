<x-layouts.app title="Новости университета">
    <x-slot name="content">
        <x-title-header title="Новости" />
        <style>
            img {
                max-width: 100%;
                height: auto;
                object-fit: cover;
            }
        </style>
        <div class="container text-justify mb-0">
            <x-button-back />
            @auth
            <div class="form-group pt-2">
                <a class="btn btn-success btn-sm" href="{{ route($edit_route, ['id'=>$news->id]) }}">Изменить</a>
            </div>
            @endauth
            <div class="card-body pl-0 pr-0 pt-0">

                <h4 class="card-title">{{$news->title}}</h4>
                <h6 class="card-subtitle mb-2 text-muted">
                    {{date('d.m.Y H:m', strtotime($news->published_at))}}</h6>
                @if($news->preview_image)<img class="img-fluid" style="width: 100%"
                    src="{{"/upload/" . $news->preview_image}}" alt="" srcset="">
                @endif
                {!!$news->description!!}
            </div>

            @foreach ($comments as $comment)
            <x-comments.comment />
            @endforeach

            {{-- <div class="d-flex justify-content-center">{{ $comments->links() }} </div> --}}
        </div>
        </div>
    </x-slot>
</x-layouts.app>
