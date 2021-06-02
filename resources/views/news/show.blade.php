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

            @auth
            <div class="form-group pt-2 d-flex justify-content-between">
                @role('ADMIN|PUBLICATIONS|NEWS')
                <a class="btn btn-success btn-sm" href="{{ route($edit_route, ['id'=>$news->id]) }}">Изменить</a>
                @endrole

                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">
                    Пожаловаться
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Жалоба</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{'/complaint/' . $news->id . '/create'}}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="complaintDescription"> Кратко опишите причину жалобы</label>
                                        <textarea class="form-control" id="complaintDescription" name="description"
                                            rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Закрыть</button>
                                    <button type="submit" class="btn btn-primary">Пожаловаться</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal -->

            </div>
            {{-- <div class="modal-dialog modal-dialog-centered">
                <form action="" method="post">
                    @csrf

                    <button class="btn btn-warning btn-sm" type="submit">Пожаловаться</button>
                </form>
            </div> --}}
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

            <div>
                <b>Комментарии:</b>
            </div>

            <form action="{{ route('comment.create', ['id'=>$news->id]) }}" method="post">
                @csrf
                @foreach ($comments as $comment)
                <x-comments.comment
                    id="{{$comment->id}}"
                    name="{{$comment->user()->get()->first()->name}}"
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
