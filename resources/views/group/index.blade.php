<x-layouts.app title="Группы">
    <x-slot name="content">
        <x-title-header title="Группы" />
        <div class="container">
            <a class="btn btn-primary m-2" href="{{ route('group.create') }}">создать</a>
            <form method="get" action="{{ route('group.search') }}">
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <input type="text" minlength="2" required class="form-control" name="search"
                            placeholder="Поиск группы...">
                    </div>
                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-primary btn-block">Поиск</button>
                    </div>
                </div>
            </form>
            @if(count($groups))
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">название</th>
                            <th scope="col">года обучения</th>
                            <th scope="col">форма обучения</th>
                            <th scope="col">университет</th>
                            <th scope="col">факультет</th>
                            <th scope="col">специальность</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($groups as $group)
                        <tr>

                            <td><a href="{{ route('group.show', ['id'=>$group->id]) }}">{{$group->name}}</a></td>
                            <td>{{$group->start_date ? date('Y', strtotime($group->start_date)) . '-' . date('Y', strtotime($group->end_date)) : "-"}}
                            </td>
                            <td>{{$group->group_form_of_studying_type}}</td>
                            <td>{{$group->university_name}}</td>
                            <td>{{$group->faculty_name}}</td>
                            <td>{{$group->specialty_name}}</td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">{{ $groups->links() }} </div>
            @else
            такие группы не найдены
            @endif
        </div>
        </div>
    </x-slot>
</x-layouts.app>
