<x-layouts.admin-panel header="Пользователи"
    subtitle="управление всеми пользователями">
    <x-slot name="content">
        <div class="p-5">
            <div class="row">
                <div class="col-md">
                    <form method="get" action="{{ route('admin-panel.users.search') }}">
                        <div class="form-row pt-2">
                            <div class="form-group col-md-10">
                                <input type="text" class="form-control" name="search"
                                    placeholder="например: Иванов Иван...">
                            </div>
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary btn-block">Поиск</button>
                            </div>
                        </div>
                    </form>
                    @include('components.tables.table-users', [
                    'rows' => $users->items()
                    ])
                    <div class="d-flex justify-content-center">{{ $users->links() }} </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.admin-panel>
