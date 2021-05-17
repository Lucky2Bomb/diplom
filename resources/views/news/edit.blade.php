<x-layouts.app title="{{$isCreate ? 'Создание публикации' : 'Редактирование публикации'}}">
    <x-slot name="content">
        <x-title-header title="{{$isCreate ? 'Создание публикации' : 'Редактирование публикации'}}" />
        <div class="container">
            <x-button-back />
            @include('components.errors', ['errors' => $errors])

            <div class="pt-4 pb-2">
                @if(isset($news->published_at))
                <ul class="list-group">
                    <li class="list-group-item"><b>Дата создания:</b>
                        {{date('d.m.Y H:m', strtotime($news->created_at))}}</li>
                    <li class="list-group-item"><b>Дата последнего обновления:</b>
                        {{date('d.m.Y H:m', strtotime($news->updated_at))}}</li>
                    @if($news->published_at)
                    <li class="list-group-item"><b>Дата публикации:</b>
                        {{date('d.m.Y H:m', strtotime($news->published_at))}}</li>
                    @endif
                </ul>
                @endif
                {{-- 'title'
                        'description'
                        'is_published'
                        'published_at'
                        'created_at'
                        'updated_at'
                        'user_id'
                        'preview_text'
                        'preview_image' --}}
                <form method="POST" enctype="multipart/form-data">
                    @if (!$isCreate)
                    @method('PATCH')
                    @endif
                    @csrf
                    <div class="form-group pt-2">
                        <label><b>Заголовок (до 250 символов)</b></label>
                        <input type="text" name="title" class="form-control" minlength="3" maxlength="250" required
                            value="{{old('title') ?? $news->title}}" />
                    </div>
                    <div class="form-group">
                        <label><b>Текст статьи</b></label>
                        <textarea class="summernote" name="description">{!!$news->description!!}</textarea>
                    </div>
                    <div class="form-group">
                        <label><b>Текст для предварительного просмотра (до 250 символов)</b></label>
                        <textarea name="preview_text" class="form-control" minlength="3" required
                            maxlength="250">{{old('preview_text') ?? $news->preview_text}}</textarea>
                    </div>
                    <div class="form-group">
                        <label><b>Изображение для предварительного просмотра (до 5мб)</b></label>

                        <img class="img-fluid" id="img_preview" style="width: 100%"
                            src='{{"/upload/$news->preview_image"}}' alt="" srcset="">

                        <input type="file" name="preview_image" id="imgInp" class="form-control-file pt-2"
                            accept="image/jpeg">
                    </div>

                    <div class="form-check pb-3">
                        <input type="hidden" name="is_delete_preview_image" value="0" style="display: none;">
                        <input class="form-check-input" type="checkbox" value="1" name="is_delete_preview_image">

                        <label class="form-check-label" for="is_delete_preview_image">
                            Удалить изображение предварительного просмотра
                        </label>
                    </div>
                    {{-- @role('ADMIN|PUBLICATIONS|NEWS') --}}
                    <div class="form-check pb-3 pl-0">
                        <input type="hidden" name="is_published" value="0" style="display: none;">
                        <input class="checkbox" type="checkbox" name="is_published" @if($news->is_published) checked
                        @endif value="1" @if ($isCreate) checked @endif>

                        <label class="form-check-label" for="is_published">
                            @if($news->is_published) Опубликовано @else Опубликовать @endif
                        </label>
                    </div>
                    {{-- @endrole --}}

                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm">Опубликовать</button>
                    </div>
                </form>

                @if (!$isCreate)
                @role('ADMIN|PUBLICATIONS|NEWS')
                @method('DELETE')
                <form method="post">
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-sm">Удалить публикацию</button>
                    </div>
                </form>
                @endrole
                @endif
            </div>
        </div>
    </x-slot>
    <x-slot name="styles">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    </x-slot>
    <x-slot name="scripts">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
        <script src="{{ asset('plugins/summernote/langs/summernote-ru-RU.js') }}"></script>
        <script type="text/javascript">
            $('.summernote').summernote({
                lang: 'ru-RU',
                height: 500
            });
            $('.dropdown-toggle').dropdown()

            function readURL(input) {

                if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img_preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function() {
            readURL(this);
            });
        </script>
    </x-slot>
</x-layouts.app>
