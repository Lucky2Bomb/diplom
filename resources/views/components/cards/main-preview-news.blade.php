<div class="col p-0">
    <div class="text-justify h-100 d-flex flex-column justify-content-between">
        <div class="card-body pb-0 pl-0 pt-0">
            <x-adaptive-image height='350px'
                src='{{$item->preview_image ? "/upload/{$item->preview_image}" : "/no-image.jpg"}}' />
            <h4 class="card-title font-weight-bold pt-1">{{$item->title}}
                @role('ADMIN|PUBLICATIONS')
                @if ($item->is_published)
                <span class="text-success">[опубликовано]</span>
                @else
                <span class="text-danger">[не опубликовано]</span>@endif
                @endrole
            </h4>
            <p class="card-subtitle mb-2 text-muted">
                {{date('d.m.Y H:m', strtotime($item->published_at))}}</p>

            <p>{{$item->preview_text}}</p>
        </div>
        <div class="card-body pt-0 d-flex align-items-end justify-content-end">
            <a href="{{route('news.show', $item->id)}}" class="card-link">Подробнее</a>
            {{-- <a href="#" class="card-link">Another link</a> --}}
        </div>
    </div>
</div>
