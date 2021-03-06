<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                @role('ADMIN|GROUPS')
                <th scope="col"></th>
                @endrole
                <th scope="col">ФИО</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">должность</th>
                <th scope="col">роли</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>

                @role('ADMIN|GROUPS')
                <td>
                    <input type="checkbox" name="users_id[]" value="{{$user->id}}">
                </td>
                @endrole
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
