<div class="col p-0">
    <div class="text-justify h-100 d-flex flex-column justify-content-between">
        <div class="card-body row pb-0">
            <div class="col-md-6 p-0">
                <x-adaptive-image height='175px' src='{{$item->preview_image ? "/upload/{$item->preview_image}" : "/no-image.jpg"}}' />
            </div>
            <div class="col-md-6 p-0">
                <div class="col-md-12">
                    <h5 class="card-title font-weight-bold pt-1">{{$item->title}}
                        @role('ADMIN|PUBLICATIONS')
                        @if ($item->is_published)
                        <span class="text-success">[опубликовано]</span>
                        @else
                        <span class="text-danger">[не опубликовано]</span>@endif
                        @endrole
                    </h5>
                </div>
                <div class="col-md-12">
                    <p class="card-subtitle mb-2 text-muted">
                        {{date('d.m.Y H:m', strtotime($item->published_at))}}</p>
                </div>
                <div class="col-md-12">
                    <a href="{{route('news.show', $item->id)}}" class="card-link">Подробнее</a>
                    {{-- <a href="#" class="card-link">Another link</a> --}}
                </div>
            </div>

        </div>
    </div>
</div>
