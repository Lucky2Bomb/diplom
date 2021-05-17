<div class="col p-0">
    <div class="text-justify h-100 d-flex flex-column justify-content-between">
        <div class="card-body pb-0 pl-0">
            <h4 class="card-title font-weight-bold pt-1">{{$item->title}}
            </h4>
            <p class="card-subtitle mb-2 text-muted">
                {{date('d.m.Y H:m', strtotime($item->published_at))}}</p>
            <x-adaptive-image height='250px' src='{{$item->preview_image ? "/upload/{$item->preview_image}" : "/no-image.jpg"}}' />

            {{-- <div style="height: 150px;">
                <img class="img-fluid" style="width: 100%; max-width: 100%; max-height: 100%; object-fit: cover;"
                    src='{{$item->preview_image ? "/upload/$item->preview_image" : "/no-image.jpg"}}'
                    alt="" srcset="">
            </div> --}}
            <p>{{$item->preview_text}}</p>
        </div>
        <div class="card-body pt-0 d-flex align-items-end justify-content-end">
            <a href="{{route('publications.show', $item->id)}}" class="card-link">Подробнее</a>
            {{-- <a href="#" class="card-link">Another link</a> --}}
        </div>
    </div>
</div>
