<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" style="border: none;">ID</th>
                <th scope="col" style="border: none;">ФИО</th>
                <th scope="col" style="border: none;">email</th>
                <th scope="col" style="border: none;">должность</th>
                <th scope="col" style="border: none;">дата регистрации</th>
                <th scope="col" style="border: none;"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->surname . ' ' . $row->name . ' ' . $row->patronymic}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->position_name}}</td>
                <td><x-date date="{{$row->created_at}}"/></td>
                <td>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin-panel.users.show', ['id'=>$row->id]) }}" class="btn btn-primary btn-sm mr-2">изменить</a>
                        <a href="{{ route('profile.show', ['id'=>$row->id]) }}" class="btn btn-secondary btn-sm">подробнее</a>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
