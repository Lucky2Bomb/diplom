<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" style="border: none;">название</th>
                <th scope="col" style="border: none;"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
            <tr>
                <td>
                    {{$row->name}}
                </td>
                <td>
                    <div class="d-flex justify-content-end">
                        <form action="{{ route($destroyRouteName, ['name'=>$row->name]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">удалить</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
