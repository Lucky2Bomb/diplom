<x-layouts.app title="Редактирование профиля">
    <x-slot name="content">
        <x-title-header title="Редактирование профиля" />
        <div class="container text-justify mb-0">
            <x-button-back />

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form method="post" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="surname">Фамилия</label>
                    <input type="text" class="form-control" name="surname" value="{{$profile->surname}}">
                </div>

                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" class="form-control" name="name" value="{{$profile->name}}">
                </div>

                <div class="form-group">
                    <label for="patronymic">Отчество</label>
                    <input type="text" class="form-control" name="patronymic" value="{{$profile->patronymic}}">
                </div>

                <div class="form-group">
                    <label for="vk">vk</label>
                    <input type="text" class="form-control" name="vk" value="{{$profile->vk}}">
                </div>

                <div class="form-group">
                    <label for="ok">ok</label>
                    <input type="text" class="form-control" name="ok" value="{{$profile->ok}}">
                </div>

                <div class="form-group">
                    <label for="facebook">facebook</label>
                    <input type="text" class="form-control" name="facebook" value="{{$profile->facebook}}">
                </div>

                <div class="form-group">
                    <label for="telegram">telegram</label>
                    <input type="text" class="form-control" name="telegram" value="{{$profile->telegram}}">
                </div>

                <div class="form-group">
                    <label for="phone_number">Номер телефона</label>
                    <input type="text" class="form-control" name="phone_number" value="{{$profile->phone_number}}">
                </div>

                <div class="form-group">
                    <label for="position_name">Должность</label>
                    <select class="form-control" name="position_name">
                        @foreach ($positions as $position)
                        <option @if ($profile->position_name == $position->name)
                            selected
                            @endif>{{$position->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="avatar">Аватар (до 5мб)</label>

                    <input type="file" name="avatar" id="avatar" class="form-control-file"
                        accept="image/jpeg">
                </div>

                <div class="form-group">
                    <label for="avatar">Фоновая картинка профиля (до 5мб)</label>

                    <input type="file" name="header_background_image" id="header_background_image" class="form-control-file"
                        accept="image/jpeg">
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-success">Изменить</button>
                </div>
            </form>

            <hr />


        </div>
        </div>
    </x-slot>
</x-layouts.app>
