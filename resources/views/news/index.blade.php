<x-layouts.app title="Новости университета">
    <x-slot name="content">
        <x-title-header title="Новости" />
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2">
                @foreach ($news as $item)
                <div class="col p-1">
                    <div class="card text-justify h-100 d-flex flex-column justify-content-between">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                {{date('d.m.Y H:m', strtotime($item->published_at))}}</h6>
                            <img class="img-fluid" style="width: 100%"
                                src='{{$item->link_to_preview_image ? "/upload/$item->link_to_preview_image" : "/upload/no-image.jpg"}}'
                                alt="" srcset="">
                            {!!$item->preview_text!!}
                        </div>
                        <div class="card-body pt-0">
                            <a href="#" class="card-link">Card link</a>
                            {{-- <a href="#" class="card-link">Another link</a> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{ $news->links() }}
        </div>
    </x-slot>
</x-layouts.app>
