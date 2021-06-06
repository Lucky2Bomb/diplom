<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">ID</th>
                <th scope="col">ФИО</th>
                <th scope="col"></th>
                <th scope="col">должность</th>
                <th scope="col">группа</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>
                    <input type="checkbox" name="users_id[]" value="{{$user->id}}">
                </td>
                <td><a href="{{ route('profile.show', ['id'=>$user->id]) }}">{{$user->id}}</a>
                <td><a href="{{ route('profile.show', ['id'=>$user->id]) }}">{{$user->surname}}
                        {{$user->name}} {{$user->patronymic}}</a></td>
                <td></td>
                <td><a href="{{ route('profile.show', ['id'=>$user->id]) }}">{{$user->position_name}}</a>
                </td>
                {{-- {{dd($user->group()->first()->name)}} --}}
                <td>
                    @if($user->group_id)
                    <a href="{{ route('group.show', ['id'=>$user->group_id]) }}">{{$user->group()->first()->name}}</a>
                    @else
                    <span>-</span>
                    @endif
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>
