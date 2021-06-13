<x-layouts.admin-panel header="{{'пользователь: ' . $user->surname . ' ' . $user->name . ' ' . $user->patronymic}}"
    subtitle="">
    <x-slot name="content">
        <div class="p-5">
            <div class="row mt-2 mb-2">
                <div class="col-md">
                    <a href="{{ route('profile.show', ['id'=>$user->id]) }}" style="display: block;"><b>ссылка на профиль</b></a>

                    <form action="{{ route('admin-panel.users.update', ['id'=>$user->id]) }}" method="post" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <input type="text" name="delete_avatar" style="display: none;" value="{{true}}">
                        <button class="btn btn-primary mt-2" type="submit" @if (!isset($user->avatar))
                            disabled
                        @endif>Удалить аватар</button>

                    </form>

                    <form action="{{ route('admin-panel.users.update', ['id'=>$user->id]) }}" method="post" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <input type="text" name="delete_background_image" style="display: none;" value="{{true}}">
                        <button class="btn btn-primary mt-2 ml-2" type="submit" @if (!isset($user->header_background_image))
                            disabled
                        @endif>Удалить фон</button>

                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md">

                    <form action="{{ route('admin-panel.users.update', ['id'=>$user->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="password">Задать новый пароль (от 8 символов):</label>
                        <div class="input-group mb-3">
                            <input type="text" name="password" class="form-control" minlength="8"
                                placeholder="новый пароль...">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="submit">Задать</button>
                            </div>
                        </div>

                    </form>

                    <form action="{{ route('admin-panel.users.update', ['id'=>$user->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="surname">Фамилия:</label>
                        <div class="input-group mb-3">
                            <input type="text" name="surname" class="form-control" placeholder="фамилия..."
                                value="{{$user->surname}}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="sumbit">Изменить</button>
                            </div>
                        </div>

                    </form>

                    <form action="{{ route('admin-panel.users.update', ['id'=>$user->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="name">Имя:</label>
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="имя..."
                                value="{{$user->name}}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="sumbit">Изменить</button>
                            </div>
                        </div>
                    </form>

                    <form action="{{ route('admin-panel.users.update', ['id'=>$user->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="patronymic">Отчество:</label>
                        <div class="input-group mb-3">
                            <input type="text" name="patronymic" class="form-control" placeholder="отчество..."
                                value="{{$user->patronymic}}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="sumbit">Изменить</button>
                            </div>
                        </div>

                    </form>

                    <form action="{{ route('admin-panel.users.update', ['id'=>$user->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="email">Email:</label>
                        <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control" placeholder="электронная почта..."
                                value="{{$user->email}}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="sumbit">Изменить</button>
                            </div>
                        </div>

                    </form>

                    <form action="{{ route('admin-panel.users.update', ['id'=>$user->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="position_name">Должность:</label>
                        <div class="input-group">
                            <select class="custom-select" name="position_name">
                                @foreach ($positions as $position)
                                <option value="{{$position->name}}" @if($position->name == $user->position_name)
                                    selected @endif>{{$position->name}}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Изменить</button>
                            </div>
                        </div>

                    </form>

                    <form action="{{ route('admin-panel.users.update', ['id'=>$user->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="roles[]" class="pt-3">Роли:</label>
                        <div class="d-flex align-items-center">
                            <br>
                            @foreach ($roles as $role)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="{{$role->name}}" name="roles[]"
                                    value="{{$role->name}}" @if (array_search($role->name, $user_roles) !== false)
                                checked
                                @endif>
                                <label class="form-check-label" for="{{$role->name}}">{{$role->name}}</label>
                            </div>
                            @endforeach
                            <button class="btn btn-primary" type="submit">Изменить</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.admin-panel>
