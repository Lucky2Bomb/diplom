<x-layouts.admin-panel header="Университеты"
    subtitle="Создавайте или удаляйте университеты. Следует помнить: при удалении университета, группа, привязанная к университету удалена не будет.">
    <x-slot name="content">
        <div class="p-5">
            <div class="row">
                <div class="col-md">
                    <form method="post" action="{{ route('admin-panel.university.store') }}">
                        @csrf
                        <div class="form-row p-1">
                            <div class="form-group w-100">
                                <label for="name">Введите название университета:</label>
                                <input type="text" class="form-control" minlength="2" maxlength="255" name="name"
                                    placeholder="Напимер: Филиал МГУ...">
                            </div>

                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    @include('components.tables.table-for-university-faculty-specialty', ['rows' => $universities, 'destroyRouteName' => 'admin-panel.university.destroy'])
                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.admin-panel>
