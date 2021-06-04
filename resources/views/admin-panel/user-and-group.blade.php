<x-layouts.admin-panel>
    <x-slot name="content">
        <div class="p-5">
            <h1>Пользователь и группы</h1>
            <h4>добавляйте пользователя(-ей) в группу</h4>

            <div class="row">
                <div class="col-md">
                    <form method="get" action="{{ route('admin-panel.user-and-group.search') }}">
                        <div class="form-row">
                            <div class="form-group col-md-10">
                                <input type="text" class="form-control" name="search" placeholder="Найти человека...">
                            </div>

                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary btn-block">Поиск</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <form action="" method="post" id="add-user-to-group">
                <div class="row">
                    <div class="col-md">
                        @include('components.users.users-list-with-select', ['users' => $users])
                        <div class="d-flex justify-content-center">{{ $users->links() }} </div>
                    </div>
                    <div class="col-md">
                        @include('components.groups.group-list-select', ['groups' => $groups])
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <button type="submit" class="btn btn-success btn-block btn-lg">добавить
                            пользователя(-ей) в группу</button>
                    </div>
                </div>
            </form>
        </div>

    </x-slot>
</x-layouts.admin-panel>
