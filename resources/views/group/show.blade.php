<x-layouts.app title="{{$group->name}}">
    <x-slot name="content">
        <x-title-header title="{{$group->name . ' ' . $groupDate}}" />
        <div class="container">
            @auth
            <div class="d-flex flex-row bd-highlight">
                <div class="bd-highlight">
                    <form method="post" action="{{'/group/' . $group->id . '/join' }}">
                        @csrf
                        <button class="btn btn-success m-2">вступить</button>
                    </form>
                </div>
                @role('ADMIN|GROUPS')

                <div class="bd-highlight">
                    <a href="{{ route('group.edit', ['id'=>$group->id]) }}" class="btn btn-primary m-2">изменить</a>
                </div>

                <div class="bd-highlight">
                    <form method="post" action="{{'/group/' . $group->id }}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger m-2">удалить</button>
                    </form>
                </div>
                @endrole
            </div>
            @endauth

            <ul class="list-group">
                @if(isset($group->name))
                <li class="list-group-item"><b>Название: </b>{{$group->name}}</li>
                @endif

                @if (isset($group->start_date) && isset($group->end_date))
                <li class="list-group-item"><b>Года обучения:
                    </b>{{$group->start_date ? date('Y', strtotime($group->start_date)) . '-' . date('Y', strtotime($group->end_date)) : "-"}}
                </li>
                @endif

                @if (isset($group->is_closed))
                <li class="list-group-item"><b>Тип группы:
                    </b>{{$group->is_closed ? 'закрытая' : 'открытая'}}</li>
                @endif

                @if (isset($group->group_form_of_studying_type))
                <li class="list-group-item"><b>Форма обучения: </b>{{$group->group_form_of_studying_type}}</li>
                @endif

                @if (isset($group->university_name))
                <li class="list-group-item"><b>Университет: </b>{{$group->university_name}}</li>
                @endif

                @if (isset($group->faculty_name))
                <li class="list-group-item"><b>Факультет: </b>{{$group->faculty_name}}</li>
                @endif

                @if (isset($group->specialty_name))
                <li class="list-group-item"><b>Специальность: </b>{{$group->specialty_name}}</li>
                @endif
            </ul>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ФИО</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">должность</th>
                            <th scope="col">роли</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($group->users as $user)
                        <tr>

                            <td><a href="{{ route('profile.show', ['id'=>$user->id]) }}">{{$user->surname}}
                                    {{$user->name}} {{$user->patronymic}}</a></td>
                            <td></td>
                            <td></td>
                            <td><a href="{{ route('profile.show', ['id'=>$user->id]) }}">{{$user->position_name}}</a>
                            </td>
                            <td><a href="{{ route('profile.show', ['id'=>$user->id]) }}">@foreach ($user->getRoleNames()
                                    as
                                    $role)
                                    <span>{{$role . ', '}} </span>
                                    @endforeach</a></td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </x-slot>
</x-layouts.app>
