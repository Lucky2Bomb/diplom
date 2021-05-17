<x-layouts.app title="{{$isCreate ? 'Создание группы' : 'Редактирование группы'}}">
    <x-slot name="content">
        <x-title-header title="{{$isCreate ? 'Создание группы' : 'Редактирование группы'}}"/>
        <div class="container">
            @include('components.errors', ['errors' => $errors])

            <form method="post">
                @if(!$isCreate)
                @method('PATCH')
                @endif
                @csrf
                <div class="form-group">
                    <label for="name">Название группы</label>
                    <input type="text" class="form-control" minlength="3" maxlength="255" name="name"
                        value="{{$group->name}}" required placeholder="имя *">

                    <small class="form-text text-muted">Обязательное поле</small>
                </div>

                <div class="form-group">
                    <label for="start_date">Дата начала обучения</label>
                    <input type="date" class="form-control" name="start_date" value="{{$group->start_date ?? null}}">
                    <small class="form-text text-muted">Необязательное поле</small>
                </div>


                <div class="form-group">
                    <label for="end_date">Дата окончания обучения</label>
                    <input type="date" class="form-control" name="end_date" value="{{$group->end_date ?? null}}">
                    <small class="form-text text-muted">Необязательное поле</small>
                </div>

                {{-- {{dd($group_form_of_studyings, $universities, $faculties, $specialties)}} --}}

                <div class="form-group">
                    <label for="position_name">Форма обучения</label>
                    <select class="form-control" name="group_form_of_studying_type">
                        <option value="{{null}}">-</option>
                        @foreach ($group_form_of_studyings as $group_form_of_studying)
                        <option
                        @if (!$isCreate && isset($group->group_form_of_studying_type))
                            @if($group_form_of_studying->name == $group->group_form_of_studying_type)
                            selected
                            @endif
                        @endif
                        >{{$group_form_of_studying->name}}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-muted">Необязательное поле</small>
                </div>

                <div class="form-group">
                    <label for="position_name">Университет</label>
                    <select class="form-control" name="university_name">
                        <option value="{{null}}">-</option>
                        @foreach ($universities as $university)
                        <option
                        @if (!$isCreate && isset($group->university_name))
                            @if($university->name == $group->university_name)
                            selected
                            @endif
                        @endif
                        >{{$university->name}}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-muted">Необязательное поле</small>
                </div>

                <div class="form-group">
                    <label for="position_name">Факультет</label>
                    <select class="form-control" name="faculty_name">
                        <option value="{{null}}">-</option>
                        @foreach ($faculties as $faculty)
                        <option
                        @if (!$isCreate && isset($group->faculty_name))
                            @if($faculty->name == $group->faculty_name)
                            selected
                            @endif
                        @endif
                        >{{$faculty->name}}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-muted">Необязательное поле</small>
                </div>

                <div class="form-group">
                    <label for="position_name">Специальность</label>
                    <select class="form-control" name="specialty_name">
                        <option value="{{null}}">-</option>
                        @foreach ($specialties as $specialty)
                        <option
                        @if (!$isCreate && isset($group->group_form_of_studying_type))
                            @if($specialty->name == $group->specialty_name)
                            selected
                            @endif
                        @endif
                        >{{$specialty->name}}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-muted">Необязательное поле</small>
                </div>

                <div class="form-group">
                    <label for="is_closed">Тип группы</label>
                    <select class="form-control" name="is_closed">
                        <option value="0" selected>Открытая</option>
                        <option value="1">Закрытая</option>
                    </select>
                    <small class="form-text text-muted">В закрытую группу нельзя вступить. В неё могут добавить
                        пользователи с ролями <b>ADMIN</b> или <b>GROUP</b></small>
                </div>

                <div class="text-right pb-2">
                    <button type="submit" class="btn btn-success">
                        @if ($isCreate)
                        Создать
                        @else
                        Изменить
                        @endif</button>
                </div>


            </form>

        </div>
    </x-slot>
</x-layouts.app>
