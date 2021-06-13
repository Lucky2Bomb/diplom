<x-layouts.admin-panel header="Должности" subtitle="все должности для пользователей">
    <x-slot name="content">
        <div class="p-5">
            <div class="row">
                <div class="col-md">
                    <form method="post" action="{{ route('admin-panel.positions.store') }}">
                        @csrf
                        <div class="form-row pt-2">
                            <div class="form-group col-md-10">
                                <input type="text" class="form-control" name="name"
                                    placeholder="например: секретарь...">
                            </div>
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary btn-block">добавить должность</button>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" style="border: none;">Название</th>
                                    <th scope="col" style="border: none;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($positions as $position)
                                <tr>
                                    <td>{{$position->name}}</td>
                                    <td class="d-flex justify-content-end">
                                        <form method="post" action="{{ route('admin-panel.positions.destroy', ['name' =>$position->name]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm mr-2">удалить</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.admin-panel>
