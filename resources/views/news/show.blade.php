<x-layouts.app title="Новости университета">
    <x-slot name="content">
        <x-title-header title="Новости" />
        <style>
            img {
                max-width: 100%;
                height: auto;
                object-fit: cover;
            }

            .cancel-radio-check:hover {
                cursor: pointer;
                text-decoration: underline;
            }
        </style>
        <div class="container text-justify mb-0">
            <x-button-back />

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <div class="form-group pt-2">
                @auth
                <a class="btn btn-success btn-sm" href="{{ route($edit_route, ['id'=>$news->id]) }}">Изменить</a>
                @endauth
            </div>
            <div class="card-body pl-0 pr-0 pt-0">

                <h4 class="card-title">{{$news->title}}</h4>
                <h6 class="card-subtitle mb-2 text-muted">
                    {{date('d.m.Y H:m', strtotime($news->published_at))}}</h6>
                @if($news->preview_image)<img class="img-fluid" style="width: 100%"
                    src="{{"/upload/" . $news->preview_image}}" alt="" srcset="">
                @endif
                {!!$news->description!!}
            </div>

            <div>
                <b>Комментарии:</b>
            </div>

            <form action="{{ route($comment_route, ['id'=>$news->id]) }}" method="post">
                @csrf
                @foreach ($comments as $comment)
                <x-comments.comment name="{{$comment->user()->get()->first()->name}}"
                    surname="{{$comment->user()->get()->first()->surname}}" description="{{$comment->description}}"
                    img="{{$comment->user()->get()->first()->avatar}}" date="{{$comment->created_at}}"
                    idUser="{{$comment->user()->get()->first()->id}}" reply="{{null}}" />
                @endforeach

                @auth
                <div class="mt-4">
                    <span id="reply_to" style="display: none;"> ответить <a href="#" id="radio_checked_name">name</a> |
                        <b class="text-danger cancel-radio-check" onclick="
                        document.getElementById('reply_to').style.cssText = 'display: none;';
                        reset_reply_radiobuttons();
                        document.getElementById('description').innerText = '';
                        ">отмена</b> </span>
                </div>
                <div class="form-group mt-0">
                    <textarea class="form-control" placeholder="Введите ваш комментарий..." id="description"
                        minlength="1" maxlength="255" rows="3" name="description" style="resize: none;"
                        required></textarea>
                    <div class="text-right mt-2">
                        <button type="submit" class="btn btn-primary mb-2">Отправить</button>
                    </div>
                </div>
            </form>
            @endauth

            <div class="d-flex justify-content-center">{{ $comments->links() }}</div>
        </div>
        </div>
    </x-slot>

    <x-slot name="scripts">
        <script type="text/javascript">
            function reset_reply_radiobuttons() {
                // reset all checked radiobuttons(reply)
            let reply_user_id = document.getElementsByName('reply_user_id');
            reply_user_id.forEach(item => {
                item.checked = false;
            });
            };

            window.onload = function() {
                reset_reply_radiobuttons();
            }
        </script>
    </x-slot>
</x-layouts.app>
