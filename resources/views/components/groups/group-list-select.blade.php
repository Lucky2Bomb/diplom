<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">ID</th>
                <th scope="col">название</th>
                <th scope="col">года обучения</th>
                <th scope="col">форма обучения</th>
                <th scope="col">тип группы</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="radio" name="id" value="0"></td>
                <td>0</td>
                <td>без группы</td>
                <td></td>
                <td></td>
                <td></td>


            </tr>
            @foreach ($groups as $group)
            <tr>
                <td><input type="radio" name="id" value="{{$group->id}}"></td>
                <td>{{$group->id}}</td>
                <td><a href="{{ route('group.show', ['id'=>$group->id]) }}">{{$group->name}}</a></td>
                <td>{{$group->start_date ? date('Y', strtotime($group->start_date)) . '-' . date('Y', strtotime($group->end_date)) : "-"}}
                </td>
                <td>{{$group->group_form_of_studying_type ? $group->group_form_of_studying_type : '-'}}</td>
                <td class="{{$group->is_closed ? 'text-danger' : 'text-success'}}">
                    <b>{{$group->is_closed ? 'закрытая': 'открытая'}}</b></td>


            </tr>
            @endforeach

        </tbody>
    </table>
</div>
